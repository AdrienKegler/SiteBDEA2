<?php

namespace SiteBDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormulaireEventController extends Controller
{
    public function indexAction()
    {
        return $this
        		->render('SiteBDEEventBundle:FormulaireEvent:FormulaireEvent.html.twig');
    }
}
