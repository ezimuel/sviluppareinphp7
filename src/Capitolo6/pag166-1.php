<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

use MongoDB\Client;

$client = new Client("mongodb://localhost:27017");
$collection = $client->demo->speakers;

// find speakers working for Zend Technologies
$cursor = $collection->find([ 'company' => 'Zend Technologies' ]);
foreach ($cursor as $document) {
    printf("Speaker: %s (_id %s)\n", $document->name, $document->_id);
    foreach ($document->talks as $talk) {
        printf("\tTalk title: %s\n", $talk->title);
    }
}
