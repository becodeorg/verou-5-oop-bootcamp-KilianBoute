<?php

declare(strict_types=1);

require_once "Content.php";

class Vacancy extends Content
{
    public function __construct(string $title, string $text)
    {
        parent::__construct($title, $text);
    }

    public function showTitle()
    {
        return $this->title . " - apply now!";
    }
}
