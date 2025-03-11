<?php

namespace App\Entity;

use App\Repository\EnclosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnclosRepository::class)]
class Enclos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?float $superficie = null;

    #[ORM\Column]
    private ?int $nb_animaux_max = null;

    #[ORM\Column(nullable: true)]
    private ?bool $quarantaine = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSuperficie(): ?float
    {
        return $this->superficie;
    }

    public function setSuperficie(float $superficie): static
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getNbAnimauxMax(): ?int
    {
        return $this->nb_animaux_max;
    }

    public function setNbAnimauxMax(int $nb_animaux_max): static
    {
        $this->nb_animaux_max = $nb_animaux_max;

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
