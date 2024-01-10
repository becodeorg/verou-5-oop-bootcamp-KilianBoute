<?php

declare(strict_types=1);

class Content
{
    protected $title;
    protected $text;
    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setText(string $text)
    {
        $this->title = $text;
    }
}
