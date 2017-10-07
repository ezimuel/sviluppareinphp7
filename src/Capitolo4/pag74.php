<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

error_reporting(E_NOTICE);
$a = 0;
echo 1/$a; // no warning reported
echo $b; // notice reported
$foo = new Foo(); // no fatal error reported
