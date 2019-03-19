<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-3-19
 * Time: 下午12:01
 */

class Singleton {
    private static $instance;

    private function __construct()
    {

    }

    /**
     * @return mixed
     */
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
