<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
class Team
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\OneToOne(inversedBy: 'gardien', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $gardien;

    #[ORM\OneToOne(inversedBy: 'defenseur1', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $defenseur1;

    #[ORM\OneToOne(inversedBy: 'defenseur2', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $defenseur2;

    #[ORM\OneToOne(inversedBy: 'defenseur3', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $defenseur3;

    #[ORM\OneToOne(inversedBy: 'defenseur4', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $defenseur4;

    #[ORM\OneToOne(inversedBy: 'defenseur5', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $defenseur5;

    #[ORM\OneToOne(inversedBy: 'milieu1', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $milieu1;

    #[ORM\OneToOne(inversedBy: 'milieu2', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $milieu2;

    #[ORM\OneToOne(inversedBy: 'milieu3', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $milieu3;

    #[ORM\OneToOne(inversedBy: 'milieu4', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $milieu4;

    #[ORM\OneToOne(inversedBy: 'milieu5', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $milieu5;

    #[ORM\OneToOne(inversedBy: 'attaquant1', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $attaquant1;

    #[ORM\OneToOne(inversedBy: 'attaquant2', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $attaquant2;

    #[ORM\OneToOne(inversedBy: 'attaquant3', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $attaquant3;

    #[ORM\OneToOne(inversedBy: 'remplacant1', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $remplacant1;

    #[ORM\OneToOne(inversedBy: 'remplacant2', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $remplacant2;

    #[ORM\OneToOne(inversedBy: 'remplacant3', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $remplacant3;

    #[ORM\OneToOne(inversedBy: 'remplacant4', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $remplacant4;

    #[ORM\OneToOne(inversedBy: 'remplacant5', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $remplacant5;

    #[ORM\OneToOne(inversedBy: 'remplacant6', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $remplacant6;

    #[ORM\OneToOne(inversedBy: 'remplacant7', targetEntity: Joueur::class, cascade: ['persist', 'remove'])]
    private $remplacant7;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGardien(): ?Joueur
    {
        return $this->gardien;
    }

    public function setGardien(?Joueur $gardien): self
    {
        $this->gardien = $gardien;

        return $this;
    }

    public function getDefenseur1(): ?Joueur
    {
        return $this->defenseur1;
    }

    public function setDefenseur1(?Joueur $defenseur1): self
    {
        $this->defenseur1 = $defenseur1;

        return $this;
    }

    public function getDefenseur2(): ?Joueur
    {
        return $this->defenseur2;
    }

    public function setDefenseur2(?Joueur $defenseur2): self
    {
        $this->defenseur2 = $defenseur2;

        return $this;
    }

    public function getDefenseur3(): ?Joueur
    {
        return $this->defenseur3;
    }

    public function setDefenseur3(?Joueur $defenseur3): self
    {
        $this->defenseur3 = $defenseur3;

        return $this;
    }

    public function getDefenseur4(): ?Joueur
    {
        return $this->defenseur4;
    }

    public function setDefenseur4(?Joueur $defenseur4): self
    {
        $this->defenseur4 = $defenseur4;

        return $this;
    }

    public function getDefenseur5(): ?Joueur
    {
        return $this->defenseur5;
    }

    public function setDefenseur5(?Joueur $defenseur5): self
    {
        $this->defenseur5 = $defenseur5;

        return $this;
    }

    public function getMilieu1(): ?Joueur
    {
        return $this->milieu1;
    }

    public function setMilieu1(?Joueur $milieu1): self
    {
        $this->milieu1 = $milieu1;

        return $this;
    }

    public function getMilieu2(): ?Joueur
    {
        return $this->milieu2;
    }

    public function setMilieu2(?Joueur $milieu2): self
    {
        $this->milieu2 = $milieu2;

        return $this;
    }

    public function getMilieu3(): ?Joueur
    {
        return $this->milieu3;
    }

    public function setMilieu3(?Joueur $milieu3): self
    {
        $this->milieu3 = $milieu3;

        return $this;
    }

    public function getMilieu4(): ?Joueur
    {
        return $this->milieu4;
    }

    public function setMilieu4(?Joueur $milieu4): self
    {
        $this->milieu4 = $milieu4;

        return $this;
    }

    public function getMilieu5(): ?Joueur
    {
        return $this->milieu5;
    }

    public function setMilieu5(?Joueur $milieu5): self
    {
        $this->milieu5 = $milieu5;

        return $this;
    }

    public function getAttaquant1(): ?Joueur
    {
        return $this->attaquant1;
    }

    public function setAttaquant1(?Joueur $attaquant1): self
    {
        $this->attaquant1 = $attaquant1;

        return $this;
    }

    public function getAttaquant2(): ?Joueur
    {
        return $this->attaquant2;
    }

    public function setAttaquant2(?Joueur $attaquant2): self
    {
        $this->attaquant2 = $attaquant2;

        return $this;
    }

    public function getAttaquant3(): ?Joueur
    {
        return $this->attaquant3;
    }

    public function setAttaquant3(?Joueur $attaquant3): self
    {
        $this->attaquant3 = $attaquant3;

        return $this;
    }

    public function getRemplacant1(): ?Joueur
    {
        return $this->remplacant1;
    }

    public function setRemplacant1(?Joueur $remplacant1): self
    {
        $this->remplacant1 = $remplacant1;

        return $this;
    }

    public function getRemplacant2(): ?Joueur
    {
        return $this->remplacant2;
    }

    public function setRemplacant2(?Joueur $remplacant2): self
    {
        $this->remplacant2 = $remplacant2;

        return $this;
    }

    public function getRemplacant3(): ?Joueur
    {
        return $this->remplacant3;
    }

    public function setRemplacant3(?Joueur $remplacant3): self
    {
        $this->remplacant3 = $remplacant3;

        return $this;
    }

    public function getRemplacant4(): ?Joueur
    {
        return $this->remplacant4;
    }

    public function setRemplacant4(?Joueur $remplacant4): self
    {
        $this->remplacant4 = $remplacant4;

        return $this;
    }

    public function getRemplacant5(): ?Joueur
    {
        return $this->remplacant5;
    }

    public function setRemplacant5(?Joueur $remplacant5): self
    {
        $this->remplacant5 = $remplacant5;

        return $this;
    }

    public function getRemplacant6(): ?Joueur
    {
        return $this->remplacant6;
    }

    public function setRemplacant6(?Joueur $remplacant6): self
    {
        $this->remplacant6 = $remplacant6;

        return $this;
    }

    public function getRemplacant7(): ?Joueur
    {
        return $this->remplacant7;
    }

    public function setRemplacant7(?Joueur $remplacant7): self
    {
        $this->remplacant7 = $remplacant7;

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
}
