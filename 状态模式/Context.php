<?php

/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/1
 * Time: 21:53
 * email:596169733@qq.com
 */
class Context
{
    /**
     * @var IState
     */
    private $state;

    public function __construct(IState $state)
    {
        $this->state = $state;
    }

    /**
     * @param IState $state
     */
    public function setState($state)
    {
        $this->state = $state;
        $ref = new ReflectionClass($this->state);
        echo "当前状态：" . $ref->getName() . "\n";
    }

    /**
     * @return IState
     */
    public function getState()
    {
        return $this->state;
    }

    public function request()
    {
        $this->state->handle($this);
    }
}