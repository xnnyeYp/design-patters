<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/2
 * Time: 16:05
 * email:596169733@qq.com
 */
require "IState.php";
require "Context.php";
require "ConcreteStateA.php";
require "ConcreteStateB.php";

$context = new Context(new ConcreteStateA());

$context->request();
$context->request();
$context->request();
$context->request();