<?php

namespace SiteBDE\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ShopHomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBDEShopBundle:ShopHome:ShopHome.html.twig', array());
    }
}
