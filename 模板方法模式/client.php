<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-22
 * Time: 下午5:27
 */
require_once "AbstractClass.php";
require_once "ConcreteClass1.php";
require_once "ConcreteClass2.php";

$concreteClass1 = new ConcreteClass1();
$concreteClass1->templateMethod();

$concreteClass2 = new ConcreteClass2();
$concreteClass2->templateMethod();
