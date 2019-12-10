<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class Foo {
    static $msg = 'hello!';

    public function hi() {
        echo self::$msg;
    }
}

$foo = new Foo();
$foo->hi(); // print hello!
