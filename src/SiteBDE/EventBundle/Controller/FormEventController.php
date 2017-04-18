<?php

namespace SiteBDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormEventController extends Controller
{
    public function indexAction()
    {
        return $this
        		->render('SiteBDEEventBundle:FormEvent:FormEvent.html.twig');
    }
}
