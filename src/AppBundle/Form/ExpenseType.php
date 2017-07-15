<?php

namespace AppBundle\Form;

use AppBundle\Util\Helper\DropdownHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpenseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $helper = new DropdownHelper();

        $builder
            ->add(
                'id',
                HiddenType::class
            )
            ->add('amount', TextType::class, [
                'label'    => 'Amount',
                'required' => true,
            ])
            ->add('details', TextareaType::class, [
                'label'    => 'Details',
                'required' => false,
            ])
            ->add('typeOfExpense', ChoiceType::class, [
                'label'       => 'Type Of Expense',
                'required'    => true,
                'placeholder' => 'Select the type of expense',
                'choices'     => array_flip($helper->getExpenseTypes()),
            ])
            ->add('dateOfExpense', DateType::class, [
                'label'       => 'Date Of Expense',
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
            'data_class' => 'AppBundle\Entity\Expense',
        ]);
    }
}
