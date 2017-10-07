<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

 class User {}

 function dumpUsers(User ...$users)
 {
     foreach ($users as $user) {
         var_dump($user);
     }
 }

 $users = [new User(), new User(), new User()];
 dumpUsers(...$users);
