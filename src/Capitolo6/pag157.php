<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

/**
 * @Entity @Table(name="speakers")
 */
class Speaker
{
    // ...
    public function __construct() {
        $this->talks = new \Doctrine\Common\Collections\ArrayCollection();
    }
    // ...
}

/**
 * @Entity @Table(name="talks")
 */
class Talk
{
    // ...
    public function __construct() {
        $this->speakers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    // ...
}
