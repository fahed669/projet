<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ratings
 *
 * @ORM\Table(name="ratings", indexes={@ORM\Index(name="fk_evenement", columns={"idEvenement"}), @ORM\Index(name="fk_utilisateur", columns={"idUtilisateur"})})
 * @ORM\Entity
 */
class Ratings
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
     * @ORM\Column(name="idUtilisateur", type="integer", nullable=false)
     */
    private $idutilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="idEvenement", type="integer", nullable=false)
     */
    private $idevenement;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer", nullable=false)
     */
    private $rate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdutilisateur(): ?int
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(int $idutilisateur): self
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    public function getIdevenement(): ?int
    {
        return $this->idevenement;
    }

    public function setIdevenement(int $idevenement): self
    {
        $this->idevenement = $idevenement;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }


}
