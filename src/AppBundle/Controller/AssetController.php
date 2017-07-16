<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Business;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/asset")
 */
class AssetController extends Controller
{
    /**
     * @Route("/list", name="asset-list")
     */
    public function listAction(Request $request)
    {
        return $this->render('AppBundle::Asset/list.html.twig', [
            'page_title' => 'Assets'
        ]);
    }
}
