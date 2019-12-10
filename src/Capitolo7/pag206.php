<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

namespace App;

class Blog
{
    public function __invoke($params)
    {
        if (empty($params)) {
            return $this->getAllPost();
        }
        return 'Post title: ' . $params['post-title'];
    }

    public function getAllPost()
    {
        return 'List of blog post';
    }
}
