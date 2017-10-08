<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

use Nocarrier\Hal;

$hal = new Hal('/speakers?page=3', ['count' => 3, 'total' => 29]);

$hal->addLink('first', '/speakers');
$hal->addLink('last', '/speakers?page=10');
$hal->addLink('next', '/speakers?page=4');
$hal->addLink('prev', '/speakers?page=2');

$hal->addResource('speakers', new Hal('/speakers/ezimuel', [
    'id' => 'ezimuel',
    'name' => 'Enrico Zimuel'
]));

$hal->addResource('speakers', new Hal('/speakers/azimuel', [
    'id' => 'azimuel',
    'name' => 'Alberto Zimuel'
]));

$hal->addResource('speakers', new Hal('/speakers/vpeter', [
    'id' => 'vpeter',
    'name' => 'Valentina Peter'
]));

echo $hal->asJson(true);
