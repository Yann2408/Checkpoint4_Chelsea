<?php

namespace App\DataFixtures;

use App\Entity\Joueur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class JoueurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $player1 = new Joueur ();

$player1->setNom('Arrizabalaga');
$player1->setPrenom('Kepa');
$player1->setAge('27');
$player1->setNationalite('Espagne');
$player1->setPoste('Gardien');
$player1->setStatut('Remplacant');
$this->addReference('player1', $player1);

$manager->persist($player1);

$player2 = new Joueur ();

$player2->setNom('Mendy');
$player2->setPrenom('Edouard');
$player2->setAge('29');
$player2->setNationalite('Sénégal');
$player2->setPoste('Gardien');
$player2->setStatut('Titulaire');
$this->addReference('player2', $player2);

$manager->persist($player2);

$player3 = new Joueur ();

$player3->setNom('Bettinelli');
$player3->setPrenom('Marcus');
$player3->setAge('29');
$player3->setNationalite('Angleterre');
$player3->setPoste('Gardien');
$player3->setStatut('Reserviste');
$this->addReference('player3', $player3);

$manager->persist($player3);

$player4 = new Joueur ();

$player4->setNom('Alonso');
$player4->setPrenom('Marcos');
$player4->setAge('31');
$player4->setNationalite('Espagne');
$player4->setPoste('Défenseur');
$player4->setStatut('Titulaire');
$this->addReference('player4', $player4);

$manager->persist($player4);

$player5 = new Joueur ();

$player5->setNom('Azpilicueta');
$player5->setPrenom('Cesar');
$player5->setAge('32');
$player5->setNationalite('Espagne');
$player5->setPoste('Défenseur');
$player5->setStatut('Remplacant');
$this->addReference('player5', $player5);

$manager->persist($player5);

$player6 = new Joueur ();

$player6->setNom('Chalobah');
$player6->setPrenom('Trevoh');
$player6->setAge('22');
$player6->setNationalite('Angleterre');
$player6->setPoste('Défenseur');
$player6->setStatut('Remplacant');
$this->addReference('player6', $player6);

$manager->persist($player6);

$player7 = new Joueur ();

$player7->setNom('Chilwell');
$player7->setPrenom('Ben');
$player7->setAge('25');
$player7->setNationalite('Angleterre');
$player7->setPoste('Défenseur');
$player7->setStatut('Remplacant');
$this->addReference('player7', $player7);

$manager->persist($player7);

$player8 = new Joueur ();

$player8->setNom('Christensen');
$player8->setPrenom('Andreas');
$player8->setAge('25');
$player8->setNationalite('Danemark');
$player8->setPoste('Défenseur');
$player8->setStatut('Remplacant');
$this->addReference('player8', $player8);

$manager->persist($player8);

$player9 = new Joueur ();

$player9->setNom('James');
$player9->setPrenom('Reece');
$player9->setAge('22');
$player9->setNationalite('Angleterre');
$player9->setPoste('Défenseur');
$player9->setStatut('Titulaire');
$this->addReference('player9', $player9);

$manager->persist($player9);

$player10 = new Joueur ();

$player10->setNom('Rudiger');
$player10->setPrenom('Antonio');
$player10->setAge('28');
$player10->setNationalite('Allemagne');
$player10->setPoste('Défenseur');
$player10->setStatut('Titulaire');
$this->addReference('player10', $player10);

$manager->persist($player10);

$player11 = new Joueur ();

$player11->setNom('Sarr');
$player11->setPrenom('Malang');
$player11->setAge('23');
$player11->setNationalite('France');
$player11->setPoste('Défenseur');
$player11->setStatut('Remplacant');
$this->addReference('player11', $player11);

$manager->persist($player11);

$player12 = new Joueur ();

$player12->setNom('Silva');
$player12->setPrenom('Thiago');
$player12->setAge('37');
$player12->setNationalite('Bresil');
$player12->setPoste('Défenseur');
$player12->setStatut('Titulaire');
$this->addReference('player12', $player12);

$manager->persist($player12);

$player13 = new Joueur ();

