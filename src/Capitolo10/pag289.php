<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$sql = 'SELECT * FROM users WHERE username=:username';
$result = $pdo->prepare($sql);

$data = [ ':username' => $username ];
if (! $result->execute($data)) {
    throw new Exception(sprintf(
        "Error PDO exec: %s", implode(',', $db->errorInfo())
    ));
}
