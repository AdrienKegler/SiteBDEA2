<?php

namespace SiteBDE\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GalleryForm extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
        ->add('file', 'file')
    ;
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => '...\EventBundle\Entity\Photos'
    ));
  }

  public function getName()
  {
    return 'Eventbundle_Photo';
  }
}