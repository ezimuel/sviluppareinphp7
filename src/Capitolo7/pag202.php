<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

require 'PDOSessionHandler.php';

$username = 'insert db user here';
$password = 'insert password here';
$pdo = new PDO('mysql:dbname=phpsession;host=localhost', $username, $password);
session_set_save_handler(new PDOSessionHandler($pdo));
