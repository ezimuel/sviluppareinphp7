<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$x = ['c', 'd'];
$y = ['a', 'b', ...$x];
var_dump($y); // ['a', 'b', 'c', 'd']


$arr1 = [...new ArrayIterator(['a', 'b', 'c'])]; // ['a', 'b', 'c']
var_dump($arr1); // ['a', 'b', 'c']
$arr2 = new ArrayIterator(['a', 'b']);
$arr3 = new ArrayIterator(['c']);
$arr4 = [...$arr2, ...$arr3 ];
var_dump($arr4); // ['a', 'b', 'c']
