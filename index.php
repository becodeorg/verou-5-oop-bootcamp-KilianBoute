<?php

require_once "banana.php";
require_once "apple.php";
require_once "wine.php";

$basket = [];
$bananaCount = 6;
$appleCount = 3;
$wineCount = 2;
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

echo "Total price: " . getTotalPrice($basket) . "</br>";
echo "Total tax: " . getTotalTax($basket) . "</br>";


echo '<pre>';
print_r($basket);
echo '</pre>';
