<?php

require_once "banana.php";
require_once "apple.php";
require_once "wine.php";

$basket = [];
$bananaCount = 6;
$appleCount = 3;
$wineCount = 2;

$fruitDiscount = 0.5;
function fillBasket(&$basket, $bananaCount, $appleCount, $wineCount)
{
    for ($i = 0; $i < $bananaCount; $i++) {
        $basket[] = new Banana();
    }
    for ($i = 0; $i < $appleCount; $i++) {
        $basket[] = new Apple();
    }
    for ($i = 0; $i < $wineCount; $i++) {
        $basket[] = new Wine();
    }
}

fillBasket($basket, $bananaCount, $appleCount, $wineCount);

function getTotalPrice($basket)
{
    $totalPrice = 0;
    foreach ($basket as $key => $item) {
        $totalPrice += $item->getPrice();
    }
    return $totalPrice;
}

function getTotalTax($basket)
{
    $totalTax = 0;
    foreach ($basket as $key => $item) {
        $totalTax += ($item->getTax() * $item->getPrice());
    }
    return $totalTax;
}

function calculateDiscount($basket, $discount)
{
    foreach ($basket as $key => $item) {
        if ($item instanceof Fruit) {
            $item->setPrice($discount * $item->getPrice());
        };
    }
}


echo "Total price: " . getTotalPrice($basket) . "</br>";
echo "Total tax: " . getTotalTax($basket) . "</br>";
calculateDiscount($basket, 0.5);
echo "Total discount: " . getTotalPrice($basket) . "</br>";


echo '<pre>';
print_r($basket);
echo '</pre>';
