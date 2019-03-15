<?php

namespace BotellaBundle\Form;

use BotellaBundle\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use BotellaBundle\Form\ImageType;


class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('date',      DateTimeType::class)
        ->add('title',     TextType::class)
        ->add('author',    TextType::class)
        ->add('content',   TextareaType::class)
        ->add('image',     ImageType::class)
        ->add('categories', EntityType::class, array(
            'class'        => 'BotellaBundle:Category',
            'choice_label' => 'name',
            'expanded'     => true,
            'multiple'     => true
        ))
        ->add('save',      SubmitType::class);

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,    // 1er argument : L'évènement qui nous intéresse : ici, PRE_SET_DATA
            function(FormEvent $event) { // 2e argument : La fonction à exécuter lorsque l'évènement est déclenché

                $article = $event->getData();

                if (null === $article) {
                    return; // On sort de la fonction sans rien faire lorsque $advert vaut null
                }

                if (!$article->getPublished() || null === $article->getId()) {
                    // Alors on ajoute le champ published
                    $event->getForm()->add('published', CheckboxType::class, array('required' => false));
                } else {
                    // Sinon, on le supprime
                    $event->getForm()->remove('published');
                }
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BotellaBundle\Entity\Article'
        ));
    }
}
