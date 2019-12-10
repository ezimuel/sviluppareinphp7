<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

 $user1 = new User();
 $user1->setName('Enrico');
 printf("Hello %s!\n", $user1->getName());

 $user2 = new User();
 $user2->setName('Enrico');
 printf("Hello %s!\n", $user2->getName());
