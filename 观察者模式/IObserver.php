<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-26
 * Time: 下午6:50
 */

interface IObserver
{
   function onSend(string $message): void ;

   function getId(): int ;
}
