<?php

namespace SiteBDE\UserSystemBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserSystemBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class ConnexionHiddenController extends Controller
{
    public function VerifyNConnectAction()
	{
		$User = NULL;
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('UserSystemBundle:User');

		$listUsers = $repository->findByPseudo($_POST('inputPassword'));
		foreach ($listUsers as $key => $value) {
			if (password_verify ( $_POST('inputPassword') , $value->getPassWord()) === TRUE ) {
				$User = $value;
			 	break;
			 } 
		}

		if ($User !== NULL) {
			$_SESSION['User'] = $User->getName();
			$_SESSION['Status'] = $User->getStatusID();
			return $this->render('SiteBDEHomePageBundle:HomePage:HomePage.html.twig', array('user' => $_SESSION['User'], 'Status' => $_SESSION['Status']));
		}
		else
		{
			return $this->render('SiteBDEUserSystemBundle:Connexion:Debug.html.twig', array('users' => $listUsers));
		}
	}
}