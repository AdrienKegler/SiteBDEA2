<?php

namespace SiteBDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GalleryController extends Controller
{
    public function indexAction()
    {
        return $this
        		->render('SiteBDEEventBundle:Gallery:Gallery.html.twig');
    }

}
