<?php

namespace App\DataFixtures;

use App\Entity\Team;
use App\DataFixtures\JoueurFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TeamFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $team1 = new Team();

        $team1->setNom('4-3-3 tactic');
        $team1->setGardien($this->getReference('player2'));
        $team1->setDefenseur1($this->getReference('player4'));
        $team1->setDefenseur2($this->getReference('player12'));
        $team1->setDefenseur4($this->getReference('player10'));
        $team1->setDefenseur5($this->getReference('player9'));
        $team1->setMilieu2($this->getReference('player20'));
        $team1->setMilieu3($this->getReference('player16'));
        $team1->setMilieu4($this->getReference('player17'));
        $team1->setAttaquant1($this->getReference('player25'));
        $team1->setAttaquant2($this->getReference('player24'));
        $team1->setAttaquant3($this->getReference('player22'));
        $team1->setRemplacant1($this->getReference('player1'));
        $team1->setRemplacant2($this->getReference('player5'));
        $team1->setRemplacant3($this->getReference('player7'));
        $team1->setRemplacant4($this->getReference('player18'));
        $team1->setRemplacant5($this->getReference('player15'));
        $team1->setRemplacant6($this->getReference('player23'));
        $team1->setRemplacant7($this->getReference('player14'));

        $manager->persist($team1);

        $manager->flush();
    }

    public function getDependencies()
    {
        // On retourne toute la classe de fixtures dont TeamFixtures dépend
        return [
          JoueurFixtures::class,
        ];
    }
}
