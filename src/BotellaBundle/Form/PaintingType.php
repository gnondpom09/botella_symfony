<?php

namespace BotellaBundle\Form;

use BotellaBundle\Repository\SerieRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use BotellaBundle\Form\ImageType;

/**
 *
 */
class PaintingType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class)
            ->add('height',    TextType::class)
            ->add('width',     TextType::class)
            ->add('technic',   TextType::class)
            ->add('series',    EntityType::class, array(
                'class'        => 'BotellaBundle:Serie',
                'choice_label' => 'name',
                'expanded'     => true,
                'multiple'     => true
            ))
            ->add('image',     ImageType::class)
            ->add('save',      SubmitType::class)
            ;

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BotellaBundle\Entity\Painting'
        ));
    }
}
