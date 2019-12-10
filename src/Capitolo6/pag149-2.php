<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$sql = 'UPDATE speakers SET name=:name WHERE id=:id';
$sth = $db->prepare($sql);
$data = [
    ':name' => 'Alberto Zimuel',
    ':id'   => 1
];
if (! $sth->execute($data)) {
    throw new Exception(sprintf(
        "Error PDO exec: %s", implode(',', $db->errorInfo())
    ));
}
printf("Speaker updated successfully!\n");
