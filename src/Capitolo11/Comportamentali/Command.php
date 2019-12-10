<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

interface Command
{
    public function execute(): void;
}

class SimpleCommand implements Command
{
    private $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }
    public function execute(): void
    {
        printf("Simple command: print %s\n", $this->payload);
    }
}

class ComplexCommand implements Command
{
    private $receiver;
    private $a;
    private $b;

    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }
    public function execute(): void
    {
        printf("Complex command: utilizzo un oggetto receiver\n");
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}

class Receiver
{
    public function doSomething(string $a): void
    {
        printf ("Receiver: lavorando su %s\n", $a);
    }
    public function doSomethingElse(string $b): void
    {
        printf ("Receiver: lavorando anche su %s\n", $b);
    }
}

class Invoker
{
    private $onStart;
    private $onFinish;

    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }
    public function setOnFinish(Command $command): void
    {
        $this->onFinish = $command;
    }

    public function doSomethingImportant(): void
    {
        if ($this->onStart instanceof Command) {
            $this->onStart->execute();
        }
        echo "Invoker: eseguendo la business logic...\n";
        if ($this->onFinish instanceof Command) {
            $this->onFinish->execute();
        }
    }
}

$invoker = new Invoker;
$invoker->setOnStart(new SimpleCommand('task1'));
$invoker->setOnFinish(new ComplexCommand(new Receiver, 'task2', 'task3'));
$invoker->doSomethingImportant();
