<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
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
