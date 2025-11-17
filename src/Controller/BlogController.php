<?php

// Déclare le namespace pour organiser le code
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// Contrôleur pour la page "Blog"
final class BlogController extends AbstractController
{
    // Route pour /blog
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        // Rend le template Twig avec une variable
        return $this->render('blog/index.html.twig');
    }
}
