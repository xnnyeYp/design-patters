<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/3
 * Time: 14:34
 * email:596169733@qq.com
 */
require "Memento.php";
require "Originator.php";
require "Caretaker.php";

$originator = new Originator("ON");
$originator->show();

$caretaker = new Caretaker();
$caretaker->setMemento($originator->createMemento());

$originator->setState("OFF");
$originator->show();

$originator->setMemento($caretaker->getMemento());
$originator->show();


