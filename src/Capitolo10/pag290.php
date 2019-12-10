<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

 $page = $_GET['page'];
 $filename = __DIR__ . "/pages/$page";

 if (file_exists($filename)) {
     echo file_get_contents($filename);
     exit;
 }
 header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
