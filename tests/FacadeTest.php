<?php

namespace AlexanderZabornyi\FacadeTest\Tests;

use AlexanderZabornyi\FacadeTest\ComputerFacade;
use AlexanderZabornyi\FacadeTest\Computer;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testFacade()
    {
        $computer = new ComputerFacade(new Computer());

        $this->assertEquals(
            'Beep beep! Loading.. Ready to be used!',
            $computer->turnOn()
        );
        $this->assertEquals(
            'Bup bup bup buzzz! Zzzzz',
            $computer->turnOff()
        );
    }
}