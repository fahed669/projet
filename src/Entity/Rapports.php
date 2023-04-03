<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapports
 *
 * @ORM\Table(name="rapports", indexes={@ORM\Index(name="fk_rapports_users", columns={"idTechnicien"})})
 * @ORM\Entity
 */
class Rapports
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
     * @var float
     *
     * @ORM\Column(name="cout", type="float", precision=10, scale=0, nullable=false)
     */
    private $cout;

    /**
     * @var string
     *
     * @ORM\Column(name="piecesChangees", type="string", length=255, nullable=false)
     */
    private $pieceschangees;

    /**
     * @var string
     *
     * @ORM\Column(name="tachesRealisees", type="string", length=255, nullable=false)
     */
    private $tachesrealisees;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="archive", type="boolean", nullable=false)
     */
    private $archive = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="idMaintenance", type="integer", nullable=false)
     */
    private $idmaintenance;

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

    public function getCout(): ?float
    {
        return $this->cout;
    }

    public function setCout(float $cout): self
    {
        $this->cout = $cout;

        return $this;
    }

    public function getPieceschangees(): ?string
    {
        return $this->pieceschangees;
    }

    public function setPieceschangees(string $pieceschangees): self
    {
        $this->pieceschangees = $pieceschangees;

        return $this;
    }

    public function getTachesrealisees(): ?string
    {
        return $this->tachesrealisees;
    }

    public function setTachesrealisees(string $tachesrealisees): self
    {
        $this->tachesrealisees = $tachesrealisees;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getIdmaintenance(): ?int
    {
        return $this->idmaintenance;
    }

    public function setIdmaintenance(int $idmaintenance): self
    {
        $this->idmaintenance = $idmaintenance;

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
