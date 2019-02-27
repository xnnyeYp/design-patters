<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-27
 * Time: 下午5:33
 */

require_once "IObservable.php";
require_once "IObserver.php";
require_once "ConcreteObservable.php";
require_once "ConcreteObserver.php";


$concreteObservable = new ConcreteObservable();
$observer1  = new ConcreteObserver(1);
$observer2  = new ConcreteObserver(2);
$concreteObservable->attach($observer1);
$concreteObservable->attach($observer2);
$concreteObservable->notify("hello");

$concreteObservable->detach($observer2);
$concreteObservable->notify("world");
