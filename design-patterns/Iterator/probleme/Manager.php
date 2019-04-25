<?php

class Manager
{
    public $news = [];

    public function addNews($news)
    {
        $this->news[] = $news;
    }

    public function show ()
    {
        foreach ($this->news as $news)
        {
            if ($news instanceof France24) {
                foreach ($news->getData() as $article) {
                    echo '<h2>'. $article->getTitre() .'</h2>';
                }
            }
            if ($news instanceof AstonNews) {
                foreach ($news->getArticles() as $article) {
                    echo '<h2>'. $article->getTitre() .'</h2>';
                }
            }
        }
    }
}