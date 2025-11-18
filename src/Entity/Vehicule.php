<?php
namespace App\Entity;

class Vehicule
{
    /**
     * Id de la voiture
     */
    protected $id;
    
    /**
     * Marque de la voiture (ex : Nissan, Renault...)
     */
    protected $marque;

    /**
     * Modèle de la voiture (ex : GT-R, Clio...)
     */
    protected string $modele;

    /**
     * Constructeur vide
     */
    public function __construct()
    {
    }


    /**
     * Définit la marque de la voiture
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * Retourne la marque de la voiture
     */
    public function getMarque(): string
    {
        return $this->marque;
    }


    /**
     * Définit le modèle de la voiture
     */
    public function setModele($modele): void
    {
        $this->modele = $modele;
    }

    /**
     * Retourne le modèle de la voiture
     */
    public function getModele(): string
    {
        return $this->modele;
    }
}