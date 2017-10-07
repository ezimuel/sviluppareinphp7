<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

use MongoDB\Client;

$client = new Client("mongodb://localhost:27017");
$collection = $client->demo->speakers;
$result = $collection->insertOne([
    'name'    => 'Enrico Zimuel',
    'title'   => 'Senior Software Engineer',
    'company' => 'Zend Technologies',
    'url'     => 'http://www.zimuel.it',
    'twitter' => '@ezimuel',
    'talks'   => [
        [
            'title'      => 'Intro to ZF3',
            'abstract'   => 'Introduction to Zend Framework 3',
            'day'        => '2016-05-05',
            'start_time' => '10:30',
            'end_time'   => '11:30'
        ]
    ]
]);
printf("Inserted document with ID %s\n", $result->getInsertedId());
