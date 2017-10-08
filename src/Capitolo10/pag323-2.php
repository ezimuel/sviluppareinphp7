<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

use Zend\Permissions\Rbac\Rbac;
use Zend\Permissions\Rbac\Role;

$rbac = new Rbac();

$editor = new Role('editor');
$editor->addPermission('edit.article');
$rbac->addRole($editor);

$articleId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$user = $mySessionObject->getUser(); // get User object from session
$article = $articleModel->getArticle($articleId); // get Article from a model

$assertion = new AssertUserIdMatches($user->getId());
$assertion->setArticle($article);

if ($rbac->isGranted($user->getRole(), 'edit.article', $assertion)) {
    // edits his own article
}
