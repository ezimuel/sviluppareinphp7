<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class Prototype
{
    public $primitive;
    public $component;
    public $circularReference;

    public function __clone()
    {
        $this->component = clone $this->component;
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;
    }
}

class ComponentWithBackReference
{
    public $prototype;

    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}

$p1 = new Prototype;
$p1->primitive = 'foo';
$p1->component = new StdClass;
$p1->circularReference = new ComponentWithBackReference($p1);
var_dump($p1);

$p2 = clone $p1;
var_dump($p2);
