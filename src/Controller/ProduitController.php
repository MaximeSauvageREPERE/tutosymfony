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
        $barreCereale->setId(1);

        $imprimante = new Produit();
        $imprimante->setNom('Imprimante 3D');
        $imprimante->setPrix(300);
        $imprimante->setId(2);

        $entityManager->persist($barreCereale);
        $entityManager->persist($imprimante);
        $entityManager->flush();

        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
}
