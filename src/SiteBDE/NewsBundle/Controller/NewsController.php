<?php

namespace SiteBDE\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBDENewsBundle:News:News.html.twig');
    }
}
