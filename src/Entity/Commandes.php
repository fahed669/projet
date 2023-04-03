<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 *
 * @ORM\Table(name="commandes", indexes={@ORM\Index(name="fk_commandes_users", columns={"idClient"}), @ORM\Index(name="fk_commandes_vehicules", columns={"idVehicule"})})
 * @ORM\Entity
 */
class Commandes
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
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

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
     * @var \Vehicules
     *
     * @ORM\ManyToOne(targetEntity="Vehicules")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVehicule", referencedColumnName="id")
     * })
     */
    private $idvehicule;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getIdvehicule(): ?Vehicules
    {
        return $this->idvehicule;
    }

    public function setIdvehicule(?Vehicules $idvehicule): self
    {
        $this->idvehicule = $idvehicule;

        return $this;
    }
    public function __toString()
    {
        return $this->getAdresse();
    }


}
