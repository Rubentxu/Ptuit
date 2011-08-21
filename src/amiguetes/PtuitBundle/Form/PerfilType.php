<?php

namespace amiguetes\PtuitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PerfilType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('telefono')
            ->add('fechaNacimiento')
            ->add('intereses')
            ->add('biografia')
            ->add('localizacion')
            ->add('web')
            ->add('privacidad')
            ->add('usuario')
        ;
    }

    public function getName()
    {
        return 'amiguetes_ptuitbundle_perfiltype';
    }
}