$player13->setNom('Barkley');
$player13->setPrenom('Ross');
$player13->setAge('28');
$player13->setNationalite('Angleterre');
$player13->setPoste('Milieu');
$player13->setStatut('Reserviste');
$this->addReference('player13', $player13);

$manager->persist($player13);

$player14 = new Joueur ();

$player14->setNom('Havertz');
$player14->setPrenom('Kai');
$player14->setAge('22');
$player14->setNationalite('Allemagne');
$player14->setPoste('Attaquant');
$player14->setStatut('Titulaire');
$this->addReference('player14', $player14);

$manager->persist($player14);

$player15 = new Joueur ();

$player15->setNom('Hudson-Odoi');
$player15->setPrenom('Callum');
$player15->setAge('21');
$player15->setNationalite('Angleterre');
$player15->setPoste('Milieu');
$player15->setStatut('Remplacant');
$this->addReference('player15', $player15);

$manager->persist($player15);

$player16 = new Joueur ();

$player16->setNom('Jorginho');
$player16->setPrenom('');
$player16->setAge('30');
$player16->setNationalite('Italie');
$player16->setPoste('Milieu');
$player16->setStatut('Titulaire');
$this->addReference('player16', $player16);

$manager->persist($player16);

$player17 = new Joueur ();

$player17->setNom('Kante');
$player17->setPrenom('N\'Golo');
$player17->setAge('30');
$player17->setNationalite('France');
$player17->setPoste('Milieu');
$player17->setStatut('Titulaire');
$this->addReference('player17', $player17);

$manager->persist($player17);

$player18 = new Joueur ();

$player18->setNom('Kovacic');
$player18->setPrenom('Mateo');
$player18->setAge('27');
$player18->setNationalite('Croatie');
$player18->setPoste('Milieu');
$player18->setStatut('Remplacant');
$this->addReference('player18', $player18);

$manager->persist($player18);

$player19 = new Joueur ();

$player19->setNom('RLoftus-Cheek');
$player19->setPrenom('Ruben');
$player19->setAge('26');
$player19->setNationalite('Angleterre');
$player19->setPoste('Milieu');
$player19->setStatut('Remplacant');
$this->addReference('player19', $player19);

$manager->persist($player19);

$player20 = new Joueur ();

$player20->setNom('Mount');
$player20->setPrenom('Mason');
$player20->setAge('23');
$player20->setNationalite('Angleterre');
$player20->setPoste('Milieu');
$player20->setStatut('Titulaire');
$this->addReference('player20', $player20);

$manager->persist($player20);

$player21 = new Joueur ();

$player21->setNom('Niguez');
$player21->setPrenom('Saul');
$player21->setAge('27');
$player21->setNationalite('Espagne');
$player21->setPoste('Milieu');
$player21->setStatut('Reserviste');
$this->addReference('player21', $player21);

$manager->persist($player21);

$player22 = new Joueur ();

$player22->setNom('Pulisic');
$player22->setPrenom('Christian');
$player22->setAge('23');
$player22->setNationalite('USA');
$player22->setPoste('Attaquant');
$player22->setStatut('Titulaire');
$this->addReference('player22', $player22);

$manager->persist($player22);

$player23 = new Joueur ();

$player23->setNom('Ziyech');
$player23->setPrenom('Hakim');
$player23->setAge('28');
$player23->setNationalite('Maroc');
$player23->setPoste('Milieu');
$player23->setStatut('Remplacant');
$this->addReference('player23', $player23);

$manager->persist($player23);

$player24 = new Joueur ();

$player24->setNom('Lukaku');
$player24->setPrenom('Romelu');
$player24->setAge('28');
$player24->setNationalite('Belgique');
$player24->setPoste('Attaquant');
$player24->setStatut('Titulaire');
$this->addReference('player24', $player24);

$manager->persist($player24);

$player25 = new Joueur ();

$player25->setNom('Werner');
$player25->setPrenom('Timo');
$player25->setAge('25');
$player25->setNationalite('Allemagne');
$player25->setPoste('Attaquant');
$player25->setStatut('Remplacant');
$this->addReference('player25', $player25);

$manager->persist($player25);

$manager->flush();
    }
}
