<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$orari = [
    'Lunedì'    => '9:00-18:00',
    'Merdoledì' => '10:00-19:00',
    'Venerdì'   => '9:00-17:00'
];
printf("Primo : %s\n", array_key_first($orari));
printf("Ultimo: %s\n", array_key_last($orari));
// Primo : Lunedì
// Ultimo: Venerdì
