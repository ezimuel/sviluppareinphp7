<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$password ='test';
$salt = random_bytes(32);
$hash = hash_pbkdf2('sha256', $password, $salt, 20000);

printf("Hash: %s\n", $hash);
