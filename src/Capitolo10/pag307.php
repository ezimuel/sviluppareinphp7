<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$password ='test';
$salt = random_bytes(32);
$hash = hash_pbkdf2('sha256', $password, $salt, 20000);

printf("Hash: %s\n", $hash);
