<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$filename = 'shared';
$handle = fopen($filename, "w+");
if (false === $handle) {
    throw new Exception(
        sprintf("Error opening file %s", $filename)
    );
}
if (flock($handle, LOCK_EX)) {
    $num = fwrite($handle, "Writing some stuff!");
    if (false === $num) {
        throw new Exception(
            sprintf("Error writing in %s", $filename)
        );
    }
    fflush($handle); // be sure to flush the file content
    flock($handle, LOCK_UN); // unlock
} else {
    printf ("Couldn't get the lock!\n");
}
fclose($handle);
