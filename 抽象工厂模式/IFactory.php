<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-3-1
 * Time: 下午1:03
 */

interface IFactory
{
    function createProductA(): AbstractProductA;

    function createProductB(): AbstractProductB;
}
