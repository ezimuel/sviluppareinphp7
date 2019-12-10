<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
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
