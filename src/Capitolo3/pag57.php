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
 $c = clone $a;
 $b->i++;
 
 var_dump($a);
 var_dump($b);
 var_dump($c);
