<?php


namespace Aston\Http;

use Exception;

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
     * Router constructor.
     */
    public function  __construct()
    {
            $this->setRequest(new Request());
    }

    /**
     * @param $method
     * @param $arguments
     * @return mixed
     * @throws Exception
     */
    public function __call($method, $arguments)
    {
        // Force en majuscule le verb recupere
        $method = strtoupper($method);
        $expVerb =  ['GET', 'POST', 'PUT', 'DELETE'];

        if(!in_array($method, $expVerb))
        {
            throw new Exception("$method method does not exists");
        }
        array_unshift($arguments, $method);
        return call_user_func_array([$this, 'createRoute'], $arguments);
    }

    /**
     * @param string $path
     * @param callable $action
     * @param array $params
     * @return mixed
     */
    public function get(string $path, callable $action, array $params =[])
    {
       return $this->createRoute('GET', $path, $action, $params);
    }

//    public function post(string $path, callable $action, array $params =[])
//    {
//        return $this->createRoute('POST', $path, $action, $params);
//    }
//
//    public function put(string $path, callable $action, array $params =[])
//    {
//        return $this->createRoute('PUT', $path, $action, $params);
//    }
//
//    public function delete(string $path, callable $action, array $params =[])
//    {
//        return $this->createRoute('DELETE', $path, $action, $params);
//    }
//
//    protected function createRoute(string $method, callable $action, array $params =[])
//    {
//        $route = new Route($method, $action, $params);
//        $this->addRoute($route);
//
//        return $this;
//    }

    /**
     * @return Route|null
     */
    public function match(): ?Route
    {
        $req = $this->getRequest();
        $matches = [];
        foreach ($this->routes as $route)
        {
            $pattern =  sprintf('@^%s$@', $route->getPath());

            if($req->isMethod($route->getMethod()) && preg_match($pattern, $req->getUri(), $matches))
            {
                // On supprime le 1er indice du tableau
                array_shift($matches);

                // On associe le tableau avec les id Year et Title
                $req->setParams(array_combine($route->getParams(), $matches));

                echo '<pre>';
                print_r($req->getParams());
                echo '</pre>';

                return $route;
            }
        }
        return null;
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