<?php

class Rating
{

    private ?int $id = null;
    private ?int $article_id = null;
    private ?int $rating = null;

    public function __construct($article_id, $rating)
    {
        $this->article_id = intval($article_id);
        $this->rating = intval($rating);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getArticleId()
    {
        return $this->article_id;
    }

    public function getRating()
    {
        return $this->rating;
    }
}
?>
