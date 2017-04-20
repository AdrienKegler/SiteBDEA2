<?php

namespace SiteBDE\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GalleryController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBDENewsBundle:Gallery:gallery.html.twig');
    }
}
