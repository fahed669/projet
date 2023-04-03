<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs", uniqueConstraints={@ORM\UniqueConstraint(name="createdDate", columns={"createdDate"})})
 * @ORM\Entity
 */
class Utilisateurs
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
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255, nullable=false)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="numTelephone", type="integer", nullable=false)
     */
    private $numtelephone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date", nullable=false)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255, nullable=false)
     */
    private $genre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdDate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createddate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=false)
     */
    private $role;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numLicense", type="integer", nullable=true)
     */
    private $numlicense;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateLicense", type="date", nullable=true)
     */
    private $datelicense;

    /**
     * @var string|null
     *
     * @ORM\Column(name="competences", type="string", length=255, nullable=true)
     */
    private $competences;

    /**
     * @var string|null
     *
     * @ORM\Column(name="disponibilite", type="string", length=255, nullable=true)
     */
    private $disponibilite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="secteur", type="string", length=255, nullable=true)
     */
    private $secteur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idAbonnement", type="integer", nullable=true)
     */
    private $idabonnement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idConvention", type="integer", nullable=true)
     */
    private $idconvention;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumtelephone(): ?int
    {
        return $this->numtelephone;
    }

    public function setNumtelephone(int $numtelephone): self
    {
        $this->numtelephone = $numtelephone;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getCreateddate(): ?\DateTimeInterface
    {
        return $this->createddate;
    }

    public function setCreateddate(\DateTimeInterface $createddate): self
    {
        $this->createddate = $createddate;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getNumlicense(): ?int
    {
        return $this->numlicense;
    }

    public function setNumlicense(?int $numlicense): self
    {
        $this->numlicense = $numlicense;

        return $this;
    }

    public function getDatelicense(): ?\DateTimeInterface
    {
        return $this->datelicense;
    }

    public function setDatelicense(?\DateTimeInterface $datelicense): self
    {
        $this->datelicense = $datelicense;

        return $this;
    }

    public function getCompetences(): ?string
    {
        return $this->competences;
    }

    public function setCompetences(?string $competences): self
    {
        $this->competences = $competences;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(?string $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getSecteur(): ?string
    {
        return $this->secteur;
    }

    public function setSecteur(?string $secteur): self
    {
        $this->secteur = $secteur;

        return $this;
    }

    public function getIdabonnement(): ?int
    {
        return $this->idabonnement;
    }

    public function setIdabonnement(?int $idabonnement): self
    {
        $this->idabonnement = $idabonnement;

        return $this;
    }

    public function getIdconvention(): ?int
    {
        return $this->idconvention;
    }

    public function setIdconvention(?int $idconvention): self
    {
        $this->idconvention = $idconvention;

        return $this;
    }
    public function __toString()
    {
        return $this->getNom();
    }

}
