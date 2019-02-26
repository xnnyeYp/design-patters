<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-26
 * Time: 下午5:04
 */

abstract class Builder
{
    abstract public function builderPartA(): void;

    abstract public function builderPartB(): void;

    abstract public function getResult(): Product;
}
