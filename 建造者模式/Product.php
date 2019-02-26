<?php
/**
 * Created by PhpStorm.
 * User: yueping
 * Date: 19-2-26
 * Time: 下午4:55
 */

class Product
{
    /**
     * @var array
     */
    private $parts = [];

    public function add(string $part): void
    {
        array_push($this->parts, $part);
    }

    public function show(): void
    {
        echo "产品创建\n";
        foreach ($this->parts as $part) {
            echo $part . "\n";
        }
    }
}
