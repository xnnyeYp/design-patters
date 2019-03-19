<?php

/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/2
 * Time: 17:32
 * email:596169733@qq.com
 */
class Adapter extends Adaptee implements Target
{
    function method2()
    {
        echo "method2\n";
    }
}