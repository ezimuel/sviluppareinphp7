<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

trait A {
    public function hello() {
        return 'Hello';
    }
}

class B {
    use A { hello as protected; }
}

class C {
    use A { hello as private myPrivateHello; }
}
