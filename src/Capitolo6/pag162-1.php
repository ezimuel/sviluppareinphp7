<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
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
