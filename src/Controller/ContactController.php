<?php

// Déclare le namespace pour organiser le code
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// Contrôleur pour la page "Contact"
final class ContactController extends AbstractController
{
    // Route pour /contact
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        // Rend le template Twig avec une variable
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
