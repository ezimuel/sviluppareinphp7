<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

namespace Conference\V1\Rest\Speaker;

class SpeakerEntity
{
    public $id;
    public $name;

    public function getArrayCopy()
    {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }

    public function exchangeArray(array $array)
    {
        $this->id = $array['id'];
        $this->name = $array['name'];
    }
}
