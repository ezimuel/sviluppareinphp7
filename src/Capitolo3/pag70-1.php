<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class Foo {
    protected $msg = 'hello!';

    static function hi() {
        echo $this->msg;
    }
}

Foo::hi(); // PHP Fatal error: Using $this when not in object context
