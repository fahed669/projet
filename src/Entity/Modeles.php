<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modeles
 *
 * @ORM\Table(name="modeles", indexes={@ORM\Index(name="fk_modeles_categories", columns={"idCategorie"})})
 * @ORM\Entity
 */
class Modeles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255, nullable=false)
     */
    private $marque;

    /**
     * @var int
     *
     * @ORM\Column(name="puissance", type="integer", nullable=false)
     */
    private $puissance;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="archivee", type="boolean", nullable=false)
     */
    private $archivee = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ImgSRC", type="string", length=255, nullable=false)
     */
    private $imgsrc;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategorie", referencedColumnName="id")
     * })
     */
    private $idcategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getPuissance(): ?int
    {
        return $this->puissance;
    }

    public function setPuissance(int $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function isArchivee(): ?bool
    {
        return $this->archivee;
    }

    public function setArchivee(bool $archivee): self
    {
        $this->archivee = $archivee;

        return $this;
    }

    public function getImgsrc(): ?string
    {
        return $this->imgsrc;
    }

    public function setImgsrc(string $imgsrc): self
    {
        $this->imgsrc = $imgsrc;

        return $this;
    }

    public function getIdcategorie(): ?Categories
    {
        return $this->idcategorie;
    }

    public function setIdcategorie(?Categories $idcategorie): self
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }


}
