<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

abstract class User
{
    protected $name = '';

    final public function getName() : string {
        return $this->name;
    }

    final public function setName(string $name) {
        $this->name = $name;
    }

    abstract public function save();
}
