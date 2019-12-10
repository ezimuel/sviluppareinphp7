<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

$acl = new Acl();
$acl->addRole(new Role('guest'))
    ->addRole(new Role('member'), ['guest'])
    ->addRole(new Role('admin'), ['member']);

$acl->addResource(new Resource('foo'));
$acl->addResource(new Resource('bar'));

$acl->deny('guest', 'foo');
$acl->allow('member', 'foo');
$acl->allow('admin', 'bar');

var_dump($acl->isAllowed('guest', 'foo')); // false
var_dump($acl->isAllowed('member', 'foo')); // true
var_dump($acl->isAllowed('admin', 'foo')); // true
var_dump($acl->isAllowed('guest', 'bar')); // false
var_dump($acl->isAllowed('member', 'bar')); // false
var_dump($acl->isAllowed('admin', 'bar')); // true
