<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

 $sql = 'SELECT * FROM speakers WHERE company=:company';
 $sth = $db->prepare($sql);
 $data = [ ':company' => 'Zend Technologies' ];
 if (! $sth->execute($data)) {
     throw new Exception(sprintf(
         "Error PDO exec: %s", implode(',', $db->errorInfo())
     ));
 }
 $result = $sth->fetchAll(PDO::FETCH_OBJ);
 var_dump($result);
