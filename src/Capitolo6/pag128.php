<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$rossi = [
    "firstName" => "Mario",
    "lastName" => "Rossi",
    "email" => "",
];

$zimuel = [
    "firstName" => "Enrico",
    "lastName" => "Zimuel",
    "email" => "enrico@zimuel.it",
    "contacts" => [ $rossi ]
];

$json = json_encode($zimuel);
if (false === $json) {
    throw new Exception(sprintf(
        "Error (%d): %s", json_last_error(), json_last_error_msg()
    ));
}
var_dump($json);

file_put_contents("user.json", $json);
$obj = json_decode($json);
var_dump($obj);

$array = json_decode($json, true);
var_dump($array);
