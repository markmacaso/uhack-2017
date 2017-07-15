<?php

namespace AppBundle\Form;

use AppBundle\Util\Helper\DropdownHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FinancialStatementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add(
                'id',
                HiddenType::class
            )
            ->add('startDate', DateType::class, [
                'label'       => 'Financial Statement Start Date',
                'widget'      => 'choice',
                'required'    => true,
                'format'      => 'dd MMMM yyyy',
                'years'       => range(1950, date('Y') + 10),
                'placeholder' => [
                    'year'  => 'Year',
                    'month' => 'Month',
                    'day'   => 'Day',
                ],
            ])->add('endDate', DateType::class, [
                'label'       => 'Financial Statement End Date',
                'widget'      => 'choice',
                'required'    => true,
                'format'      => 'dd MMMM yyyy',
                'years'       => range(1950, date('Y') + 10),
                'placeholder' => [
                    'year'  => 'Year',
                    'month' => 'Month',
                    'day'   => 'Day',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\FinancialStatement',
        ]);
    }
}
