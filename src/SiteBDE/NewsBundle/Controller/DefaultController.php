<?php

namespace SiteBDE\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBDENewsBundle:Default:index.html.twig');
    }
}
