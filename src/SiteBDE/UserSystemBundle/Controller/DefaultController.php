<?php

namespace SiteBDE\UserSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this
        		->add( "yourField", FroalaEditorType::class )
        		->render('SiteBDEUserSystemBundle:Default:index.html.twig');
    }
}
