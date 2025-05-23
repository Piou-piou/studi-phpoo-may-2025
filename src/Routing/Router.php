<?php

namespace App\Routing;

class Router
{
    private array $routes = [];
    private ?string $template = null;

    public function __construct(private string $method, private string $uri) {}

    public function register(string|array $method, string $uri, string $controller, string $action)
    {
        if (!is_array($method)) {
            $method = [$method];
        }

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

        if (!in_array($this->method, $routeInfo['method'])) {
            throw new \Exception($this->method.' n\'est pas autorisée pour cette URL');
        }

        $data = $controller->$action();
        $this->template = $data['template'];
        unset($data['template']);

        /** @TODO */
        // par la suite avoir un truc du genre
        //$data = $controller->getData();
        //$this->template = $controller->getTemplate();

        /*echo '<pre>';
        print_r($data);
        echo '</pre>';*/

        return $data;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}