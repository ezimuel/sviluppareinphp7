<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$html = <<<EOT
<html>
    <head>
        <title>Test</title>
    </head>
<body>
    <h1>Test page on date %s</h1>
</body>
</html>
EOT;

printf($html, date("Y-m-d"));
