<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-25
 * Time: 下午3:48
 */
require_once "Facade.php";
require_once "SubSystemOne.php";
require_once "SubSystemTwo.php";

$facade = new Facade(new SubSystemOne(), new SubSystemTwo());
$facade->method();
