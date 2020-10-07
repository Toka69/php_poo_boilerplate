<?php

namespace App\Controller;

use Lib\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends AbstractController
{
    public function home(Request $request): Response
    {
        return $this->render("home.html.twig", [
            "prenom" => "Thomas"
        ]);
    }
}
