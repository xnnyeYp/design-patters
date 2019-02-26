<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-26
 * Time: 下午5:06
 */

class ConcreteBuilder extends Builder
{
    /**
     * @var Product
     */
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function builderPartA(): void
    {
        $this->product->add("部件A");
    }

    public function builderPartB(): void
    {
        $this->product->add("部件B");
    }

    public function getResult(): Product
    {
        return $this->product;
    }
}
