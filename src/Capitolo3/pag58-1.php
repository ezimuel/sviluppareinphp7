<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */
require_once 'User.php';

class Developer extends User
{
    protected $github = '';

    public function setGithub(string $github) {
        $this->github = $github;
    }

    public function getGithub() : string {
        return $this->github;
    }
}
