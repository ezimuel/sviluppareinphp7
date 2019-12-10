<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

interface Subject
{
    public function request(): void;
}

class RealSubject implements Subject
{
    public function request(): void
    {
        echo "RealSubject: Gestione della richiesta\n";
    }
}

class Proxy implements Subject
{
    private $realSubject;

    public function __construct(RealSubject $realSubject)
    {
        $this->realSubject = $realSubject;
    }

    public function request(): void
    {
        if ($this->checkAccess()) {
            $this->realSubject->request();
            $this->logAccess();
        }
    }

    private function checkAccess(): bool
    {
        echo "Proxy: Controllo accessi\n";
        return true;
    }

    private function logAccess(): void
    {
        echo "Proxy: Logging\n";
    }
}

echo "Eseguo RealSubject\n";
$client = new RealSubject();
$client->request();

echo "Eseguo Proxy di RealSubject\n";
$proxy = new Proxy($client);
$proxy->request();
