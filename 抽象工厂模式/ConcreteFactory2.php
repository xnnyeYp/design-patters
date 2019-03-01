<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-3-1
 * Time: 下午1:07
 */

class ConcreteFactory2 implements IFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ProductB2();
    }
}
