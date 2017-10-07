<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

 $filename = 'list';
 $handle = fopen($filename, 'w+');
 if (false === $handle) {
     throw new Exception(
         sprintf("Error opening file %s", $filename)
     );
 }

 for($i = 1; $i <= 10000; $i++) {
     $num = fwrite($handle, sprintf("Line %d\n", $i));
     if (false === $num) {
         throw new Exception(
             sprintf("Error writing line %d in %s", $i, $filename)
         );
     }
}
fclose($handle);
