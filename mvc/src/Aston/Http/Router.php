<?php


namespace Aston\Http;


class Router
{

    /**
     * @var Request
     */
    private $request;
    /**
     * @var Route []
     */
    private $routes;

    /**
     * @return Route|null
     */
    public function match(): ?Route
    {
        foreach ($this->routes as $route)
        {
            
        }
    }

    /**
     * @param Route $route
     * @return Router
     */
    public function addRoute(Route $route): Router
    {
        $this->routes[] = $route;
        return $this;
    }

    /**
     * @param array $routes
     * @return Router
     */
    public function addRoutes(array $routes): Router
    {
        foreach ($routes as $route)
        {
            $this->addRoute($route);
        }
        return $this;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @param Request $request
     * @return Router
     */
    public function setRequest(Request $request): Router
    {
        $this->request = $request;
        return $this;
    }


}