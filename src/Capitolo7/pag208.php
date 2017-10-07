<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

use Zend\Diactoros\Response;

require 'vendor/autoload.php';

$response = new Response\HtmlResponse('This is a test');
$emitter = new Response\SapiEmitter();
$emitter->emit($response);
