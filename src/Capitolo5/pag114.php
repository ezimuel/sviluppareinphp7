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
    protected $filter;

    public function setUp()
    {
        $this->filter = new Filter();
    }

    public function testValidEmail()
    {
        $this->assertTrue($this->filter->isEmail('foo@bar.com'));
    }

    public function testInvalidEmail()
    {
        $this->assertFalse($this->filter->isEmail('foo'));
    }
}
