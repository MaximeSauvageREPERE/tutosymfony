<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Voiture;

final class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'app_voiture_index')]
    public function index(): Response
    {
        // Création d'un tableau vide pour stocker les objets Voiture
        $voitures = [];

        // Données des voitures à afficher (marque et modèle)
        $data = [
            ['marque' => 'Nissan', 'modele' => 'GT-R'],
            ['marque' => 'Renault', 'modele' => 'Clio'],
            ['marque' => 'Peugeot', 'modele' => '208'],
            ['marque' => 'Citroën', 'modele' => 'C3'],
            ['marque' => 'Toyota', 'modele' => 'Corolla'],
            ['marque' => 'Volkswagen', 'modele' => 'Golf'],
            ['marque' => 'Ford', 'modele' => 'Focus'],
        ];

        // Pour chaque entrée du tableau $data, on crée un objet Voiture et on le configure
        foreach ($data as $item) {
            $voiture = new Voiture(); // Instanciation d'une nouvelle voiture
            $voiture->setMarque($item['marque']); // Définition de la marque
            $voiture->setModele($item['modele']); // Définition du modèle
            $voitures[] = $voiture; // Ajout de la voiture au tableau
        }

        // On passe le tableau de voitures à la vue Twig
        return $this->render('voiture/index.html.twig', [
            'voitures' => $voitures,
        ]);
    }
}
