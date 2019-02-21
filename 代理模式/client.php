<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-21
 * Time: 上午11:12
 */
require_once "Subject.php";
require_once "RealSubject.php";
require_once "ProxySubject.php";

$proxySubject = new ProxySubject();
$proxySubject->action();
