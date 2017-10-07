<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

try {
    non_exist_function();
} catch (\Error $e) {
    printf("Error: %s\n", $e->getMessage());
}
