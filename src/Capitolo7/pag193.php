<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

 $uploadsDir = __DIR__ . '/uploads';

 foreach ($_FILES as $name => $file) {
     if (UPLOAD_ERR_OK === $file['error']) {
         $fileName = basename($file["name"]);
         move_uploaded_file($file["tmp_name"], "$uploadsDir/$fileName");
     }
 }
