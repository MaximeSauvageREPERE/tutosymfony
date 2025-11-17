<?php

// Déclare le namespace pour organiser le code
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// Contrôleur pour la page "Blog"
final class BlogController extends AbstractController
{
    // Route pour filtrer les articles par catégorie
    #[Route('/blog/category/{category}', name: 'app_blog_by_category', requirements: ['category' => '[a-zA-Z0-9_-]+'])]
    public function byCategory(string $category): Response
    {
        // Ici, on afficherait la liste des articles de la catégorie donnée
        return $this->render('blog/category.html.twig', [
            'category' => $category,
        ]);
    }
    // Route pour /blog (liste des articles)
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig');
    }

    // Route pour la création d'un article
    #[Route('/blog/new', name: 'app_blog_new')]
    public function new(): Response
    {
        // Ici, on afficherait un formulaire de création d'article
        return $this->render('blog/new.html.twig');
    }

    // Route pour afficher un article par son slug
    #[Route('/blog/{slug}', name: 'app_blog_show', requirements: ['slug' => '[a-z0-9-]+'])]
    public function show(string $slug): Response
    {
        // Ici, on afficherait l'article correspondant au slug
        return $this->render('blog/show.html.twig', [
            'article_slug' => $slug,
        ]);
    }
}
