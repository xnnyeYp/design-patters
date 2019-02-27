<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-26
 * Time: 下午6:57
 */

class ConcreteObservable implements IObservable
{
    private $observers = [];

    public function attach(IObserver $observer): void
    {
        array_push($this->observers, $observer);
    }

    public function detach(IObserver $observer): void
    {
        foreach ($this->observers as $key => $item) {
            if ($item->getId() == $observer->getId()) {
                array_splice($this->observers, $key, 1);
                return ;
            }
        }
    }

    public function notify(string $message): void
    {
        foreach ($this->observers as $observer) {
            $observer->onSend($message);
        }
    }
}
