<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

class User implements JsonSerializable
{
    protected $firstName;
    protected $lastName;
    protected $email;

    public function __construct(string $firstName, string $lastName, string $email = '')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function jsonSerialize()
    {
        return [
            'user' => sprintf("%s %s", $this->firstName, $this->lastName),
            'email' => $this->email
        ];
    }
}

$zimuel = new User('Enrico', 'Zimuel', 'enrico@zimuel.it');
echo json_encode($zimuel, JSON_PRETTY_PRINT);
