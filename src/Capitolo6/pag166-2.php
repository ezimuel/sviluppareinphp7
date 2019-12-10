<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

use MongoDB\Client;

$client = new Client("mongodb://localhost:27017");
$collection = $client->demo->speakers;
$updateResult = $collection->updateOne(
    [ 'name' => 'Enrico Zimuel'],
    [ '$set' => [ 'name' => 'Alberto Zimuel' ]]
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
