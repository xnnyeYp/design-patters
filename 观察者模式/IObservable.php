<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-26
 * Time: 下午6:53
 */

interface IObservable
{
    function attach(IObserver $observer): void ;

    function detach(IObserver $observer): void ;

    function notify(string $message): void ;
}
