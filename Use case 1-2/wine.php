<?php

class Wine
{
    protected $price;
    protected $tax;

    public function __construct()
    {
        $this->price = 10;
        $this->tax = 0.21;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getTax()
    {
        return $this->tax;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setTax($tax)
    {
        $this->tax = $tax;
    }
}
