<?php

/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/3
 * Time: 14:24
 * email:596169733@qq.com
 */
class Memento
{
    /**
     * @var string
     */
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}