<?php

/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/2
 * Time: 17:23
 * email:596169733@qq.com
 */
class Adapter extends Target
{
    /**
     * @var Adaptee
     */
    private $adaptee;

    public function __construct()
    {
        $this->adaptee = new Adaptee();
    }

    public function request()
    {
        parent::request(); // TODO: Change the autogenerated stub
        $this->adaptee->specialRequest();
    }
}