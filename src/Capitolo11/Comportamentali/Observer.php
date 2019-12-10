<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class Subject implements SplSubject
{
    public $state;
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage;
    }
    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
        printf("Subject: Aggiunto osservatore %s\n", get_class($observer));
    }
    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        printf("Subject: Rimosso osservatore %s\n", get_class($observer));
    }
    public function notify(): void
    {
        echo "Subject: notifico a tutti gli osservatori...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
    public function someBusinessLogic(): void
    {
        // Cambio lo stato dell'oggetto generando un numero pseudo-casuale
        $this->state = rand(0, 10);
        printf("Subject: Stato cambiato in %d\n", $this->state);
        $this->notify();
    }
}

class ConcreteObserverA implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        if ($subject->state < 5) {
            echo "ConcreteObserverA: Evento intercettato\n";
        }
    }
}
class ConcreteObserverB implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        if ($subject->state > 5) {
            echo "ConcreteObserverB: Evento intercettato\n";
        }
    }
}

$subject = new Subject();
$oa = new ConcreteObserverA();
$ob = new ConcreteObserverB();

$subject->attach($oa);
$subject->attach($ob);
$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($oa);
$subject->someBusinessLogic();
$subject->someBusinessLogic();
