<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$string = <<<EOL
<?xml version='1.0'?>
<document>
    <value>4.2</value>
</document>
EOL;

$xml = new SimpleXMLElement($string);
var_dump($xml->value * 2);
// int(8) if PHP < 7.3
// float(8.4) if PHP >= 7.3
