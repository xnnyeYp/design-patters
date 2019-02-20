<?php

/**
 * Created by PhpStorm.
 * User: yueping1302
 * Date: 19-2-20
 * Time: 下午3:58
 * email:yueping1302@emao.com
 */
class Person {
    private $name;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo "经过装扮的" . $this->name . "\n";
    }
}
