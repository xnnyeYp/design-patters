<?php

/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/3
 * Time: 14:33
 * email:596169733@qq.com
 */
class Caretaker
{
    /**
     * @var Memento
     */
    private $memento;

    /**
     * @param Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        $this->memento = $memento;
    }

    /**
     * @return Memento
     */
    public function getMemento(): Memento
    {
        return $this->memento;
    }
}