<?php

namespace Lib\Router;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class Router
 * @package Lib\Router
 */
class Router
{
    /**
     * @var array<Route>
     */
    private array $routes;

    /**
     * @param Route $route
     */
    public function add(Route $route): void
    {
        $this->routes[] = $route;
    }

    /**
     * @param Request $request
     * @return Route|null
     */
    public function match(Request $request): ?Route
    {
        foreach ($this->routes as $route) {
            if ($request->getPathInfo() === $route->getPath()) {
                return $route;
            }
        }

        return null;
    }

    public function generate(string $name): string
    {
        foreach ($this->routes as $route) {
            if ($route->getName() === $name) {
                return $route->getPath();
            }
        }
    }
}
