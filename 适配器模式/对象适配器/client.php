<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/2
 * Time: 17:25
 * email:596169733@qq.com
 */
require "Target.php";
require "Adaptee.php";
require "Adapter.php";

$target = new Adapter();
$target->request();
