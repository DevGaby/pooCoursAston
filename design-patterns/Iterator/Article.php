<?php


class Article

{
    /**
     * @var mixed
     */
    private $id;
    /**
     * @var string
     */
    private $titre;
    /**
     * @var DateTime
     */

    private $date;
    /**
     * @var string
     */

    private $url;
    /**
     * @var string
     */

    private $content;

    private $author;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Article
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     * @return Article
     */
    public function setTitre(string $titre): Article
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return Article
     */
    public function setDate(DateTime $date): Article
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Article
     */
    public function setUrl(string $url): Article
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Article
     */
    public function setContent(string $content): Article
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }


}




