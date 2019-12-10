<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

interface OutputInterface
{
    public function load(array $data): string;
}

class SerializeOutput implements OutputInterface
{
    public function load(array $data): string
    {
        return serialize($data);
    }
}

class JsonOutput implements OutputInterface
{
    public function load(array $data): string
    {
        return json_encode($data);
    }
}

class Client {
    private $output;
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;
    }
    public function loadOutput()
    {
        return $this->output->load($this->data);
    }
}

$data = ['foo' => 'bar'];
$client = new Client($data);

$client->setOutput(new SerializeOutput);
var_dump($client->loadOutput()); // string(26) "a:1:{s:3:"foo";s:3:"bar";}"

$client->setOutput(new JsonOutput);
var_dump($client->loadOutput()); // string(13) "{"foo":"bar"}"
