<?php	
namespace App\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
#[ORM\Entity]
#[ORM\Table(name: 'produits')]

class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
 
    #[ORM\Column(length: 255)]
    private $nom = null;
 
    #[ORM\Column]
    private $prix = null;
 
    /**
     * Get id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set prix
     */
    public function setPrix($prix): self
    {
        $this->prix = $prix;
        return $this;
    }
}
