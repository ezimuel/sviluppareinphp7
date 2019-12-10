<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

use Nocarrier\Hal;

$hal = new Hal('/speakers/ezimuel', [
    'id' => 'ezimuel',
    'name' => 'Enrico Zimuel'
]);
echo $hal->asJson(true);
