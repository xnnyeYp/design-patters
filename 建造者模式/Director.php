<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-26
 * Time: 下午5:16
 */

class Director
{
    public function __construct(Builder $builder)
    {
        $builder->builderPartA();
        $builder->builderPartB();
    }
}
