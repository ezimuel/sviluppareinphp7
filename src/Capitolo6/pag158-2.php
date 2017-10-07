<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$em = require_once "bootstrap.php";

$id = 1;
$speaker = $em->find("Speaker", $id);
if (! $speaker) {
    printf("No speaker found with ID %d\n", $id);
    exit(1);
}

$em->remove($speaker);
$em->flush();
printf("Removed Speaker with ID %d\n", $id);
