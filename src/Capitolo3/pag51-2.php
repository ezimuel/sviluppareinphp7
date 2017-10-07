<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

 $user1 = new User();
 $user1->setName('Enrico');
 printf("Hello %s!\n", $user1->getName());

 $user2 = new User();
 $user2->setName('Enrico');
 printf("Hello %s!\n", $user2->getName());
