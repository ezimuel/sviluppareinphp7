<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$array = [1, 2];
[$a, &$b] = $array; // equivalente a list($a, &$b) = $array
$b++;
var_dump($array);

$array = [1,2];
$a = $array[0];
$b = &$array[1];
var_dump($b);

$config = [
    'path' => 'insert/path/here',
    'domain' => 'test.com'
];
[ 'path' => &$dir, 'domain' => $host] = $config;
$dir = '/tmp';
var_dump($config);
/*
array(2) {
  ["path"]=>
  &string(4) "/tmp"
  ["domain"]=>
  string(8) "test.com"
}
*/
