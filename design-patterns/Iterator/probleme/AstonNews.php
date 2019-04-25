<?php

class AstonNews
{
    private $articles = [];

    public function  __construct(string  $filename)
    {
        if(!file_exists($filename))
        {
            throw new Exception("$filename not found");
        }
        $file = file_get_contents($filename);
        $json = json_decode($file, true);

        foreach ($json as $article)
        {
            $a = new Article();
            $a->setTitre($article['title'])
                ->setId($article['id'])
                ->setAuthor($article['author'])
                ->setDate(new DateTime($article['date']))
                ->setContent($article['content'])
                ->setUrl($article['url']);

            $this->articles[] = $a;
        }
    }

    public function getArticles(): array
    {
        return $this->articles;
    }


}