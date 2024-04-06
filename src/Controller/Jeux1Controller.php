<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Jeux1Controller extends AbstractController
{
    #[Route('/jeux1', name: 'app_jeux1')]
    public function index(): Response
    {
        return $this->render('jeux1/index.html.twig', [
            'controller_name' => 'Jeux1Controller',
        ]);
    }
}
