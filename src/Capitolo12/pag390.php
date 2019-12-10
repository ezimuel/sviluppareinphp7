<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$object = new stdClass;
$weakRef = WeakReference::create($object);
var_dump($weakRef->get()); // object(stdClass)
unset($object);
var_dump($weakRef->get()); // NULL
var_dump($weakRef); // object(WeakReference)
