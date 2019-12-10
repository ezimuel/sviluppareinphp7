<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

if (php_sapi_name() === 'cli-server' &&
    preg_match('/\.(?:html|js|css|png|jpg|gif)$/', $_SERVER["REQUEST_URI"] )) {
        return false;
}

$file = substr($_SERVER["REQUEST_URI"], 1);
if (substr($file, -4) !== '.php' || !file_exists($file)) {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    exit();
}

require $file;
