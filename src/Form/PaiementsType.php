<?php

namespace App\Form;

use App\Entity\Paiements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaiementsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
         //   ->add('date')
            ->add('mode')
            ->add('montant')
          //  ->add('archivee')
            ->add('idclient')
            ->add('idcommande')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paiements::class,
        ]);
    }
}
