<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
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
