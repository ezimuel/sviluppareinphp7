<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
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
