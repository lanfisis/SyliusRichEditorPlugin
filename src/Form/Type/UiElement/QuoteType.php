<?php

declare(strict_types=1);

namespace Monsieurbiz\SyliusCmsPlugin\Form\Type\UiElement;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class QuoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author', TextType::class, [
                'required' => true,
                'label' => 'monsieurbiz_cmsplugin.ui_element.quote.field.author',
                'constraints' => [
                    new Assert\NotBlank([])
                ],
            ])
            ->add('content', TextareaType::class, [
                'required' => true,
                'label' => 'monsieurbiz_cmsplugin.ui_element.quote.field.content',
                'constraints' => [
                    new Assert\NotBlank([])
                ],
            ])
        ;
    }
}