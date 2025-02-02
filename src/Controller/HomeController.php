<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController 
{
    #[Route('/')]
    public function index(): Response {
        $contents = $this->renderView('acceuil/index.html.twig');
        return new Response($contents);
    }
}
