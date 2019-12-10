<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

session_start();
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
if ('test' === $username && '12345678' === $password) {
    $_SESSION['user'] = 'test';
    $_SESSION['email'] = 'test@test.com';
    header('Location: dashboard.php');
    exit;
}
header('Location: login.html');
