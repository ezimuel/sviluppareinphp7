<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

 $page = $_GET['page'];
 $filename = __DIR__ . "/pages/$page";

 if (file_exists($filename)) {
     echo file_get_contents($filename);
     exit;
 }
 header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
