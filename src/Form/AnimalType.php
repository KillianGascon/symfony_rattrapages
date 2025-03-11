<?php

namespace App\Form;

use App\Entity\Animal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numero_identification')
            ->add('nom')
            ->add('date_de_naissance', null, [
                'widget' => 'single_text',
            ])
            ->add('date_arrivee_zoo', null, [
                'widget' => 'single_text',
            ])
            ->add('date_depart_zoo', null, [
                'widget' => 'single_text',
            ])
            ->add('propriete_zoo')
            ->add('genre')
            ->add('espece')
            ->add('sexe')
            ->add('sterilisation')
            ->add('quarantaine')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
        ]);
    }
}
