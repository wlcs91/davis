<?php

namespace App\Form;

use App\Entity\Aluno;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class AlunoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nome_aluno')
            ->add('nome_responsavel')
            ->add('data_nascimento', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'form-control', 'style' => 'line-height: 20px;'), 'label' => "Data de Nascimento",
            ))

            ->add('endereco')
            ->add('contato')
            ->add('rg')
            ->add('cpf')
            ->add('peso')
            ->add('altura')
            ->add('tipo_sanguineo', ChoiceType::class, [
                'choices' => [
                    'A+' => 'A+',
                    'A-' => 'A-',
                    'B+' => 'B+',
                    'B-' => 'B-',
                    'AB+' => 'AB+',
                    'AB-' => 'AB-',
                    'O+' => 'O+',
                    'O-' => 'O-',
                ],
                'label' => 'Selecione uma opção',
                'placeholder' => 'Selecione uma opção',
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('alergia')
            ->add('medicamentos')
            ->add('numero_pe', ChoiceType::class, [
                'choices' => [
                    '20' => '20',
                    '21' => '21',
                    '22' => '22',
                    '23' => '23',
                    '24' => '24',
                    '25' => '25',
                    '26' => '26',
                    '27' => '27',
                    '28' => '28',
                    '29' => '29',
                    '30' => '30',
                    '31' => '31',
                    '32' => '32',
                    '33' => '33',
                    '34' => '34',
                    '35' => '35',
                    '36' => '36',
                    '37' => '37',
                    '38' => '38',
                    '39' => '39',
                    '40' => '40',
                    '41' => '41',
                    '42' => '42',
                    '43' => '43',
                    '44' => '44',
                    '45' => '45',
                    '46' => '46',
                    '47' => '47',
                    '48' => '48',
                    '49' => '49',
                ],
                'label' => 'Selecione uma opção',
                'placeholder' => 'Selecione uma opção',
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('pe_dominante', ChoiceType::class, [
                'choices' => [
                    'Direito' => 'direito',
                    'Esquerdo' => 'esquerdo',
                    'Ambidestro' => 'ambidestro',
                ],
                'label' => 'Selecione uma opção',
                'placeholder' => 'Selecione uma opção',
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('obs')
            ->add('image', type: FileType::class,
                options: [
                    'data_class' => null,
                    'required' => false,
                    'mapped' => false,
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Aluno::class,
        ]);
    }
}
