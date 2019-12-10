<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$em = require_once "bootstrap.php";

$speaker = new Speaker();
$speaker->setName("Enrico Zimuel");
$speaker->setTitle("Senior Software Engineer");
$speaker->setCompany("Zend Technologies");
$speaker->setUrl("http://www.zimuel.it");
$speaker->setTwitter("@ezimuel");

$talk = new Talk();
$talk->setTitle("Introduction to Zend Framework 3");
$speaker->addTalk($talk);

$em->persist($speaker);
$em->flush();
printf("Added Speaker with ID %d\n", $speaker->getId());
printf("Added the Talk with ID %d to the speaker\n", $talk->getId());
