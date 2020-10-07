<?php

namespace App\Controller;

use Lib\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class BlogController
 * @package App\Controller
 */
class BlogController extends AbstractController
{
    public function add(Request $request): Response
    {
        return $this->redirect("home");
    }
}
