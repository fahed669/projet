<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Paiements
 *
 * @ORM\Table(name="paiements", indexes={@ORM\Index(name="fk_paiements_commandes", columns={"idCommande"}), @ORM\Index(name="fk_paiements_users", columns={"idClient"})})
 * @ORM\Entity
 */
class Paiements
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    // /**
    //  * @var \DateTime
    //  *
    //  * @ORM\Column(name="date", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
    //  */
    // private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=255, nullable=false)
     */
    private $mode;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var bool
     *
     * @ORM\Column(name="archivee", type="boolean", nullable=false)
     */
    private $archivee = '0';

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    /**
     * @var \Commandes
     *
     * @ORM\ManyToOne(targetEntity="Commandes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCommande", referencedColumnName="id")
     * })
     */
    private $idcommande;

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getDate(): ?\DateTimeInterface
    // {
    //     return $this->date;
    // }

    // public function setDate(\DateTimeInterface $date): self
    // {
    //     $this->date = $date;

    //     return $this;
    // }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

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

    public function getIdclient(): ?Utilisateurs
    {
        return $this->idclient;
    }

    public function setIdclient(?Utilisateurs $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }

    public function getIdcommande(): ?Commandes
    {
        return $this->idcommande;
    }

    public function setIdcommande(?Commandes $idcommande): self
    {
        $this->idcommande = $idcommande;

        return $this;
    }


}
