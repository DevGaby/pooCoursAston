<?php

class France24 implements Iterator
{
    private $data = [];

    public function __construct(string $filename)
    {
        if(!file_exists($filename)) {
            throw new Exception("$filename not found");
        }
        $xml = new SimpleXMLElement($filename, null, true);


        foreach ($xml->channel->item as $item) {
            $article = new Article();
            $article->setTitre($item->title)
                ->setDate(new DateTime($item->pubDate))
                ->setContent($item->description)
                ->setUrl($item->link)
                ->setAuthor($item->author);

            $this->data[] = $article;
        }
    }


    public function current()
    {
        // TODO: Implement current() method.
        return current($this->data);
    }

    public function next()
    {
        return next($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function valid()
    {
        return $this->key() !== null;
    }

    public function rewind()
    {
        reset ($this->data);
    }

}



