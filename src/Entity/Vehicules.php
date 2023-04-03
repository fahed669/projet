<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicules
 *
 * @ORM\Table(name="vehicules", uniqueConstraints={@ORM\UniqueConstraint(name="matricule", columns={"matricule"})}, indexes={@ORM\Index(name="FK_vehicules_modeles", columns={"idModele"})})
 * @ORM\Entity
 */
class Vehicules
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
     * @ORM\Column(name="matricule", type="string", length=255, nullable=false)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255, nullable=false)
     */
    private $couleur;

    /**
     * @var int
     *
     * @ORM\Column(name="kilometrage", type="integer", nullable=false)
     */
    private $kilometrage;

    /**
     * @var bool
     *
     * @ORM\Column(name="archivee", type="boolean", nullable=false)
     */
    private $archivee = '0';

    /**
     * @var \Modeles
     *
     * @ORM\ManyToOne(targetEntity="Modeles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idModele", referencedColumnName="id")
     * })
     */
    private $idmodele;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

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

    public function getIdmodele(): ?Modeles
    {
        return $this->idmodele;
    }

    public function setIdmodele(?Modeles $idmodele): self
    {
        $this->idmodele = $idmodele;

        return $this;
    }

    public function __toString()
    {
        return $this->getMatricule();
    }

}
