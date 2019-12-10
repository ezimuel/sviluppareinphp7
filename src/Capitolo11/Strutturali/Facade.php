<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

class CPU {
    public function freeze() {
        echo "CPU freeze\n";
    }
    public function jump($address) {
        echo "Salta all'indirizzo $address\n";
    }
    public function execute() {
        echo "Esegui\n";
    }
}
class Memory {
    public function load($address, $data) {
        echo "Carica indirizzo $address con dati: $data\n";
    }
}
class Disk {
    public function read($sector, $size) {
        return "Dati sul settore $sector ($size)";
    }
}

// Classe Facade
class Computer {
    const BOOT_ADDRESS = 0;
    const BOOT_SECTOR = 1;
    const SECTOR_SIZE = 16;
    protected $cpu;
    protected $mem;
    protected $hd;

    public function __construct(CPU $cpu, Memory $mem, Disk $hd) {
        $this->cpu = $cpu;
        $this->mem = $mem;
        $this->hd  = $hd;
    }

    public function startComputer() {
        $this->cpu->freeze();
        $this->mem->load(self::BOOT_ADDRESS,
                         $this->hd->read(self::BOOT_SECTOR, self::SECTOR_SIZE));
        $this->cpu->jump(self::BOOT_ADDRESS);
        $this->cpu->execute();
    }
}

// Usage example
$pc = new Computer(new CPU, new Memory, new Disk);
$pc->startComputer();
