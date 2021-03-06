<?php

class France24
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

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}



