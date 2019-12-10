<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

error_reporting(E_NOTICE);
$a = 0;
echo 1/$a; // no warning reported
echo $b; // notice reported
$foo = new Foo(); // no fatal error reported
