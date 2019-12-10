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

    public function me() {
        return 'A';
    }
}

trait B {
    public function me() {
		 return 'B';
     }
}

class C {
    use A, B {
        B::me insteadof A;
    }
}

$c = new C();
printf("%s %s!\n", $c->hello(), $c->me());
