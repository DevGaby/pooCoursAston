<?php

class AstonNews implements Iterator
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

    public function current()
    {
        // TODO: Implement current() method.
        return current($this->articles);
    }

    public function next()
    {
        return next($this->articles);
    }

    public function key()
    {
        return key($this->articles);
    }

    public function valid()
    {
        return $this->key() !== null;
    }

    public function rewind()
    {
        reset ($this->articles);
    }

}