<?php

namespace innobisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormsAnsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('formID')
            ->add('userID')
            ->add('preg1','choice',array('choices'=>array('Masculino'=>'Masculino','Femenino'=>'Fememino'),'placeholder'=>'Seleccionar'))
            ->add('preg2','choice',array('choices'=>array(1=>'Entre 0-9 años',2=>'Entre 10-19 años',3=>'Entre 20-29 años',4=>'Entre 30-39 años',
                5=>'Entre 40-49 años',6=>'50 o más años'),'placeholder'=>'Seleccionar'))
            ->add('preg3','choice',array('choices'=>array(1=>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',
                8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre'),'placeholder'=>'Seleccionar'))
            ->add('save','submit',array('label'=>'Responder'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'innobisBundle\Entity\FormsAns'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'formsAns';
    }
}
