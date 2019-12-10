<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$filename = 'list';
$handle = fopen($filename, 'r+');
if (false === $handle) {
    throw new Exception(
        sprintf("Error opening file %s", $filename)
    );
}

$i = 0;
$size = 1024; // 1024 bytes, 1 Kb
while (!feof($handle)) {
    $buffer = fread($handle, $size);
    printf("%s", $buffer);
    $i++;
}
printf("Read %d bytes in %d cycles", $size * $i, $i);
fclose($handle);
