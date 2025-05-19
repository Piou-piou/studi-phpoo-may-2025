<?php

namespace App\Routing;

class Router
{
    private array $routes = [];

    public function __construct(private string $method, private string $uri) {}

    public function register(string $method, string $uri, string $controller, string $action)
    {
        $this->routes[$uri] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function run()
    {
        $routeInfo = $this->routes[$this->uri];

        /*echo '<pre>';
        print_r($routeInfo);
        echo '</pre>';*/

        $controller = $routeInfo['controller'];
        $action = $routeInfo['action'];

        if (!class_exists($controller)) {
            throw new \LogicException('Le controller '.$controller.' n\'existe pas');
        }

        $controller = new $controller();

        if (!method_exists($controller, $action)) {
            throw new \LogicException('La méthode '.$action.' n\'existe pas dans le controller '.$controller::class);
        }

        // @TODO ajouter vérification de la méthode si OK par rapport à $this->>method

        $data = $controller->$action();

        /*echo '<pre>';
        print_r($controller);
        echo '</pre>';*/

        return $data;
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}