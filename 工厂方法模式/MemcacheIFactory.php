<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-22
 * Time: 上午11:05
 */

class MemcacheIFactory implements IFactory
{
    public function createCache(): Cache
    {
        return new MemcacheCache();
    }
}
