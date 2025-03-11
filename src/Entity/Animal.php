<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Ajout de la validation pour le numéro d'identification avec la contrainte Range
    #[ORM\Column]
    #[Assert\Range(
        min: 10000000000000,  // Minimum 14 chiffres
        max: 99999999999999,  // Maximum 14 chiffres
        notInRangeMessage: 'Le numéro d\'identification doit comporter entre 1 et 14 chiffres.'
    )]
    private ?int $numero_identification = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_de_naissance = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_arrivee_zoo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_depart_zoo = null;

    #[ORM\Column]
    private ?bool $propriete_zoo = null;

    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    #[ORM\Column(length: 255)]
    private ?string $espece = null;

    #[ORM\Column(length: 255)]
    private ?string $sexe = null;

    #[ORM\Column]
    private ?bool $sterilisation = null;

    #[ORM\Column(nullable: true)]
    private ?bool $quarantaine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroIdentification(): ?int
    {
        return $this->numero_identification;
    }

    public function setNumeroIdentification(int $numero_identification): static
    {
        $this->numero_identification = $numero_identification;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->date_de_naissance;
    }

    public function setDateDeNaissance(?\DateTimeInterface $date_de_naissance): static
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    public function getDateArriveeZoo(): ?\DateTimeInterface
    {
        return $this->date_arrivee_zoo;
    }

    public function setDateArriveeZoo(\DateTimeInterface $date_arrivee_zoo): static
    {
        $this->date_arrivee_zoo = $date_arrivee_zoo;

        return $this;
    }

    public function getDateDepartZoo(): ?\DateTimeInterface
    {
        return $this->date_depart_zoo;
    }

    public function setDateDepartZoo(?\DateTimeInterface $date_depart_zoo): static
    {
        $this->date_depart_zoo = $date_depart_zoo;

        return $this;
    }

    public function isProprieteZoo(): ?bool
    {
        return $this->propriete_zoo;
    }

    public function setProprieteZoo(bool $propriete_zoo): static
    {
        $this->propriete_zoo = $propriete_zoo;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): static
    {
        $this->genre = $genre;

        return $this;
    }

    public function getEspece(): ?string
    {
        return $this->espece;
    }

    public function setEspece(string $espece): static
    {
        $this->espece = $espece;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function isSterilisation(): ?bool
    {
        return $this->sterilisation;
    }

    public function setSterilisation(bool $sterilisation): static
    {
        $this->sterilisation = $sterilisation;

        return $this;
    }

    public function isQuarantaine(): ?bool
    {
        return $this->quarantaine;
    }

    public function setQuarantaine(?bool $quarantaine): static
    {
        $this->quarantaine = $quarantaine;

        return $this;
    }
}
