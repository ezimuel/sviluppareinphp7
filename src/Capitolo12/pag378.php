<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$test = [
    'foo',
    'bar',
    'baz',
];
var_dump($test);

unset ($test,);

function sum($a, $b = 0) {
    return $a + $b;
}
$x = sum(1,);
var_dump($x); // 1
$x = sum(1, 2);
var_dump($x); // 3
