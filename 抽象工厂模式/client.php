<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-3-1
 * Time: 下午1:10
 */
require_once "AbstractProductA.php";
require_once "AbstractProductB.php";
require_once "ProductA1.php";
require_once "ProductA2.php";
require_once "ProductB2.php";
require_once "ProductB1.php";
require_once "IFactory.php";
require_once "ConcreteFactory1.php";
require_once "ConcreteFactory2.php";

$factory1 = new ConcreteFactory1();
$productA1 = $factory1->createProductA();
$productB1 = $factory1->createProductB();

$factory2 = new ConcreteFactory2();
$productA2 = $factory2->createProductA();
$productB2 = $factory2->createProductB();

print_r($productA1);
print_r($productA2);
print_r($productB1);
print_r($productB2);
