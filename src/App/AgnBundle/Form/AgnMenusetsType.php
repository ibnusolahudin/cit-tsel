<?php

namespace App\AgnBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AgnMenusetsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('crBy')
            ->add('crDate')
            ->add('ladBy')
            ->add('ladDate')
            ->add('menusetName')
            ->add('menuTypeCode')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AgnBundle\Entity\AgnMenusets'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_agnbundle_agnmenusets';
    }
}
