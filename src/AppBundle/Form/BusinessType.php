<?php

namespace AppBundle\Form;

use AppBundle\Util\Helper\DropdownHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BusinessType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $helper = new DropdownHelper();

        $builder
            ->add(
                'id',
                HiddenType::class
            )
            ->add('name', TextType::class, [
                'label'    => 'Name',
                'required' => true,
            ])
            ->add('details', TextareaType::class, [
                'label'    => 'Details',
                'required' => false,
            ])
            ->add('natureOfBusiness', ChoiceType::class, [
                'label'       => 'Nature of business',
                'required'    => true,
                'placeholder' => 'Select the nature of business',
                'choices'     => array_flip($helper->getIndustries()),
            ])
            ->add('startDate', DateType::class, [
                'label'       => 'Business Start Date',
                'widget'      => 'choice',
                'required'    => true,
                'format'      => 'dd MMMM yyyy',
                'years'       => range(1950, date('Y') + 10),
                'placeholder' => [
                    'year'  => 'Year',
                    'month' => 'Month',
                    'day'   => 'Day',
                ],
            ])
            ->add('address', TextType::class, [
                'label'    => 'Address',
                'required' => true,
            ])
            ->add('city', TextType::class, [
                'label'    => 'City',
                'required' => true,
            ])
            ->add('country', CountryType::class, [
                'label'       => 'Country',
                'required'    => true,
                'multiple'    => false,
                'placeholder' => 'Select a country',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Business',
        ]);
    }
}
