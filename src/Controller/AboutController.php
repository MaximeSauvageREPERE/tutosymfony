<?php

// Déclare le namespace pour organiser le code
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// Contrôleur pour la page "À propos"
class AboutController extends AbstractController
{
    // Route pour /about
    #[Route('/about', name: 'app_about')]
    public function index(): Response
    {
        // Rend le template Twig avec une variable
        return $this->render('about/index.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}
