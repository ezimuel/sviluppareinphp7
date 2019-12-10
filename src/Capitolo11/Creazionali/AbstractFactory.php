<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

interface CommonInterface
{
}

interface AbstractFactory
{
    public static function build($param): CommonInterface;
}

class ConcreteClass1 implements CommonInterface
{
}

class ConcreteClass2 implements CommonInterface
{
}

class ConcreteFactory implements AbstractFactory
{
    public static function build($param): CommonInterface
    {
        switch($param) {
            case 'class1':
                return new ConcreteClass1();
            case 'class2':
                return new ConcreteClass2();
        }
        throw new RuntimeException('The class specified does not exist');
    }
}

$class1 = ConcreteFactory::build('class1');
var_dump($class1);

$class2 = ConcreteFactory::build('class2');
var_dump($class2);
