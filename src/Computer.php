<?php

namespace AlexanderZabornyi\FacadeTest;

class Computer
{
    /**
     * Произвести звук
     *
     * @return string
     */
    public function makeSound(): string
    {
        return 'Beep beep!';
    }

    /**
     * Показать загрузочный экран
     *
     * @return string
     */
    public function showLoadingScreen(): string
    {
        return 'Loading..';
    }

    /**
     * Компьютер готов к использованию
     *
     * @return string
     */
    public function getReady(): string
    {
        return 'Ready to be used!';
    }

    /**
     * Закрыть все программы
     *
     * @return string
     */
    public function closeEverything(): string
    {
        return 'Bup bup bup buzzz!';
    }

    /**
     * Остановить работу компьютера
     *
     * @return string
     */
    public function getSleep(): string
    {
        return 'Zzzzz';
    }
}