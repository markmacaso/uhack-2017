<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/user/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:User:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/user/view")
     */
    public function viewAction()
    {
        return $this->render('AppBundle:User:view.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/user/edit")
     */
    public function editAction()
    {
        return $this->render('AppBundle:User:edit.html.twig', array(
            // ...
        ));
    }

}
