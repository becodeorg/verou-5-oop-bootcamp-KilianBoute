<?php

declare(strict_types=1);

require_once "Content.php";
require_once "Ad.php";
require_once "Vacancy.php";
require_once "Article.php";

$contentArray = [];

function fillContentArray(int $articleCount, int $adCount, int $vacancyCount, &$contentArray)
{
    for ($i = 1; $i < $articleCount + 1; $i++) {
        $contentArray[] = new Article("Article $i", "Text for article $i", false);
    }
    for ($i = 1; $i < $adCount + 1; $i++) {
        $contentArray[] = new Ad("Ad $i", "Text for ad $i");
    }
    for ($i = 1; $i < $vacancyCount + 1; $i++) {
        $contentArray[] = new Vacancy("Vacancy $i", "Text for vacancy $i");
    }
}

fillContentArray(2, 1, 1, $contentArray);

function showContentArray($contentArray)
{
    foreach ($contentArray as $key => $content) {
        echo "<h2>" . $content->showTitle() . "</h2></br>";
        echo "<p>" . $content->getText() . "</p></br>";
    }
}

showContentArray($contentArray);

$contentArray[1]->setIsbBreakingNews(true);

echo "</br>-----------After set breaking news: ------------</br>";
showContentArray($contentArray);
