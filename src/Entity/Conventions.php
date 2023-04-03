<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conventions
 *
 * @ORM\Table(name="conventions")
 * @ORM\Entity
 */
class Conventions
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
     * @var int
     *
     * @ORM\Column(name="nbAbonnement", type="integer", nullable=false)
     */
    private $nbabonnement;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="archive", type="integer", nullable=false, options={"default"="1"})
     */
    private $archive = 1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbabonnement(): ?int
    {
        return $this->nbabonnement;
    }

    public function setNbabonnement(int $nbabonnement): self
    {
        $this->nbabonnement = $nbabonnement;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getArchive(): ?int
    {
        return $this->archive;
    }

    public function setArchive(int $archive): self
    {
        $this->archive = $archive;

        return $this;
    }


}
