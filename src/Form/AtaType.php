<?php

namespace App\Form;

use App\Entity\Ata;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

class AtaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id', HiddenType::class)
            ->add('infantil', TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Insira a lista de atletas do infantil...',
                    'rows' => 10
                ],
            ])
            ->add('juvenil', TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Insira a lista de atletas do juvenil...',
                    'rows' => 10
                ],
            ])
            ->add('data', HiddenType::class, [
                'data' => \date('Y-m-d')
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ata::class,
        ]);
    }
}
