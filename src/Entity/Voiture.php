<?php
namespace App\Entity;


class Voiture
{
    private string $marque;
    private string $modele;

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
}