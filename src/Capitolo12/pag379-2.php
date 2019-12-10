<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class User {
    public int $id;
    public string $name;
}

$user = new User();
$user->id = 'test';
// Fatal error: Uncaught TypeError: Typed property User::$id must be int
