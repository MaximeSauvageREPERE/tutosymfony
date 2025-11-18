<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Voiture;
use App\Entity\Roue;

final class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'app_voiture_index')]
    public function index(): Response
    {
        // Création de 7 objets Voiture distincts avec leur marque et modèle
        $voiture1 = new Voiture(); 
        $voiture1->setMarque('Nissan');
        $voiture1->setModele('GT-R');

        $voiture2 = new Voiture(); 
        $voiture2->setMarque('Renault');
        $voiture2->setModele('Clio');

        $voiture3 = new Voiture(); 
        $voiture3->setMarque('Peugeot');
        $voiture3->setModele('208');

        $voiture4 = new Voiture();
        $voiture4->setMarque('Citroën');
        $voiture4->setModele('C3');

        $voiture5 = new Voiture(); 
        $voiture5->setMarque('Toyota');
        $voiture5->setModele('Corolla');

        $voiture6 = new Voiture(); 
        $voiture6->setMarque('Volkswagen');
        $voiture6->setModele('Golf');

        $voiture7 = new Voiture(); 
        $voiture7->setMarque('Ford');
        $voiture7->setModele('Focus');

        // Création de deux roues (Michelin et Pirelli)
        $roue1 = new Roue();
        $roue1->setMarque('Michelin');
        $roue1->setPrix(100);

        $roue2 = new Roue();
        $roue2->setMarque('Pirelli');
        $roue2->setPrix(100);

        // Attribution des roues à la première voiture (4 roues Michelin)
        $voiture1->setRoueAvantGauche($roue1);
        $voiture1->setRoueAvantDroite($roue1);
        $voiture1->setRoueArriereGauche($roue1);
        $voiture1->setRoueArriereDroite($roue1);

        // Attribution des roues à la deuxième voiture (2 Michelin à l'avant, 2 Pirelli à l'arrière)
        $voiture2->setRoueAvantGauche($roue1);
        $voiture2->setRoueAvantDroite($roue1);
        $voiture2->setRoueArriereGauche($roue2);
        $voiture2->setRoueArriereDroite($roue2);

        // Passage des 7 voitures à la vue Twig, chaque variable correspondant à une voiture
        return $this->render('voiture/index.html.twig', [
            'voiture1' => $voiture1,
            'voiture2' => $voiture2,
            'voiture3' => $voiture3,
            'voiture4' => $voiture4,
            'voiture5' => $voiture5,
            'voiture6' => $voiture6,
            'voiture7' => $voiture7,
        ]);
    }
}
