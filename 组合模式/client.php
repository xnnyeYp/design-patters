<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/4
 * Time: 21:52
 * email:596169733@qq.com
 */

require "Component.php";
require "Composite.php";
require "Leaf.php";

$root = new Composite("root");
$leafA = new Leaf("leafA");
$root->add($leafA);

$compositeA = new Composite("compositeA");
$compositeA->add(new Leaf("leafB"));
$compositeB = new Composite("compositeB");

$root->add($compositeA);
$compositeA->add($compositeB);

$compositeC = new Composite("compositeC");
$root->add($compositeC);
$root->display(1);

$root->remove($compositeC);
$root->display(1);