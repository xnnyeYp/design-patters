<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-25
 * Time: 下午2:48
 */

class Facade
{
    private $subSystemOne;

    private $subSystemTwo;

    public function __construct(SubSystemOne $subSystemOne, SubSystemTwo $subSystemTwo)
    {
        $this->subSystemOne = $subSystemOne;
        $this->subSystemTwo = $subSystemTwo;
    }

    public function method()
    {
        $this->subSystemTwo->methodOne();
        $this->subSystemOne->methodOne();
    }
}
