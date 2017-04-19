<?php

namespace SiteBDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventController extends Controller
{
    public function indexAction()
    {
        return $this
        		->render('SiteBDEEventBundle:Event:Event.html.twig');
    }
    
}
