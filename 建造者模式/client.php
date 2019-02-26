<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-26
 * Time: 下午5:16
 */
require_once "Builder.php";
require_once "ConcreteBuilder.php";
require_once "Product.php";
require_once "Director.php";

$builder = new ConcreteBuilder();
$director = new Director($builder);
$product = $builder->getResult();
$product->show();
