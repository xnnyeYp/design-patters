<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-3-1
 * Time: 下午1:07
 */

class ConcreteFactory1 implements IFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ProductB1();
    }
}
