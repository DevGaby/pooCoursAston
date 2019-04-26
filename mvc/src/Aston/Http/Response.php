<?php


namespace Aston\Http;


class Response
{
    /**
     * @var int
     */
    private $statusCode = 200;
    /**
     * @var array
     */
    private $headers = [];
    /**
     * @var mixed
     */
    private $body;

    public function  __construct($body, $statusCode = 200)
    {
        $this->setBody($body);
        $this->setStatusCode($statusCode);
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return Response
     */
    public function setStatusCode(int $statusCode): Response
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function addHeader(string $key, string $value) : Response
    {
        //$this->headers['Content-Type'] = 'text/html';
        $this->headers[$key] = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function getHeaders():array
    {
        return $this->headers;
    }

    /**
     * @param string $url
     * @param int $statusCode
     */
    public function redirect(string $url, $statusCode = 301)
    {
        $this->setStatusCode($statusCode);
        $this->addHeader('Location', $url);
    }


    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     * @return Response
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function  write() : void
    {
        http_response_code($this->getStatusCode());
        //Ecrire dans les entetes
        foreach ($this->getHeaders() as $key)
        {
            header("$key:value");
        }
        echo $this->getBody();
    }


}