<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-22
 * Time: 上午10:51
 */
require_once "Cache.php";
require_once "IFactory.php";
require_once "MemcacheCache.php";
require_once "RedisCache.php";
require_once "RedisIFactory.php";
require_once "MemcacheIFactory.php";

$redis = new RedisIFactory();
var_dump($redis);
$memcache = new MemcacheIFactory();
var_dump($memcache);

