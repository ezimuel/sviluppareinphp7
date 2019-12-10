<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$text = "Esempio di 'escape'";
echo filter_var($text, FILTER_SANITIZE_ADD_SLASHES);
// Esempio di \'escape\'
