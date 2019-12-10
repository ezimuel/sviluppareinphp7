<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

interface Handler
{
    public function next(Handler $handler): Handler;
    public function handle(string $request): string;
}

/**
 * The default chaining behavior can be implemented inside a base handler class.
 */
abstract class AbstractHandler implements Handler
{
    /**
     * @var Handler
     */
    private $nextHandler;

    public function next(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $request): string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }
        return $request;
    }
}

class UpperCaseHandler extends AbstractHandler
{
    public function handle(string $request): string
    {
        return parent::handle(strtoupper($request));
    }
}

class TrimHandler extends AbstractHandler
{
    public function handle(string $request): string
    {
        return parent::handle(trim($request));
    }
}

$text = ' Test! ';
$upper = new UpperCaseHandler();
$trim = new TrimHandler();

$upper->next($trim);
$result = $upper->handle($text);
var_dump($result);
