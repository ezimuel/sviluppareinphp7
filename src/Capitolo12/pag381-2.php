<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class A {
    private bool $a;
    protected string $b;
    protected int $c;
    public ?int $d;
}

class B extends A {
    public string $a;  // lecito, dal momento che A::$a è privata
    private bool $b;   // lecito, dal momento che A::$b è privata
    protected ?int $c; // errore, non è possibile aggiungere nullable
    public int $c;     // errore, non è possibbile rimuovere nullable   
}
