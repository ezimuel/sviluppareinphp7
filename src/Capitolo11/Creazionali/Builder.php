<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

interface Builder
{
    public function producePartA(): void;
    public function producePartB(): void;
    public function producePartC(): void;
}

class Product
{
    protected $parts = [];

    public function addPart(string $part): void
    {
        $this->parts[] = $part;
    }
    public function getListParts(): array
    {
        return $this->parts;
    }
}

class ConcreteBuilder implements Builder
{
    private $product;

    public function __construct()
    {
        $this->init();
    }
    public function init(): void
    {
        $this->product = new Product;
    }
    public function producePartA(): void
    {
        $this->product->addPart("Fondamenta");
    }
    public function producePartB(): void
    {
        $this->product->addPart("Pavimenti");
    }
    public function producePartC(): void
    {
        $this->product->addPart("Muri");
    }
    public function getProduct(): Product
    {
        $result = $this->product;
        // L'inizializzazione può essere omessa
        $this->init();

        return $result;
    }
}

class Director
{
    private $builder;

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildHouse(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }
}

// Costruzione tramite direttore
$builder = new ConcreteBuilder();
$director = new Director();
$director->setBuilder($builder);
$director->buildHouse();

var_dump($builder->getProduct()->getListParts());
/*
array(3) {
  [0]=>
  string(10) "Fondamenta"
  [1]=>
  string(9) "Pavimenti"
  [2]=>
  string(4) "Muri"
}
*/

// Costruzione personalizzata della casa (corretta)
$builder = new ConcreteBuilder;
$builder->producePartA();
$builder->producePartB();
$builder->producePartC();

var_dump($builder->getProduct()->getListParts());

// Costruzione personalizzata della casa (non corretta)
$builder = new ConcreteBuilder;
$builder->producePartB();
$builder->producePartA();
$builder->producePartC();

var_dump($builder->getProduct()->getListParts());
