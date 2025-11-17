<?php

// Déclare le namespace pour organiser le code et éviter les conflits de noms
namespace App\Controller;

// Importe la classe de base des contrôleurs Symfony
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// Importe la classe pour gérer les réponses HTTP
use Symfony\Component\HttpFoundation\Response;
// Importe l'attribut Route pour définir les routes directement sur les méthodes
use Symfony\Component\Routing\Attribute\Route;

// Déclare la classe HomeController qui hérite des fonctionnalités de AbstractController
class HomeController extends AbstractController
{
    // Attribut PHP : définit la route /home et le nom de la route "app_home"
    #[Route('/home/{nom}-{prenom}', name: 'app_home')]
    // Méthode appelée quand la route /home est visitée
    public function index(string $nom, string $prenom): Response
    {
        // Génère une réponse HTML en rendant le template Twig 'home/index.html.twig'
        // et en lui passant la variable 'controller_name'
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'nom' => $nom,
            'prenom' => $prenom,
        ]);
    }
}
