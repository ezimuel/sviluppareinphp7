<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

use SessionHandlerInterface;

class PDOSessionHandler implements SessionHandlerInterface
{
    private $pdo;
    private $sessionName;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function open($savePath, $sessionName)
    {
        $this->sessionName = $sessionName;
        return true;
    }

    public function close()
    {
        $this->pdo = null;
        return true;
    }

    public function read($id)
    {
        $sql = 'SELECT value FROM session WHERE name = :name AND id = :id';
        $sth = $this->pdo->prepare($sql);
        $sth->execute([':name' => $this->sessionName, ':id' => $id]);
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return (!isset($result['value'])) ? '' : $result['value'];
    }

    public function write($id, $data)
    {
        if (empty($this->read($id))) {
            $sql = 'INSERT INTO session (id, name, value, last_update) '.
                   'VALUES (:id, :name, :data, :last_update)';
        } else {
            $sql = 'UPDATE session SET value=:data, last_update=:last_update '.
                   'WHERE id=:id AND name=:name';
        }
        $sth = $this->pdo->prepare($sql);
        return $sth->execute([
            ':id' => $id,
            ':name' => $this->sessionName,
            ':data' => $data,
            ':last_update' => date('Y-m-d H:i:s', time())
        ]);
    }

    public function destroy($id)
    {
        $sql = 'DELETE FROM session WHERE name = :name AND id = :id';
        $sth = $this->pdo->prepare($sql);
        return $sth->execute([':name' => $this->sessionName, ':id' => $id]);
    }

    public function gc($maxlifetime)
    {
        $sql = 'DELETE FROM session WHERE last_update < :lifetime';
        $sth = $this->pdo->prepare($sql);
        return $sth->execute([':lifetime' => date('Y-m-d H:i:s', time() - $maxlifetime)]);
    }
}
