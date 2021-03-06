<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('startTime')
            ->add('startTime', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('endTime', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('type','choice', array(
                    'choices' => array(
                        'Option'   => 'Couleur',
                        'Checkbox' => 'Image'
                    ),
                    'required' => true
                ))
            ->add('content')
            ->add('comment')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Event'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_event';
    }
}
