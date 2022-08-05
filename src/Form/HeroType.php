<?php

namespace App\Form;

use App\Entity\Hero;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class HeroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', TextType::class, [
            'attr' => [
                'placeholder' => 'Nom de votre héro'
            ]
        ])
        ->add(
            'tribute', 
            ChoiceType::class, 
            [
                'label_html' => true,
                'choices' => [
                    '<img src="/./build/img/icons/fire.png"/>' => 'feu',
                    '<img src="/./build/img/icons/water.png"/>' => 'eau',
                    '<img src="/./build/img/icons/earth.png"/>' => 'terre',
                    '<img src="/./build/img/icons/air.png"/>' => 'air'
                ],
            'expanded' => true,
            'multiple'=> false,
            ]
        );
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hero::class,
        ]);
    }
}
