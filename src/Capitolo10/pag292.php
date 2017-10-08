<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$password = 'secret';
$hash = password_hash($password, PASSWORD_DEFAULT);
printf("Hash of \"%s\" is:\n%s\n", $password, $hash);

if (password_verify($password, $hash)) {
    echo "User's password is correct.\n";
} else {
    echo "The user's password is not valid.\n";
}
