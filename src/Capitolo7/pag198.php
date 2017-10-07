<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

require 'PDOSessionHandler.php';

$username = 'insert db user here';
$password = 'insert password here';
$pdo = new PDO('mysql:dbname=phpsession;host=localhost', $username, $password);
session_set_save_handler(new PDOSessionHandler($pdo));
