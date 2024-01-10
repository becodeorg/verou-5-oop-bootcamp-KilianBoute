<?php

require_once "fruit.php";
class Banana extends Fruit
{
   

    public function __construct()
    {
        $this->price = 1;
        $this->tax = 0.06;
    }


}
