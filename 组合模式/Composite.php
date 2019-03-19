<?php

/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/4
 * Time: 21:45
 * email:596169733@qq.com
 */
class Composite extends Component
{
    private $children = [];

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function add(Component $component)
    {
        $this->children[] = $component;
    }

    public function remove(Component $component)
    {
        foreach ($this->children as $index => $c) {
            if ($c->getName() == $component->getName()) {
                array_splice($this->children, $index, 1);
            }
        }
    }

    public function display(int $depth)
    {
        echo str_pad($this->name, strlen($this->name) + $depth, "-", STR_PAD_LEFT) . "\n";
        foreach ($this->children as $index => $c) {
            $c->display($depth + 2);
        }
    }
}