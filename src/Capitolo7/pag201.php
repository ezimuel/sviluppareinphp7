<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', App\Home::class);
    $r->addRoute('GET', '/about', App\About::class);
    $r->addRoute('GET', '/blog[/{post-title}]', App\Blog::class);
    $r->addRoute('GET', '/contact', App\Contact::class);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri        = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        exit();
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        header($_SERVER["SERVER_PROTOCOL"] . ' 405 Method Not Allowed');
        header('Allow: ' . implode(",", $allowedMethods));
        exit();
    case FastRoute\Dispatcher::FOUND:
        $handler = new $routeInfo[1];
        $vars = $routeInfo[2];
        echo $handler($vars);
        break;
}
