<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 2019/3/1
 * Time: 21:48
 * email:596169733@qq.com
 */

interface IState {
    function handle(Context $context);
}
