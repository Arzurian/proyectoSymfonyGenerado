<?php

namespace App\Form;

use App\Entity\Departamentos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DepartamentosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codDepartamento')
            ->add('descDepartamento')
            ->add('volumenNegocio')
            ->add('fechaCreacion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Departamentos::class,
        ]);
    }
}
