<?php

namespace AppBundle\Controller;

use AppBundle\Form\SaleType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/test/forms", name="testformspage")
     */
    public function formsAction(Request $request)
    {
        $sale_form    = $this->createForm(SaleType::class);

        // replace this example code with whatever you need
        return $this->render('AppBundle::Test/forms.html.twig', [
            'sale_form' => $sale_form->createView(),
        ]);
    }
}
