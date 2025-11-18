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
        // Création de 7 objets Voiture distincts
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

        $roue1 = new Roue();
        $roue1->setMarque('Michelin');
        $roue1->setPrix(100);

        $roue2 = new Roue();
        $roue2->setMarque('Michelin');
        $roue2->setPrix(100);

        $roue3 = new Roue();
        $roue3->setMarque('Michelin');
        $roue3->setPrix(100);

        $roue4 = new Roue();
        $roue4->setMarque('Michelin');
        $roue4->setPrix(100);

        // Attribution des roues à la première voiture
        $voiture1->setRoueAvantGauche($roue1);
        $voiture1->setRoueAvantDroite($roue2);
        $voiture1->setRoueArriereGauche($roue3);
        $voiture1->setRoueArriereDroite($roue4);
        
        // On passe les 7 voitures à la vue séparément
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
