<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
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
