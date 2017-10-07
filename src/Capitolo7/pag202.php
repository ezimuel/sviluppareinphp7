<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
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
