<?php

namespace SiteBDE\HomePageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\httpFoundation\Response;

class HomePageController extends Controller
{
    public function indexAction()
    {

        return $this->render('SiteBDEHomePageBundle:HomePage:HomePage.html.twig');
    }
}
