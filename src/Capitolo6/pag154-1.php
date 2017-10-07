<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

 /**
  * @Entity @Table(name="speakers")
  */
 class Speaker
 {
     // ...
     public function addTalk(Talk $talk)
     {
         if ($this->talks->contains($talk)) {
             return;
         }
         $this->talks->add($talk);
         $talk->addSpeaker($this);
     }

     public function removeTalk(Talk $talk)
     {
         if (! $this->talks->contains($talk)) {
             return;
         }
         $this->talks->removeElement($talk);
         $talk->removeSpeaker($this);
     }
     // ...
 }
