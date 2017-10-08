<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

use Zend\Permissions\Rbac\AssertionInterface;
use Zend\Permissions\Rbac\Rbac;

class AssertUserIdMatches implements AssertionInterface
{
    protected $userId;
    protected $article;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function setArticle($article)
    {
        $this->article = $article;
    }

    public function assert(Rbac $rbac)
    {
        if (! $this->article) {
            return false;
        }
        return ($this->userId === $this->article->getUserId());
    }
}
