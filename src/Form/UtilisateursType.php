<?php

namespace App\Form;

use App\Entity\Utilisateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('cin')
            ->add('mdp')
            ->add('nom')
            ->add('prenom')
            ->add('numtelephone')
            ->add('datenaissance')
            ->add('genre')
            ->add('role')
            ->add('active')
            ->add('adresse')
            ->add('ville')
            ->add('pays')
            ->add('numlicense')
            ->add('datelicense')
            ->add('competences')
            ->add('disponibilite')
            ->add('secteur')
            // ->add('idabonnement')
            // ->add('idconvention')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateurs::class,
        ]);
    }
}
