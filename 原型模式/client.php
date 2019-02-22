<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-22
 * Time: 下午2:27
 */
require_once "Resume.php";
require_once "WorkExperience.php";

$resume = new Resume("atom", 25, '男');
$resume->setWorkExperience("2018-2019", "a公司");

$resume1 = clone $resume;
$resume1->setName('atom1');
$resume1->setWorkExperience("2017-2019", "b公司");
$resume->display();
$resume1->display();


