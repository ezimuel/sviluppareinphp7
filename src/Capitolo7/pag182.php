<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

 if ($_SERVER["REQUEST_METHOD"] !== 'PUT') {
     header($_SERVER["SERVER_PROTOCOL"] . ' 405 Method Not Allowed');
     exit();
 }
 $body = json_decode(file_get_contents("php://input"));
 var_dump($body);
