<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
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
