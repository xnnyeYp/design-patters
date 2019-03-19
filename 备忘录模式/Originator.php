<?php

/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/3
 * Time: 14:23
 * email:596169733@qq.com
 */
class Originator
{
    /**
     * @var string
     */
    private $state;

    /**
     * @var Memento
     */
    private $memento;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state = $state;
    }

    public function createMemento(): Memento
    {
        return new Memento($this->state);
    }

    /**
     * @param Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        $this->memento = $memento;
        $this->state = $memento->getState();
    }

    public function show()
    {
        echo "state:" . $this->state . "\n";
    }
}