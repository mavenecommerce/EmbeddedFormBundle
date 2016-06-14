<?php

namespace Maven\Bundle\EmbeddedFormBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class EmbeddedFormType
 *
 * @package Maven\Bundle\EmbeddedFormBundle\Form\Type
 */
class EmbeddedFormType extends \Oro\Bundle\EmbeddedFormBundle\Form\Type\EmbeddedFormType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', ['label' => 'oro.embeddedform.title.label'])
            ->add('formType', 'oro_available_embedded_forms', ['label' => 'oro.embeddedform.form_type.label'])
            ->add(
                'css',
                'textarea',
                [
                    'label'   => 'oro.embeddedform.css.label',
                    'tooltip' => 'oro.embeddedform.css.description',
                ]
            )
            ->add(
                'external_css',
                'textarea',
                [
                    'required' => false,
                ]
            )
            ->add(
                'external_js',
                'textarea',
                [
                    'required' => false,
                ]
            )
            ->add(
                'successMessage',
                'textarea',
                [
                    'label'   => 'oro.embeddedform.success_message.label',
                    'tooltip' => 'oro.embeddedform.success_message.description',
                ]
            );
    }
}
