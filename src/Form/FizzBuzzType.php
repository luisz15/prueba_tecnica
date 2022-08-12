<?php

namespace App\Form;

use App\Entity\FIZZBUZZ;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints as Assert;

class FizzBuzzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('STARTING_NUMBER', NumberType::class, [
                'constraints' => new Assert\Positive()
                , 'label_format' => 'Starting number'
            ])
            ->add('ENDING_NUMBER', NumberType::class, [
                'constraints' => new Assert\Positive()
                , 'label_format' => 'Ending number'
            ])
            ->add('Ejecutar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FIZZBUZZ::class,
        ]);
    }
}
