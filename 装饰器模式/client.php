<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-20
 * Time: 下午4:18
 */
require_once "Person.php";
require_once "Finery.php";
require_once "Jeans.php";
require_once "Sneakers.php";
require_once "Sunglasses.php";
require_once "TShirt.php";


$person = new \Person();
$person->setName("atom");
echo "开始装扮----------\n";

$jeans = new Jeans();
$sneakers = new Sneakers();
$sunglasses = new Sunglasses();
$TShirt = new TShirt();

$jeans->decorate($person);
$sneakers->decorate($jeans);
$sunglasses->decorate($sneakers);
$TShirt->decorate($sunglasses);

$TShirt->show();
