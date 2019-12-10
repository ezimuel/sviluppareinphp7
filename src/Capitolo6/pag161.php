<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$company = "Zend Technologies";
$speakers = $em->getRepository("Speaker")->findBy(["company" => $company]);
printf("Speakers working for %s:\n", $company);
foreach ($speakers as $speaker) {
    printf("%s with ID %d\n", $speaker->getName(), $speaker->getId());
}
