<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Maintenances
 *
 * @ORM\Table(name="maintenances", indexes={@ORM\Index(name="fk_maintenances_users", columns={"idTechnicien"}), @ORM\Index(name="fk_maintenances_vehicules", columns={"idVehicule"})})
 * @ORM\Entity
 */
class Maintenances
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var bool
     *
     * @ORM\Column(name="archive", type="boolean", nullable=false)
     */
    private $archive = '0';

    /**
     * @var \Vehicules
     *
     * @ORM\ManyToOne(targetEntity="Vehicules")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVehicule", referencedColumnName="id")
     * })
     */
    private $idvehicule;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTechnicien", referencedColumnName="id")
     * })
     */
    private $idtechnicien;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function isArchive(): ?bool
    {
        return $this->archive;
    }

    public function setArchive(bool $archive): self
    {
        $this->archive = $archive;

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

    public function getIdtechnicien(): ?Utilisateurs
    {
        return $this->idtechnicien;
    }

    public function setIdtechnicien(?Utilisateurs $idtechnicien): self
    {
        $this->idtechnicien = $idtechnicien;

        return $this;
    }


}
