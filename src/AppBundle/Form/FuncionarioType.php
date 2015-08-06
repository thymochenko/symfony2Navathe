<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FuncionarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pnome')
            ->add('mnicial')
            ->add('unome')
            ->add('cpf')
            ->add('datanasc')
            ->add('endereco')
            ->add('sexo')
            ->add('salario')
            ->add('cpfSupervisor')
            ->add('dnr')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Funcionario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_funcionario';
    }
}
