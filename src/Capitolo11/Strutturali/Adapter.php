<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class Target
{
    public function request(): string
    {
        return "Target: comportamento originale";
    }
}

class Adaptee
{
    public function specificRequest(): string
    {
        return "oirartnoc la agnirts :eetpadA";
    }
}

class Adapter extends Target
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }
    public function request(): string
    {
        return "Adapter: " . strrev($this->adaptee->specificRequest());
    }
}

$target = new Target();
printf("%s\n", $target->request());

$adaptee = new Adaptee();
printf ("%s\n", $adaptee->specificRequest());

$adapter = new Adapter($adaptee);
printf("%s\n", $adapter->request());
