<?php

require_once "fruit.php";

class Apple extends Fruit
{

    public function __construct()
    {
        $this->price = 1.5;
        $this->tax = 0.06;
    }
}
