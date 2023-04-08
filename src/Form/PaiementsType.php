<?php

namespace App\Form;

use App\Entity\Paiements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PaiementsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
         //   ->add('date')
         ->add('mode', ChoiceType::class, [
            'choices' => [
                'carte visa' => 'carte visa',
                'carte e-dinar' => 'carte e-dinar',
                'point merci' => 'point merci',
            ],
            // 'placeholder' => 'Sélectionner votre option de paiements',
        ])
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
