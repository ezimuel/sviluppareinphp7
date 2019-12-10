<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

 $users = ['admin' => '12345678', 'guest' => 'guest'];
 $username = $_SERVER['PHP_AUTH_USER'] ?? false;
 if (false === $username) {
     require_auth();
     exit;
 }

 // check if the username and password are valid
 if (!isset($users[$username]) || $users[$username] !== $_SERVER['PHP_AUTH_PW']) {
     require_auth();
     exit;
 }
 echo '<h1>User authenticated!</h1>';

 function require_auth(): void
 {
     header('WWW-Authenticate: Basic realm="My Realm"');
     header($_SERVER["SERVER_PROTOCOL"] . ' 401 Unauthorized');
     echo '<p>This page requires authentication!</p>';
 }
