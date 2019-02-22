<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-22
 * Time: 上午10:53
 */

class RedisIFactory implements IFactory
{
    public function createCache(): Cache
    {
        return new RedisCache();
    }
}
