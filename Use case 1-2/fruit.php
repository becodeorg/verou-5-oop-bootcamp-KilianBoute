<?php

declare(strict_types=1);
class Fruit
{
    protected $discount;
    protected $price;
    protected $tax;

    public function setDiscount(int $discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
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
