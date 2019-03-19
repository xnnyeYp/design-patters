<?php

/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/1
 * Time: 21:49
 * email:596169733@qq.com
 */
class ConcreteStateB implements IState
{
    public function handle(Context $context)
    {
        $context->setState(new ConcreteStateA());
    }
}