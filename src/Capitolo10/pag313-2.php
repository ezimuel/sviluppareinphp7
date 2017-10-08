<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.html');
}

$token = $_GET['token'] ?? false;
if (false === $token || $_SESSION['token'] !== $token) {
    header($_SERVER["SERVER_PROTOCOL"] . ' 403 Forbidden');
    exit;
}

$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header($_SERVER["SERVER_PROTOCOL"] . ' 400 Bad Request');
    exit;
}

// store $emal as new email address for $_SESSION['user']
printf("The new email of the user is <b>%s</b>", $email);
$_SESSION['email'] = $email;
