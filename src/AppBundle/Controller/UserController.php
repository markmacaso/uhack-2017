<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Form\User\OccupationType;
use AppBundle\Form\User\SpouseType;
use AppBundle\Form\User\Spouse\OccupationType as SpouseOccupationType;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/user")
 */
class UserController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:User:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/1/profile")
     */
    public function viewAction()
    {
        return $this->render('AppBundle:User:view.html.twig', array(
            'page_title' => 'Personal Profile',
        ));
    }

    /**
     * @Route("/2/profile")
     */
    public function view2Action()
    {
        return $this->render('AppBundle:User:view2.html.twig', array(
            'page_title' => 'Personal Profile',
        ));

    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        $user_form  = $this->createForm(UserType::class);
        $occupation_form = $this->createForm(OccupationType::class);
        $spouse_form = $this->createForm(SpouseType::class);
        $spouse_occupation_form = $this->createForm(SpouseOccupationType::class);
        return $this->render('AppBundle:User:edit.html.twig', array(
            'page_title' => "Personal Profile Form",
            'user_form' => $user_form->createView(),
            'occupation_form' => $occupation_form->createView(),
            'spouse_form'   => $spouse_form->createView(),
            'spouse_occupation_form' => $spouse_occupation_form->createView(), 
        ));
    }

}
