<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$em = require_once "bootstrap.php";

$speaker = $em->find("Speaker", 1);
printf("Speaker: %s\n", $speaker->getName());
