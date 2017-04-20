<?php

namespace SiteBDE\UserSystemBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SiteBDE\UserSystemBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class ConnexionHiddenController extends Controller
{
    public function VerifyNConnectAction()
	{
		$User = NULL;
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBDEUserSystemBundle:User');

		$listUsers = $repository->findByPseudo($_POST['inputPseudo']);
		foreach ($listUsers as $key => $value) {
			if (password_verify ( $_POST['inputPassword'] , $value->getPassWord()) === TRUE ) {
				$User = $value;
			 	break;
			 } 
		}





		if ($User !== NULL) {
			$_SESSION["user"] = $User->getFirstName();
			$_SESSION["Status"] = $User->getStatusID();
			var_dump($_SESSION["user"]);
			var_dump($_SESSION["Status"]);
			return $this->redirectToRoute('site_bde_home_page_homepage_SignedOut');
		}
		else
		{
			return $this->redirectToRoute('site_bde_user_system_connexion');
		}
	}

}