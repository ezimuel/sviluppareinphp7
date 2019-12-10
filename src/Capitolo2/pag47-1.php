<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$foo = function(array $options) use ($average){
    return $average($options);
};
echo $foo([ 1, 2, 3, 4, 5, 6]);