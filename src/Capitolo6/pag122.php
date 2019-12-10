<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$filename = 'foo';
$text = 'This is a test!';
$bytes = file_put_contents($filename, $text);

if (false === $bytes) {
    throw new Exception(
        sprintf("Error writing to %s", $filename)
    );
}
printf("%d bytes written in %s\n", $bytes, $filename);

$content = file_get_contents($filename);
if (false === $content) {
    throw new Exception(
        sprintf("Error reading from %s", $filename)
    );
}
var_dump($content);
