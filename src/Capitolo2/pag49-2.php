<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

require "add.php";

var_dump(add(1, 2)); // int(3)
// conversione automatica da float a intero (troncamento)
var_dump(add(1.5, 2.5)); // int(3)
// conversione automatica da stringa a numero
var_dump(add("1", "2")); // int(3)
