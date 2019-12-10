<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */
declare(strict_types=1);

require "add.php";

var_dump(add(1, 2)); // int(3)
var_dump(add(1.5, 2.5)); // PHP Fatal error: Uncaught TypeError: Argument 1
// passed to add() must be of the type integer, float given
