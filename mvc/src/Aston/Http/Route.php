<?php


namespace Aston\Http;


class Route
{
    /**
     * @var string
     */
    private $path = '';
    /**
     * @var callable
     */
    private $action;
    /**
     * @var array
     */
    private $params;

    /**
     * Route constructor.
     * @param string $path
     * @param callable $action
     */
    public function __construct(string $path, callable $action, array $params = [])
    {
        $this->setAction($path);
        $this->setAction($action);
        $this->setParams($params);
    }


    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return Route
     */
    public function setPath(string $path): Route
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return callable
     */
    public function getAction(): callable
    {
        return $this->action;
    }

    /**
     * @param callable $action
     * @return Route
     */
    public function setAction(callable $action): Route
    {
        $this->action = $action;
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
     * @return Route
     */
    public function setParams(array $params): Route
    {
        $this->params = $params;
        return $this;
    }



}