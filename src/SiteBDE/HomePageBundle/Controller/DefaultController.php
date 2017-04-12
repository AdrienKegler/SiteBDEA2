<?php

namespace SiteBDE\HomePageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBDEHomePageBundle:Default:index.html.twig');
    }
}
