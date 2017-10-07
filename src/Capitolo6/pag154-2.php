<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

/**
 * @Entity @Table(name="talks")
 */
class Talk
{
    // ...
    public function addSpeaker(Speaker $speaker)
    {
        if ($this->speakers->contains($speaker)) {
            return;
        }
        $this->speakers->add($speaker);
        $speaker->addTalk($this);
    }

    public function removeSpeaker(Speaker $speaker)
    {
        if (! $this->speakers->contains($speaker)) {
            return;
        }
        $this->speakers->removeElement($speaker);
        $speaker->removeTalk($this);
    }
    // ...
}
