<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Business;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/business")
 */
class BusinessController extends Controller
{
    /**
     * @Route("/information", name="business-info")
     */
    public function informationAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::Business/information.html.twig', [
            'page_title' => 'Business Information'
        ]);
    }
}
