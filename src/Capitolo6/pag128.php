<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$filename = 'shared';
$handle = fopen($filename, "r");
if (false === $handle) {
    throw new Exception(
        sprintf("Error opening file %s", $filename)
    );
}
if (flock($handle, LOCK_SH)) {
    $size = 1024; // 1024 bytes, 1 Kb
    while (!feof($handle)) {
        $buffer = fread($handle, $size);
        printf("%s", $buffer);
    }
    flock($handle, LOCK_UN);
}
fclose($handle);
