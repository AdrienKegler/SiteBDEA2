<?php

namespace SiteBDE\UserSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionController extends Controller
{
    public function indexAction()
    {
        return $this
        		->render('SiteBDEUserSystemBundle:Inscription:Inscription.html.twig');
    }
}
