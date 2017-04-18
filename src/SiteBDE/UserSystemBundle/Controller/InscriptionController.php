<?php

namespace SiteBDE\UserSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SiteBDE\UserSystemBundle\Entity\User;

class InscriptionController extends Controller
{
    public function indexAction()
    {
    	if ("$_SERVER['REQUEST_METHOD']"[]) {
    	}


    return $this->render('SiteBDEUserSystemBundle:Inscription:Inscription.html.twig', array());
    }
}