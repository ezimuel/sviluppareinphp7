<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

 try {
     $db = new PDO('sqlite:db.sqlite');
 } catch (PDOException $e) {
     throw new Exception(sprintf(
         "PDO connection failed: %s\n", $e->getMessage()
     ));
 }
 var_dump($db);
