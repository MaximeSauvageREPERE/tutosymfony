<?php
namespace App\Entity;

class Roue
{
    private $id;
    private $marque;
    private $prix;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque): self
    {
        $this->marque = $marque;
        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix): self
    {
        $this->prix = $prix;
        return $this;
    }
}