<?php

declare(strict_types=1);

require_once "Content.php";

class Article extends Content
{
    private $isBreakingNews = false;

    public function __construct(string $title, string $text, bool $isBreakingNews)
    {
        parent::__construct($title, $text);
        $this->isBreakingNews = $isBreakingNews;
    }

    public function showTitle()
    {
        return $this->isBreakingNews ? "BREAKING: " . $this->title : $this->title;
    }

    public function setIsbBreakingNews(bool $isBreakingNews)
    {
        $this->isBreakingNews = $isBreakingNews;
    }

    public function getIsbBreakingNews()
    {
        return $this->isBreakingNews;
    }
}
