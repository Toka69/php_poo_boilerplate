<?php

namespace Lib;

use Lib\Router\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * Class AbstractController
 * @package Lib
 */
abstract class AbstractController
{
    private Router $router;

    /**
     * AbstractController constructor.
     * @param Router $router
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function redirect(string $name): RedirectResponse
    {
        return new RedirectResponse($this->router->generate($name));
    }

    public function render(string $view, array $data = []): Response
    {
        $loader = new FilesystemLoader(__DIR__ . '/../templates');
        $twig = new Environment($loader, [
            'cache' => false,
        ]);

        return new Response($twig->render($view, $data));
    }
}
