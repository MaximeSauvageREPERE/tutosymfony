<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;

final class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $barreCereale = new Produit();
        $barreCereale->setNom('Barre de céréale chocolat');
        $barreCereale->setPrix(1.50);

        $imprimante = new Produit();
        $imprimante->setNom('Imprimante 3D');
        $imprimante->setPrix(300);

        $entityManager->persist($barreCereale);
        $entityManager->persist($imprimante);
        $entityManager->flush();

        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    #[Route('/produit/produits', name: 'produit_liste', methods: ['GET'])]
    public function listeProduits(EntityManagerInterface $entityManager): Response
    {
        $produits = $entityManager->getRepository(Produit::class)->findAll();
        $data = [];
        foreach ($produits as $produit) {
            $data[] = [
                'id' => $produit->getId(),
                'nom' => $produit->getNom(),
                'prix' => $produit->getPrix(),
            ];
        }
        return $this->json($data);
    }

    #[Route('/produit/liste', name: 'produit_afficher', methods: ['GET'])]
    public function afficherProduits(EntityManagerInterface $entityManager): Response
    {
        $produits = $entityManager->getRepository(Produit::class)->findAll();
        return $this->render('produit/liste.html.twig', [
            'produits' => $produits,
        ]);
    }
}
