<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

 libxml_use_internal_errors(true);
 $xml = simplexml_load_string("<?xml version='1.0'><a><b></a>");
 if ($xml === false) {
     printf ("Failed loading XML:\n");
     foreach(libxml_get_errors() as $error) {
         printf("%s", $error->message);
     }
 }
