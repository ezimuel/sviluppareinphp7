<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class Abstraction
{

    protected $implementation;

    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }
    public function operation(): string
    {
        return sprintf(
            "Abstraction: %s\n",
            $this->implementation->operationImplementation()
        );
    }
}

class ExtendedAbstraction extends Abstraction
{
    public function operation(): string
    {
        return sprintf(
            "ExtendedAbstraction: %s\n",
            $this->implementation->operationImplementation()
        );
    }
}

interface Implementation
{
    public function operationImplementation(): string;
}

class ConcreteImplementationA implements Implementation
{
    public function operationImplementation(): string
    {
        return __CLASS__;
    }
}

class ConcreteImplementationB implements Implementation
{
    public function operationImplementation(): string
    {
        return __CLASS__;
    }
}

$implementation = new ConcreteImplementationA;
$abstraction = new Abstraction($implementation);
echo $abstraction->operation();

$implementation = new ConcreteImplementationB;
$abstraction = new ExtendedAbstraction($implementation);
echo $abstraction->operation();
