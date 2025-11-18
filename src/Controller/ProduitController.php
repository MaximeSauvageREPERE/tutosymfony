<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Contrôleur pour la gestion des produits.
 * Contient les routes pour créer, lister et afficher les produits.
 */
final class ProduitController extends AbstractController
{
    /**
     * Route : /produit
     * Crée deux produits en base (exemple) et affiche la page d'accueil produit.
     */
    #[Route('/produit', name: 'app_produit')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Création d'un produit Barre de céréale chocolat
        $barreCereale = new Produit();
        $barreCereale->setNom('Barre de céréale chocolat');
        $barreCereale->setPrix(1.50);

        // Création d'un produit Imprimante 3D
        $imprimante = new Produit();
        $imprimante->setNom('Imprimante 3D');
        $imprimante->setPrix(300);

        // Persiste les produits en base
        $entityManager->persist($barreCereale);
        $entityManager->persist($imprimante);
        $entityManager->flush(); // Enregistre en base

        // Affiche la vue d'accueil produit
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    /**
     * Route : /produit/liste
     * Affiche la liste de tous les produits en base de données.
     */
    #[Route('/produit/liste', name: 'produit_afficher', methods: ['GET'])]
    public function afficherProduits(EntityManagerInterface $entityManager): Response
    {
        // Récupère tous les produits depuis la base
        $produits = $entityManager->getRepository(Produit::class)->findAll();
        // Affiche la vue liste avec les produits
        return $this->render('produit/liste.html.twig', [
            'produits' => $produits,
        ]);
    }

    /**
     * Route : /produit/{id}
     * Affiche la fiche d'un produit selon son id.
     * Affiche une erreur 404 si le produit n'existe pas.
     */
    #[Route('/produit/{id}', name: 'produit_fiche', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function ficheProduit(int $id, EntityManagerInterface $entityManager): Response
    {
        // Recherche le produit par son id
        $produit = $entityManager->getRepository(Produit::class)->find($id);
        if (!$produit) {
            // Produit non trouvé : erreur 404
            throw $this->createNotFoundException('Produit non trouvé');
        }
        // Affiche la fiche du produit
        return $this->render('produit/fiche.html.twig', [
            'produit' => $produit,
        ]);
    }
}
