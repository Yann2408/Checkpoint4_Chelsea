<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JoueurRepository::class)]
class Joueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $prenom;

    #[ORM\Column(type: 'integer')]
    private $age;

    #[ORM\Column(type: 'string', length: 255)]
    private $nationalite;

    #[ORM\Column(type: 'string', length: 255)]
    private $poste;

    #[ORM\Column(type: 'string', length: 255)]
    private $statut;

    #[ORM\OneToOne(mappedBy: 'gardien', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $gardien;

    #[ORM\OneToOne(mappedBy: 'defenseur1', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $defenseur1;

    #[ORM\OneToOne(mappedBy: 'defenseur2', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $defenseur2;

    #[ORM\OneToOne(mappedBy: 'defenseur3', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $defenseur3;

    #[ORM\OneToOne(mappedBy: 'defenseur4', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $defenseur4;

    #[ORM\OneToOne(mappedBy: 'defenseur5', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $defenseur5;

    #[ORM\OneToOne(mappedBy: 'milieu1', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $milieu1;

    #[ORM\OneToOne(mappedBy: 'milieu2', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $milieu2;

    #[ORM\OneToOne(mappedBy: 'milieu3', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $milieu3;

    #[ORM\OneToOne(mappedBy: 'milieu4', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $milieu4;

    #[ORM\OneToOne(mappedBy: 'milieu5', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $milieu5;

    #[ORM\OneToOne(mappedBy: 'attaquant1', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $attaquant1;

    #[ORM\OneToOne(mappedBy: 'attaquant2', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $attaquant2;

    #[ORM\OneToOne(mappedBy: 'attaquant3', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $attaquant3;

    #[ORM\OneToOne(mappedBy: 'remplacant1', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $remplacant1;

    #[ORM\OneToOne(mappedBy: 'remplacant2', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $remplacant2;

    #[ORM\OneToOne(mappedBy: 'remplacant3', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $remplacant3;

    #[ORM\OneToOne(mappedBy: 'remplacant4', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $remplacant4;

    #[ORM\OneToOne(mappedBy: 'remplacant5', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $remplacant5;

    #[ORM\OneToOne(mappedBy: 'remplacant6', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $remplacant6;

    #[ORM\OneToOne(mappedBy: 'remplacant7', targetEntity: Team::class, cascade: ['persist', 'remove'])]
    private $remplacant7;

    public function getId(): ?int
    {
        return $this->id;
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

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getGardien(): ?Team
    {
        return $this->gardien;
    }

    public function setGardien(?Team $gardien): self
    {
        // unset the owning side of the relation if necessary
        if ($gardien === null && $this->gardien !== null) {
            $this->gardien->setGardien(null);
        }

        // set the owning side of the relation if necessary
        if ($gardien !== null && $gardien->getGardien() !== $this) {
            $gardien->setGardien($this);
        }

        $this->gardien = $gardien;

        return $this;
    }

    public function getDefenseur1(): ?Team
    {
        return $this->defenseur1;
    }

    public function setDefenseur1(?Team $defenseur1): self
    {
        // unset the owning side of the relation if necessary
        if ($defenseur1 === null && $this->defenseur1 !== null) {
            $this->defenseur1->setDefenseur1(null);
        }

        // set the owning side of the relation if necessary
        if ($defenseur1 !== null && $defenseur1->getDefenseur1() !== $this) {
            $defenseur1->setDefenseur1($this);
        }

        $this->defenseur1 = $defenseur1;

        return $this;
    }

    public function getDefenseur2(): ?Team
    {
        return $this->defenseur2;
    }

    public function setDefenseur2(?Team $defenseur2): self
    {
        // unset the owning side of the relation if necessary
        if ($defenseur2 === null && $this->defenseur2 !== null) {
            $this->defenseur2->setDefenseur2(null);
        }

        // set the owning side of the relation if necessary
        if ($defenseur2 !== null && $defenseur2->getDefenseur2() !== $this) {
            $defenseur2->setDefenseur2($this);
        }

        $this->defenseur2 = $defenseur2;

        return $this;
    }

    public function getDefenseur3(): ?Team
    {
        return $this->defenseur3;
    }

    public function setDefenseur3(?Team $defenseur3): self
    {
        // unset the owning side of the relation if necessary
        if ($defenseur3 === null && $this->defenseur3 !== null) {
            $this->defenseur3->setDefenseur3(null);
        }

        // set the owning side of the relation if necessary
        if ($defenseur3 !== null && $defenseur3->getDefenseur3() !== $this) {
            $defenseur3->setDefenseur3($this);
        }

        $this->defenseur3 = $defenseur3;

        return $this;
    }

    public function getDefenseur4(): ?Team
    {
        return $this->defenseur4;
    }

    public function setDefenseur4(?Team $defenseur4): self
    {
        // unset the owning side of the relation if necessary
        if ($defenseur4 === null && $this->defenseur4 !== null) {
            $this->defenseur4->setDefenseur4(null);
        }

        // set the owning side of the relation if necessary
        if ($defenseur4 !== null && $defenseur4->getDefenseur4() !== $this) {
            $defenseur4->setDefenseur4($this);
        }

        $this->defenseur4 = $defenseur4;

        return $this;
    }

    public function getDefenseur5(): ?Team
    {
        return $this->defenseur5;
    }

    public function setDefenseur5(?Team $defenseur5): self
    {
        // unset the owning side of the relation if necessary
        if ($defenseur5 === null && $this->defenseur5 !== null) {
            $this->defenseur5->setDefenseur5(null);
        }

        // set the owning side of the relation if necessary
        if ($defenseur5 !== null && $defenseur5->getDefenseur5() !== $this) {
            $defenseur5->setDefenseur5($this);
        }

        $this->defenseur5 = $defenseur5;

        return $this;
    }

    public function getMilieu1(): ?Team
    {
        return $this->milieu1;
    }

    public function setMilieu1(?Team $milieu1): self
    {
        // unset the owning side of the relation if necessary
        if ($milieu1 === null && $this->milieu1 !== null) {
            $this->milieu1->setMilieu1(null);
        }

        // set the owning side of the relation if necessary
        if ($milieu1 !== null && $milieu1->getMilieu1() !== $this) {
            $milieu1->setMilieu1($this);
        }

        $this->milieu1 = $milieu1;

        return $this;
    }

    public function getMilieu2(): ?Team
    {
        return $this->milieu2;
    }

    public function setMilieu2(?Team $milieu2): self
    {
        // unset the owning side of the relation if necessary
        if ($milieu2 === null && $this->milieu2 !== null) {
            $this->milieu2->setMilieu2(null);
        }

        // set the owning side of the relation if necessary
        if ($milieu2 !== null && $milieu2->getMilieu2() !== $this) {
            $milieu2->setMilieu2($this);
        }

        $this->milieu2 = $milieu2;

        return $this;
    }

    public function getMilieu3(): ?Team
    {
        return $this->milieu3;
    }

    public function setMilieu3(?Team $milieu3): self
    {
        // unset the owning side of the relation if necessary
        if ($milieu3 === null && $this->milieu3 !== null) {
            $this->milieu3->setMilieu3(null);
        }

        // set the owning side of the relation if necessary
        if ($milieu3 !== null && $milieu3->getMilieu3() !== $this) {
            $milieu3->setMilieu3($this);
        }

        $this->milieu3 = $milieu3;

        return $this;
    }

    public function getMilieu4(): ?Team
    {
        return $this->milieu4;
    }

    public function setMilieu4(?Team $milieu4): self
    {
        // unset the owning side of the relation if necessary
        if ($milieu4 === null && $this->milieu4 !== null) {
            $this->milieu4->setMilieu4(null);
        }

        // set the owning side of the relation if necessary
        if ($milieu4 !== null && $milieu4->getMilieu4() !== $this) {
            $milieu4->setMilieu4($this);
        }

        $this->milieu4 = $milieu4;

        return $this;
    }

    public function getMilieu5(): ?Team
    {
        return $this->milieu5;
    }

    public function setMilieu5(?Team $milieu5): self
    {
        // unset the owning side of the relation if necessary
        if ($milieu5 === null && $this->milieu5 !== null) {
            $this->milieu5->setMilieu5(null);
        }

        // set the owning side of the relation if necessary
        if ($milieu5 !== null && $milieu5->getMilieu5() !== $this) {
            $milieu5->setMilieu5($this);
        }

        $this->milieu5 = $milieu5;

        return $this;
    }

    public function getAttaquant1(): ?Team
    {
        return $this->attaquant1;
    }

    public function setAttaquant1(?Team $attaquant1): self
    {
        // unset the owning side of the relation if necessary
        if ($attaquant1 === null && $this->attaquant1 !== null) {
            $this->attaquant1->setAttaquant1(null);
        }

        // set the owning side of the relation if necessary
        if ($attaquant1 !== null && $attaquant1->getAttaquant1() !== $this) {
            $attaquant1->setAttaquant1($this);
        }

        $this->attaquant1 = $attaquant1;

        return $this;
    }

    public function getAttaquant2(): ?Team
    {
        return $this->attaquant2;
    }

    public function setAttaquant2(?Team $attaquant2): self
    {
        // unset the owning side of the relation if necessary
        if ($attaquant2 === null && $this->attaquant2 !== null) {
            $this->attaquant2->setAttaquant2(null);
        }

        // set the owning side of the relation if necessary
        if ($attaquant2 !== null && $attaquant2->getAttaquant2() !== $this) {
            $attaquant2->setAttaquant2($this);
        }

        $this->attaquant2 = $attaquant2;

        return $this;
    }

    public function getAttaquant3(): ?Team
    {
        return $this->attaquant3;
    }

    public function setAttaquant3(?Team $attaquant3): self
    {
        // unset the owning side of the relation if necessary
        if ($attaquant3 === null && $this->attaquant3 !== null) {
            $this->attaquant3->setAttaquant3(null);
        }

        // set the owning side of the relation if necessary
        if ($attaquant3 !== null && $attaquant3->getAttaquant3() !== $this) {
            $attaquant3->setAttaquant3($this);
        }

        $this->attaquant3 = $attaquant3;

        return $this;
    }

    public function getRemplacant1(): ?Team
    {
        return $this->remplacant1;
    }

    public function setRemplacant1(?Team $remplacant1): self
    {
        // unset the owning side of the relation if necessary
        if ($remplacant1 === null && $this->remplacant1 !== null) {
            $this->remplacant1->setRemplacant1(null);
        }

        // set the owning side of the relation if necessary
        if ($remplacant1 !== null && $remplacant1->getRemplacant1() !== $this) {
            $remplacant1->setRemplacant1($this);
        }

        $this->remplacant1 = $remplacant1;

        return $this;
    }

    public function getRemplacant2(): ?Team
    {
        return $this->remplacant2;
    }

    public function setRemplacant2(?Team $remplacant2): self
    {
        // unset the owning side of the relation if necessary
        if ($remplacant2 === null && $this->remplacant2 !== null) {
            $this->remplacant2->setRemplacant2(null);
        }

        // set the owning side of the relation if necessary
        if ($remplacant2 !== null && $remplacant2->getRemplacant2() !== $this) {
            $remplacant2->setRemplacant2($this);
        }

        $this->remplacant2 = $remplacant2;

        return $this;
    }

    public function getRemplacant3(): ?Team
    {
        return $this->remplacant3;
    }

    public function setRemplacant3(?Team $remplacant3): self
    {
        // unset the owning side of the relation if necessary
        if ($remplacant3 === null && $this->remplacant3 !== null) {
            $this->remplacant3->setRemplacant3(null);
        }

        // set the owning side of the relation if necessary
        if ($remplacant3 !== null && $remplacant3->getRemplacant3() !== $this) {
            $remplacant3->setRemplacant3($this);
        }

        $this->remplacant3 = $remplacant3;

        return $this;
    }

    public function getRemplacant4(): ?Team
    {
        return $this->remplacant4;
    }

    public function setRemplacant4(?Team $remplacant4): self
    {
        // unset the owning side of the relation if necessary
        if ($remplacant4 === null && $this->remplacant4 !== null) {
            $this->remplacant4->setRemplacant4(null);
        }

        // set the owning side of the relation if necessary
        if ($remplacant4 !== null && $remplacant4->getRemplacant4() !== $this) {
            $remplacant4->setRemplacant4($this);
        }

        $this->remplacant4 = $remplacant4;

        return $this;
    }

    public function getRemplacant5(): ?Team
    {
        return $this->remplacant5;
    }

    public function setRemplacant5(?Team $remplacant5): self
    {
        // unset the owning side of the relation if necessary
        if ($remplacant5 === null && $this->remplacant5 !== null) {
            $this->remplacant5->setRemplacant5(null);
        }

        // set the owning side of the relation if necessary
        if ($remplacant5 !== null && $remplacant5->getRemplacant5() !== $this) {
            $remplacant5->setRemplacant5($this);
        }

        $this->remplacant5 = $remplacant5;

        return $this;
    }

    public function getRemplacant6(): ?Team
    {
        return $this->remplacant6;
    }

    public function setRemplacant6(?Team $remplacant6): self
    {
        // unset the owning side of the relation if necessary
        if ($remplacant6 === null && $this->remplacant6 !== null) {
            $this->remplacant6->setRemplacant6(null);
        }

        // set the owning side of the relation if necessary
        if ($remplacant6 !== null && $remplacant6->getRemplacant6() !== $this) {
            $remplacant6->setRemplacant6($this);
        }

        $this->remplacant6 = $remplacant6;

        return $this;
    }

    public function getRemplacant7(): ?Team
    {
        return $this->remplacant7;
    }

    public function setRemplacant7(?Team $remplacant7): self
    {
        // unset the owning side of the relation if necessary
        if ($remplacant7 === null && $this->remplacant7 !== null) {
            $this->remplacant7->setRemplacant7(null);
        }

        // set the owning side of the relation if necessary
        if ($remplacant7 !== null && $remplacant7->getRemplacant7() !== $this) {
            $remplacant7->setRemplacant7($this);
        }

        $this->remplacant7 = $remplacant7;

        return $this;
    }
}
