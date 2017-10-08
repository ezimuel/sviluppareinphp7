<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.html');
    exit;
}
printf("<h1>Welcome %s</h1>", $_SESSION['user']);
printf("Email: <b>%s</b>", $_SESSION['email']);
