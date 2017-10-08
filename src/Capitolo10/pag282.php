<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

$username = $_POST['email'];
$password = $_POST['password'];

$dbname = 'root';
$dbpass = 'password';

$pdo = new PDO("mysql:host=localhost;dbname=test", $dbname, $dbpass);
$result = $pdo->query(sprintf(
    "SELECT * FROM users WHERE username='%s'",
    $username
));

if (1 === $result->rowCount()) {
    // verify the user's password
}
