<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$json = '{ foo : bar ]}';

try {
    $result = json_decode($json, $assoc = true, $depth = 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
    printf("Errore (%d): %s\n", $e->getCode(), $e->getMessage());
    exit(1);
}

$result = json_decode($json, $assoc = true, $depth = 512);
if (json_last_error() !== JSON_ERROR_NONE) {
    printf("Errore (%d): %s\n", json_last_error(), json_last_error_msg());
    exit(1);
}
