<?php

/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/4
 * Time: 21:40
 * email:596169733@qq.com
 */
class Leaf extends Component
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function add(Component $component)
    {
        echo "Leaf can not add component\n";
    }

    public function remove(Component $component)
    {
        echo "Leaf can not remove component\n";
    }

    public function display(int $depth)
    {
        echo str_pad($this->name, strlen($this->name) + $depth, "-", STR_PAD_LEFT) . "\n";
    }
}