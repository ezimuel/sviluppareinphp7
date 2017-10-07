<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$average = function (array $values) {
    return array_sum($values) / count($values);
};
echo $average([ 1, 2, 3, 4, 5, 6]);

$foo = function(array $options) use ($average){
    return $average($options);
};
echo $foo([ 1, 2, 3, 4, 5, 6]);
