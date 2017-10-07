<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

 $uploadsDir = __DIR__ . '/uploads';

 foreach ($_FILES as $name => $file) {
     if (UPLOAD_ERR_OK === $file['error']) {
         $fileName = basename($file["name"]);
         move_uploaded_file($file["tmp_name"], "$uploadsDir/$fileName");
     }
 }
