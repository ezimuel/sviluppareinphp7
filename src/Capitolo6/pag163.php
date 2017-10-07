<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

use MongoDB\Client;

$client = new Client("mongodb://localhost:27017");
$collection = $client->demo->speakers;
$result = $collection->deleteOne([ 'name' => 'Enrico Zimuel' ]);
printf("Deleted %d document(s)\n", $result->getDeletedCount());
