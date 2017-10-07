<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

/** @Entity @Table(name="speakers") */
class Speaker
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string") */
    protected $name;
    /** @Column(type="string", nullable=true) */
    protected $title;
    /** @Column(type="string", nullable=true) */
    protected $company;
    /** @Column(type="string", nullable=true) */
    protected $url;
    /** @Column(type="string", nullable=true) */
    protected $twitter;
    //...
}

/** @Entity @Table(name="talks") */
class Talk
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string") */
    protected $title;
    /** @Column(type="string", nullable=true) */
    protected $abstract;
    /** @Column(type="date", nullable=true) */
    protected $day;
    /** @Column(type="time", nullable=true) */
    protected $start;
    /** @Column(type="time", nullable=true) */
    protected $end;
    //...
}
