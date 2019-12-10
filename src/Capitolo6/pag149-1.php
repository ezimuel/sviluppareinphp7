<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
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
while ($row = $sth->fetch(PDO::FETCH_OBJ)) {
    var_dump($row);
}
