<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$salt = random_bytes(32);
$password = 'secret';
$hash = scrypt($password, $salt, 2048, 2, 1, 32);

printf("Hash of \"%s\" is:\n%s\n", $password, $hash);
