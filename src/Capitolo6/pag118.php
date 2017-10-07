<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
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
