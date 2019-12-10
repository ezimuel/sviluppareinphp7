<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

namespace AppTest;

use PHPUnit\Framework\TestCase;
use App\Filter;

class FilterTest extends TestCase
{
    public function testValidEmail()
    {
        $filter = new Filter();
        $this->assertTrue($filter->isEmail('foo@bar.com'));
    }

    public function testInvalidEmail()
    {
        $filter = new Filter();
        $this->assertFalse($filter->isEmail('foo'));
    }
}
