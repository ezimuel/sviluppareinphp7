<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
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
