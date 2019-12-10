<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

interface Component
{
    public function operation(): string;
}

class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return __CLASS__;
    }
}

class Decorator implements Component
{
    protected $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function operation(): string
    {
        return $this->component->operation();
    }
}

class ConcreteDecoratorA extends Decorator
{
    public function operation(): string
    {
        return sprintf("%s(%s)", __CLASS__, parent::operation());
    }
}

class ConcreteDecoratorB extends Decorator
{
    public function operation(): string
    {
        return sprintf("%s(%s)", __CLASS__, parent::operation());
    }
}

$simple = new ConcreteComponent;
echo $simple->operation() . "\n";
$decorator1 = new ConcreteDecoratorA($simple);
echo $decorator1->operation() . "\n";
$decorator2 = new ConcreteDecoratorB($decorator1);
echo $decorator2->operation() . "\n";
