<?php

namespace AlexanderZabornyi\FacadeTest;

class ComputerFacade
{
    private $computer;

    /**
     * ComputerFacade constructor.
     *
     * @param Computer $computer
     */
    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    /**
     * Включить компьютер
     *
     * @return string
     */
    public function turnOn(): string
    {
        return
            $this->computer->makeSound()
            . ' '
            . $this->computer->showLoadingScreen()
            . ' '
            . $this->computer->getReady();
    }

    /**
     * Выключить компьютер
     *
     * @return string
     */
    public function turnOff(): string
    {
        return
            $this->computer->closeEverything()
            . ' '
            . $this->computer->getSleep();
    }
}