<?php

namespace App\Form;

use App\Entity\Enseignant;
use App\Entity\Soutenance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SoutenanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_soutenance')
            ->add('note',null,['attr' => ['maxlength' => 2,'max'=>20,'min'=>0]])
            ->add('numJury',EntityType::class,array('class'=>Enseignant::class,'choice_label'=>'prenom','choice_value'=>'id'))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Soutenance::class,
        ]);
    }
}
