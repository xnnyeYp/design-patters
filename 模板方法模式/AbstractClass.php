<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-22
 * Time: 下午5:23
 */

abstract class AbstractClass
{
    abstract public function primitiveOperation1();

    abstract public function primitiveOperation2();

    public function templateMethod()
    {
        $this->primitiveOperation1();
        $this->primitiveOperation2();
        echo "完成\n";
    }
}
