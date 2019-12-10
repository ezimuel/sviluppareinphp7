<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

call_user_func(function () {
    $container = require 'config/container.php';
    $app = $container->get(\Zend\Expressive\Application::class);

    require 'config/pipeline.php';
    require 'config/routes.php';

    $app->run();
});
