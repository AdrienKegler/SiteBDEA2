<?php

namespace SiteBDE\UserSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionController extends Controller
{
    public function indexAction()
    {
        return $this
        		->render('SiteBDEUserSystemBundle:Connexion:Connexion.html.twig');
    }
}
