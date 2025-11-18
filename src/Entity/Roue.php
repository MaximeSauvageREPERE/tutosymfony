<?php
namespace App\Entity;

class Roue
{
    /**
     * Identifiant unique de la roue
     */
    private $id;

    /**
     * Marque de la roue (ex : Michelin, Pirelli...)
     */
    private $marque;

    /**
     * Prix de la roue en euros
     */
    private $prix;

    /**
     * Constructeur vide
     */
    public function __construct()
    {
    }

    /**
     * Retourne l'identifiant de la roue
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Définit l'identifiant de la roue
     */
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Retourne la marque de la roue
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Définit la marque de la roue
     */
    public function setMarque($marque): self
    {
        $this->marque = $marque;
        return $this;
    }

    /**
     * Retourne le prix de la roue
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Définit le prix de la roue
     */
    public function setPrix($prix): self
    {
        $this->prix = $prix;
        return $this;
    }
}