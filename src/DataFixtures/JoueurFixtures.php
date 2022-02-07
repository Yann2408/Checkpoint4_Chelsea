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
        $player1->setNationalite('Spain');
        $player1->setPoste('Goalkeeper');
        $player1->setStatut('Substitute');
        $this->addReference('player1', $player1);

        $manager->persist($player1);

        $player2 = new Joueur ();

        $player2->setNom('Mendy');
        $player2->setPrenom('Edouard');
        $player2->setAge('29');
        $player2->setNationalite('Sénégal');
        $player2->setPoste('Goalkeeper');
        $player2->setStatut('Titular');
        $this->addReference('player2', $player2);

        $manager->persist($player2);

        $player3 = new Joueur ();

        $player3->setNom('Bettinelli');
        $player3->setPrenom('Marcus');
        $player3->setAge('29');
        $player3->setNationalite('England');
        $player3->setPoste('Goalkeeper');
        $player3->setStatut('Reservist');
        $this->addReference('player3', $player3);

        $manager->persist($player3);

        $player4 = new Joueur ();

        $player4->setNom('Alonso');
        $player4->setPrenom('Marcos');
        $player4->setAge('31');
        $player4->setNationalite('Spain');
        $player4->setPoste('Defender');
        $player4->setStatut('Titular');
        $this->addReference('player4', $player4);

        $manager->persist($player4);

        $player5 = new Joueur ();

        $player5->setNom('Azpilicueta');
        $player5->setPrenom('Cesar');
        $player5->setAge('32');
        $player5->setNationalite('Spain');
        $player5->setPoste('Defender');
        $player5->setStatut('Substitute');
        $this->addReference('player5', $player5);

        $manager->persist($player5);

        $player6 = new Joueur ();

        $player6->setNom('Chalobah');
        $player6->setPrenom('Trevoh');
        $player6->setAge('22');
        $player6->setNationalite('England');
        $player6->setPoste('Defender');
        $player6->setStatut('Substitute');
        $this->addReference('player6', $player6);

        $manager->persist($player6);

        $player7 = new Joueur ();

        $player7->setNom('Chilwell');
        $player7->setPrenom('Ben');
        $player7->setAge('25');
        $player7->setNationalite('England');
        $player7->setPoste('Defender');
        $player7->setStatut('Substitute');
        $this->addReference('player7', $player7);

        $manager->persist($player7);

        $player8 = new Joueur ();

        $player8->setNom('Christensen');
        $player8->setPrenom('Andreas');
        $player8->setAge('25');
        $player8->setNationalite('Denmark');
        $player8->setPoste('Defender');
        $player8->setStatut('Substitute');
        $this->addReference('player8', $player8);

        $manager->persist($player8);

        $player9 = new Joueur ();

        $player9->setNom('James');
        $player9->setPrenom('Reece');
        $player9->setAge('22');
        $player9->setNationalite('England');
        $player9->setPoste('Defender');
        $player9->setStatut('Titular');
        $this->addReference('player9', $player9);

        $manager->persist($player9);

        $player10 = new Joueur ();

        $player10->setNom('Rudiger');
        $player10->setPrenom('Antonio');
        $player10->setAge('28');
        $player10->setNationalite('Germany');
        $player10->setPoste('Defender');
        $player10->setStatut('Titular');
        $this->addReference('player10', $player10);

        $manager->persist($player10);

        $player11 = new Joueur ();

        $player11->setNom('Sarr');
        $player11->setPrenom('Malang');
        $player11->setAge('23');
        $player11->setNationalite('France');
        $player11->setPoste('Defender');
        $player11->setStatut('Substitute');
        $this->addReference('player11', $player11);

        $manager->persist($player11);

        $player12 = new Joueur ();

        $player12->setNom('Silva');
        $player12->setPrenom('Thiago');
        $player12->setAge('37');
        $player12->setNationalite('Brazil');
        $player12->setPoste('Defender');
        $player12->setStatut('Titular');
        $this->addReference('player12', $player12);

        $manager->persist($player12);

        $player13 = new Joueur ();

        $player13->setNom('Barkley');
        $player13->setPrenom('Ross');
        $player13->setAge('28');
        $player13->setNationalite('England');
        $player13->setPoste('Midfielder');
        $player13->setStatut('Reservist');
        $this->addReference('player13', $player13);

        $manager->persist($player13);

        $player14 = new Joueur ();

        $player14->setNom('Havertz');
        $player14->setPrenom('Kai');
        $player14->setAge('22');
        $player14->setNationalite('Germany');
        $player14->setPoste('Midfielder/Stricker');
        $player14->setStatut('Titular');
        $this->addReference('player14', $player14);

        $manager->persist($player14);

        $player15 = new Joueur ();

        $player15->setNom('Hudson-Odoi');
        $player15->setPrenom('Callum');
        $player15->setAge('21');
        $player15->setNationalite('England');
        $player15->setPoste('Midfielder/Stricker');
        $player15->setStatut('Substitute');
        $this->addReference('player15', $player15);

        $manager->persist($player15);

        $player16 = new Joueur ();

        $player16->setNom('Jorginho');
        $player16->setPrenom('');
        $player16->setAge('30');
        $player16->setNationalite('Italy');
        $player16->setPoste('Midfielder');
        $player16->setStatut('Titular');
        $this->addReference('player16', $player16);

        $manager->persist($player16);

        $player17 = new Joueur ();

        $player17->setNom('Kante');
        $player17->setPrenom('N\'Golo');
        $player17->setAge('30');
        $player17->setNationalite('France');
        $player17->setPoste('Midfielder');
        $player17->setStatut('Titular');
        $this->addReference('player17', $player17);

        $manager->persist($player17);

        $player18 = new Joueur ();

        $player18->setNom('Kovacic');
        $player18->setPrenom('Mateo');
        $player18->setAge('27');
        $player18->setNationalite('Croatia');
        $player18->setPoste('Midfielder');
        $player18->setStatut('Substitute');
        $this->addReference('player18', $player18);

        $manager->persist($player18);

        $player19 = new Joueur ();

        $player19->setNom('RLoftus-Cheek');
        $player19->setPrenom('Ruben');
        $player19->setAge('26');
        $player19->setNationalite('England');
        $player19->setPoste('Midfielder');
        $player19->setStatut('Substitute');
        $this->addReference('player19', $player19);

        $manager->persist($player19);

        $player20 = new Joueur ();

        $player20->setNom('Mount');
        $player20->setPrenom('Mason');
        $player20->setAge('23');
        $player20->setNationalite('England');
        $player20->setPoste('Midfielder');
        $player20->setStatut('Titular');
        $this->addReference('player20', $player20);

        $manager->persist($player20);

        $player21 = new Joueur ();

        $player21->setNom('Niguez');
        $player21->setPrenom('Saul');
        $player21->setAge('27');
        $player21->setNationalite('Spain');
        $player21->setPoste('Midfielder');
        $player21->setStatut('Reservist');
        $this->addReference('player21', $player21);

        $manager->persist($player21);

        $player22 = new Joueur ();

        $player22->setNom('Pulisic');
        $player22->setPrenom('Christian');
        $player22->setAge('23');
        $player22->setNationalite('USA');
        $player22->setPoste('Midfielder/Stricker');
        $player22->setStatut('Titular');
        $this->addReference('player22', $player22);

        $manager->persist($player22);

        $player23 = new Joueur ();

        $player23->setNom('Ziyech');
        $player23->setPrenom('Hakim');
        $player23->setAge('28');
        $player23->setNationalite('Morocco');
        $player23->setPoste('Midfielder/Stricker');
        $player23->setStatut('Substitute');
        $this->addReference('player23', $player23);

        $manager->persist($player23);

        $player24 = new Joueur ();

        $player24->setNom('Lukaku');
        $player24->setPrenom('Romelu');
        $player24->setAge('28');
        $player24->setNationalite('Belgium');
        $player24->setPoste('Stricker');
        $player24->setStatut('Titular');
        $this->addReference('player24', $player24);

        $manager->persist($player24);

        $player25 = new Joueur ();

        $player25->setNom('Werner');
        $player25->setPrenom('Timo');
        $player25->setAge('25');
        $player25->setNationalite('Germany');
        $player25->setPoste('Stricker');
        $player25->setStatut('Substitute');
        $this->addReference('player25', $player25);

        $manager->persist($player25);

        $manager->flush();
    }
}
