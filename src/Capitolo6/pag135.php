<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
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
