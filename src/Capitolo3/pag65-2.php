<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
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
