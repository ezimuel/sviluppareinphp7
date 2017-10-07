<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

class Foo {
    protected $msg = 'hello!';

    static function hi() {
        echo $this->msg;
    }
}

Foo::hi(); // PHP Fatal error: Using $this when not in object context
