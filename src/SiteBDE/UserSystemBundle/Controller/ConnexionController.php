<?php

namespace SiteBDE\UserSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConnexionController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBDEUserSystemBundle:Connexion:Login.html.twig');
    }

    public function Identification()
    {
    	if (isset($_POST['inputPseudo']) and $_POST['inputPseudo'] == ) {
    		# code...
    	}


    	$_POST['inputPseudo'];
    	$_POST['inputPassword'];
    }

    
}
