<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$a = new stdClass();
$a->b = [];
for ($i = 0; $i < 100000; $i++) {
    $b = new stdClass();
    $b->a = $a;
    $a->b[] = $b;
}
unset($a);
unset($b);
gc_collect_cycles();

var_dump(gc_status());
