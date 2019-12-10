<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$composer = require '/path/to/vendor/composer/autoload_classmap.php';
$preload  = '/tmp/preload.php';

$content = "<?php\n";
foreach (array_unique($composer) as $class => $file) {
    $content .= sprintf("opcache_compile_file('%s');\n", $file);
}
file_put_contents($preload, $content);
