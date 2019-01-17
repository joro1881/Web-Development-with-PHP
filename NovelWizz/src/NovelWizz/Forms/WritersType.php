<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 14.01.19
 * Time: 18:49
 */

namespace NovelWizz\Forms;

use NovelWizz\Entity\Writers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WritersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("email", TextType::class)
            ->add("password", PasswordType::class)
            ->add("fullName", TextType::class)
            ->add("nickname", TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Writers::class,
        ));
    }
}