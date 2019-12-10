<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

function getHttpRequestAsString(array $server): string
{
    $request = sprintf(
        "%s %s %s\n",
        $server["REQUEST_METHOD"],
        $server["REQUEST_URI"],
        $server["SERVER_PROTOCOL"]
    );
    $headers = [];
    foreach ($server as $key => $value) {
        if (substr($key, 0, 5) === 'HTTP_') {
            $name = str_replace('_', '-', substr($key, 5));
            $name = ucwords(strtolower($name), '-');
            $headers[$name] = $value;
        }
    }
    ksort($headers);
    foreach ($headers as $name => $value) {
        $request .= sprintf("%s: %s\n", $name, $value);
    }
    $request .= "\n" . file_get_contents("php://input");
    return $request;
}

printf("<pre>%s</pre>", getHttpRequestAsString($_SERVER));
