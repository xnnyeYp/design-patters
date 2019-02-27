<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-27
 * Time: 下午5:28
 */

class ConcreteObserver implements IObserver
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function onSend(string $message): void
    {
        echo "'{$message}' send to ConcreteObserver-{$this->id}\n";
    }

    public function getId(): int
    {
        return $this->id;
    }
}
