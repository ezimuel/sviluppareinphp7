<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$company = "Zend Technologies";
$speakers = $em->getRepository("Speaker")->findBy(["company" => $company]);
printf("Speakers working for %s:\n", $company);
foreach ($speakers as $speaker) {
    printf("%s with ID %d\n", $speaker->getName(), $speaker->getId());
}
