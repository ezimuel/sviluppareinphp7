<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
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
