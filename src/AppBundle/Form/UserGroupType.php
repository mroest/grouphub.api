<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserGroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $notBlank = [ "constraints" => new NotBlank() ];

        $builder
            ->add('name', 'text', $notBlank)
            ->add('description', 'text')
            ->add('type', 'text', $notBlank)
            ->add('reference', 'text', $notBlank)
            ->add('ownerId', 'integer', $notBlank)
            ->add('parent', 'integer', $notBlank);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'         => 'AppBundle\Entity\UserGroup',
            'intention'          => 'group',
            'translation_domain' => 'AppBundle'
        ));
    }

    public function getName()
    {
        return 'group';
    }
}
