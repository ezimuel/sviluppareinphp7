<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
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
