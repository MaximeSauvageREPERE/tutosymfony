<?php
namespace App\Entity;


class Voiture
{
    private string $marque;
    private string $modele;
    private $roueAvantGauche;
    private $roueAvantDroite;
    private $roueArriereGauche;
    private $roueArriereDroite;

    public function __construct()
    {
    }

    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }
    
    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setModele($modele): void
    {
        $this->modele = $modele;
    }
    
    public function getModele(): string
    {
        return $this->modele;
    }

        public function setRoueAvantGauche($roue): void
    {
        $this->roueAvantGauche = $roue;
    }

    public function getRoueAvantGauche()
    {
        return $this->roueAvantGauche;
    }

    public function setRoueAvantDroite($roue): void
    {
        $this->roueAvantDroite = $roue;
    }

    public function getRoueAvantDroite()
    {
        return $this->roueAvantDroite;
    }

    public function setRoueArriereGauche($roue): void
    {
        $this->roueArriereGauche = $roue;
    }

    public function getRoueArriereGauche()
    {
        return $this->roueArriereGauche;
    }

    public function setRoueArriereDroite($roue): void
    {
        $this->roueArriereDroite = $roue;
    }

    public function getRoueArriereDroite()
    {
        return $this->roueArriereDroite;
    }
}