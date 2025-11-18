<?php
namespace App\Entity;



class Voiture
{
    /**
     * Marque de la voiture (ex : Nissan, Renault...)
     */
    private string $marque;

    /**
     * Modèle de la voiture (ex : GT-R, Clio...)
     */
    private string $modele;

    /**
     * Roue avant gauche (objet Roue)
     */
    private $roueAvantGauche;

    /**
     * Roue avant droite (objet Roue)
     */
    private $roueAvantDroite;

    /**
     * Roue arrière gauche (objet Roue)
     */
    private $roueArriereGauche;

    /**
     * Roue arrière droite (objet Roue)
     */
    private $roueArriereDroite;


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


        /**
         * Définit la roue avant gauche
         */
        public function setRoueAvantGauche($roue): void
        {
            $this->roueAvantGauche = $roue;
        }

        /**
         * Retourne la roue avant gauche
         */
        public function getRoueAvantGauche()
        {
            return $this->roueAvantGauche;
        }

        /**
         * Définit la roue avant droite
         */
        public function setRoueAvantDroite($roue): void
        {
            $this->roueAvantDroite = $roue;
        }

        /**
         * Retourne la roue avant droite
         */
        public function getRoueAvantDroite()
        {
            return $this->roueAvantDroite;
        }

        /**
         * Définit la roue arrière gauche
         */
        public function setRoueArriereGauche($roue): void
        {
            $this->roueArriereGauche = $roue;
        }

        /**
         * Retourne la roue arrière gauche
         */
        public function getRoueArriereGauche()
        {
            return $this->roueArriereGauche;
        }

        /**
         * Définit la roue arrière droite
         */
        public function setRoueArriereDroite($roue): void
        {
            $this->roueArriereDroite = $roue;
        }

        /**
         * Retourne la roue arrière droite
         */
        public function getRoueArriereDroite()
        {
            return $this->roueArriereDroite;
        }
}