<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

declare(strict_types=0);
class Test {
    public int $val;
}
$test = new Test;
$test->val = "42";
var_dump($test->val); // int(42)
$test->val = "42.7";
var_dump($test->val); // int(42)
$test->val = "test";
// Fatal error: Uncaught TypeError: Typed property Test::$val must be int
