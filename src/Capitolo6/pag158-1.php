<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$em = require_once "bootstrap.php";

$speaker = $em->getRepository("Speaker")->findOneBy(["name" => "Enrico Zimuel"]);
if (! $speaker) {
    printf("The Speaker specified doesn't exist!");
    exit(1);
}

$speaker->SetName("Alberto Zimuel");
$em->persist($speaker);
$em->flush();
printf("Updated Speaker with ID %d\n", $speaker->getId());
