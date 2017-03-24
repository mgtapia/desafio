<?php

namespace innobisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('author')
            ->add('preg1')
            ->add('preg2')
            ->add('preg3')
            ->add('save','submit', array('label'=>'Guardar'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'innobisBundle\Entity\Forms'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'forms';
    }
}
