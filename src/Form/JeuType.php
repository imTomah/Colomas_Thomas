<?php

namespace App\Form;

use App\Entity\Jeu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class JeuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required'=> true,
                // 'min' => 2,
                // 'minMessage' => 'Veuillez rentrer au minimum 5 caractères',
                'attr' => [
                    'placeholder' => 'Entrez le nom du jeu'
                ]
            ])
            ->add('Photo', TextType::class, [
                'required'=> true,
                'help' => 'Clique droit sur l\'image puis "copier l\'adresse de l\'image"', 
                'label' => 'Lien de l\'image',
                'attr' => [
                    'placeholder' => 'Copier/Coller l\' url de l\'image']
                ])
            ->add('nombreJoueurs', NumberType::class, [
                'required'=> true,
                'label' => 'Nombre de joueurs',
                'attr' => [
                    'placeholder' => 'Indiquer le nombre de joueur maximum'
                ]
            ])
            ->add('duree', NumberType::class, [
                'required'=> true,
                'label' => 'Durée',
                'attr' => [
                    'placeholder' => 'Indiquer le temps de jeu maximum'
                ]
            ])
            ->add('prix', NumberType::class, [
                'required'=> true,
                'label' => 'Prix',
                'attr' => [
                    'placeholder' => 'Indiquer le prix'
                ]
            ])
            ->add('presentation', TextareaType::class, [
                'required'=> true,                
                'label' => 'Présentation',
                'attr' => [
                    'placeholder' => 'Entrez un description du produit'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Jeu::class,
        ]);
    }
}
