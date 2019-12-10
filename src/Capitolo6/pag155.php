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
    /**
     * @ManyToMany(targetEntity="Talk", inversedBy="speakers", cascade={"persist","remove"})
     * @JoinTable(name="speakers_talks")
     */
    private $talks;

    // ...
}

/**
 * @Entity @Table(name="talks")
 */
class Talk
{
    /**
     * @ManyToMany(targetEntity="Speaker", mappedBy="talks", cascade={"persist","remove"})
     */
    private $speakers;
    
    // ...
}
