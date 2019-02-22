<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-22
 * Time: 上午10:45
 */

interface IFactory
{
    public function createCache(): Cache;
}
