<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

use Zend\Permissions\Rbac\Rbac;
use Zend\Permissions\Rbac\Role;

$rbac = new Rbac();
$staff = new Role('staff');
$staff->addPermission('dashboard');
var_dump($staff->hasPermission('dashboard')); // true

$rbac->addRole($staff);
$rbac->isGranted('staff', 'dashboard'); // true
$rbac->isGranted('staff', 'config'); // false
$rbac->getRole('staff')->addPermission('config');
$rbac->isGranted('staff', 'config'); // true
