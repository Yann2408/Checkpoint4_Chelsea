<?php

namespace App\Form;

use App\Entity\Team;
use App\Entity\Joueur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('gardien', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                // 'placeholder' => 'Choose an option',
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('defenseur1', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('defenseur2', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('defenseur3', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('defenseur4', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('defenseur5', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('milieu1', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('milieu2', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('milieu3', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('milieu4', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('milieu5', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('attaquant1', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('attaquant2', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('attaquant3', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('remplacant1', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('remplacant2', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('remplacant3', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('remplacant4', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('remplacant5', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('remplacant6', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
            ->add('remplacant7', EntityType::class, [
                'class' => Joueur::class,
                'required' => false,
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,
                'by_reference' => false,])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
        ]);
    }
}
