<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

session_start();

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    header($_SERVER["SERVER_PROTOCOL"] . ' 422 Unprocessable Entity');
    echo json_encode(['error' => 'You need to send email and password']);
    exit();
}

$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header($_SERVER["SERVER_PROTOCOL"] . ' 422 Unprocessable Entity');
    echo json_encode(['error' => 'Email is not valid']);
    exit();
}

$password = $_POST["password"];
if (strlen($password) < 8) {
    header($_SERVER["SERVER_PROTOCOL"] . ' 422 Unprocessable Entity');
    echo json_encode(['error' => 'The password should be at least 8 characters']);
    exit();
}

$passFile = require __DIR__ . '/password.php';
if (!isset($passFile[$email]) || !password_verify($password, $passFile[$email]))
{
    header($_SERVER["SERVER_PROTOCOL"] . ' 401 Unauthorized');
    echo json_encode(['error' => 'User not authenticated']);
}

$_SESSION['user'] = $email;
header('Location: dashboard.php');
