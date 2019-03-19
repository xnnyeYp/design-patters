<?php

/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/4
 * Time: 21:30
 * email:596169733@qq.com
 */
abstract class Component
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function add(Component $component);

    abstract public function remove(Component $component);

    abstract public function display(int $depth);

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}