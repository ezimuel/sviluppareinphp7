<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$y = 1;
$fn1 = function ($x) use ($y) {
    return $x + $y;
};
echo $fn1(3); // 4

$y = 1;
$fn2 = fn($x) => $x + $y;
echo $fn2(3);

$x = 1;
$fn = fn() => ++$x;
echo $fn(); // 2
var_dump($x); // int(1)
