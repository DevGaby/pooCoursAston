<?php


namespace Aston\Http;

/**
 * Class Request
 * Route de test pour l'exemple
 * ?/blog/articles/
 */
class Request
{
    /**
     * @var string
     */
    private $baseUrl;
    /**
     * @var string
     */
    private $uri;
    /**
     * @var array
     */
    private $params = [];

    /**
     * Request constructor.
     * @param string $baseUrl
     * @param string $uri
     */
    public function  __construct(string $baseUrl = '/', string $uri = '')
    {
        $this->setBaseUrl($baseUrl);
        $this->setUri($uri);
        echo 'Request Ok';
        echo '<br>';
    }

    /**
     * @param string $key
     * @return bool|null
     */
    public function getPost(string $key)
    {
        return isset($_POST[$key])?? null;
    }

    public function isMethod(string $method):bool
    {
        return $_SERVER['REQUEST_METHOD'] === $method;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     * @return Request
     */
    public function setBaseUrl(string $baseUrl): Request
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return Request
     */
    public function setUri(string $uri): Request
    {
        if($uri === '')
        {
            $uri = $_SERVER['REQUEST_URI'];
        }

        $uri =  str_replace($this->getBaseUrl(), '', $uri);
        $this->uri = $uri;
        return $this;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param array $params
     * @return Request
     */
    public function setParams(array $params): Request
    {
        $this->params = $params;
        return $this;
    }


}