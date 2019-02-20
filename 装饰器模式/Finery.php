<?php

/**
 * Created by PhpStorm.
 * User: yueping1302
 * Date: 19-2-20
 * Time: 下午4:02
 * email:yueping1302@emao.com
 */
class Finery extends Person
{
    /**
     * @var Person
     */
    protected $component;

    public function decorate(Person $component)
    {
        $this->component = $component;
    }

    public function show() {
        if ($this->component != null) {
            $this->component->show();
        }
    }
}
