<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-21
 * Time: 上午11:09
 */

class ProxySubject extends Subject
{
    /**
     * @var RealSubject
     */
    private $realSubject;

    public function action()
    {
        $this->otherAction();
        if ($this->realSubject == null) {
            $this->realSubject = new RealSubject();
        }
        $this->realSubject->action();
    }

    private function otherAction()
    {
        echo "代理主题otherAction\n";
    }
}
