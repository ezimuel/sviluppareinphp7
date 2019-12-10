<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

Class A {
    public $i = 1;
}

$a = new A();
$b = $a;
$b->i++;
printf("a=%d, b=%d\n", $a->i, $b->i); // print a=2, b=2
