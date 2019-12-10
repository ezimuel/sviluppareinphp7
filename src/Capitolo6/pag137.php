<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$document = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<users>
    <user>
        <firstName>Enrico</firstName>
        <lastName>Zimuel</lastName>
        <email>enrico@zimuel.it</email>
        <age unit="years">42</age>
    </user>
</users>
XML;

$users = simplexml_load_string($document);
var_dump($users);
