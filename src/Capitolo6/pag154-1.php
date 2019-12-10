<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

 // boostrap.php
 use Doctrine\ORM\Tools\Setup;
 use Doctrine\ORM\EntityManager;

 require_once "vendor/autoload.php";

 $isDevMode = true;
 $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"),$isDevMode);
 $conn = array(
     'driver' => 'pdo_sqlite',
     'path'   => __DIR__ . '/db.sqlite',
 );
 return EntityManager::create($conn, $config);
