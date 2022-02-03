<?php

namespace App\DataFixtures;

use App\Entity\Atelier;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AtelierFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $atelier1 = new Atelier();

$atelier1->setNom('Video session');
$atelier1->setDescription('');
$atelier1->setCategorie('Tactical');
$this->addReference('atelier1', $atelier1);

$manager->persist($atelier1);

$atelier2 = new atelier();

$atelier2->setNom('Defensive');
$atelier2->setDescription('');
$atelier2->setCategorie('Tactique');
$this->addReference('atelier2', $atelier2);

$manager->persist($atelier2);

$atelier3 = new Atelier();

$atelier3->setNom('Récupération');
$atelier3->setDescription('');
$atelier3->setCategorie('Physique');
$this->addReference('atelier3', $atelier3);

$manager->persist($atelier3);

$atelier4 = new Atelier();

$atelier4->setNom('Endurance');
$atelier4->setDescription('Courir encore et encore et encore et encore et encore et 
encore et encore et encore et encore et encore et encore et encore et encore et encore et encore et encore');
$atelier4->setCategorie('Physique');
$this->addReference('atelier4', $atelier4);

$manager->persist($atelier4);

$atelier5 = new Atelier();

$atelier5->setNom('Vivacité');
$atelier5->setDescription('');
$atelier5->setCategorie('Physique');
$this->addReference('atelier5', $atelier5);

$manager->persist($atelier5);

$atelier6 = new Atelier();

$atelier6->setNom('Scéance vidéo');
$atelier6->setDescription('Mettre une cassette et éteindre la lumière');
$atelier6->setCategorie('Tactique');
$this->addReference('atelier6', $atelier6);

$manager->persist($atelier6);

$atelier7 = new Atelier();

$atelier7->setNom('Frappe au but');
$atelier7->setDescription('');
$atelier7->setCategorie('Technique');
$this->addReference('atelier7', $atelier7);

$manager->persist($atelier7);

$atelier8 = new Atelier();

$atelier8->setNom('Passe');
$atelier8->setDescription('');
$atelier8->setCategorie('Technique');
$this->addReference('atelier8', $atelier8);

$manager->persist($atelier8);

$atelier9 = new Atelier();

$atelier9->setNom('Coups de pied arrétés');
$atelier9->setDescription('');
$atelier9->setCategorie('Technique');
$this->addReference('atelier9', $atelier9);

$manager->persist($atelier9);

$atelier10 = new Atelier();

$atelier10->setNom('Gardien');
$atelier10->setDescription('');
$atelier10->setCategorie('Technique');
$this->addReference('atelier10', $atelier10);

$manager->persist($atelier10);

$atelier11 = new Atelier();

$atelier11->setNom('Conservation du ballon');
$atelier11->setDescription('');
$atelier11->setCategorie('Technique');
$this->addReference('atelier11', $atelier11);

$manager->persist($atelier11);

$manager->flush();
    }
}
