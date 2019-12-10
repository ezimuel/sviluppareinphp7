<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
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
