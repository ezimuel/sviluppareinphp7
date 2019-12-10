<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
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
