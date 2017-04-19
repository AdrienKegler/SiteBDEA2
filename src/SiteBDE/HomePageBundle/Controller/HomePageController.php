<?php

namespace SiteBDE\HomePageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\httpFoundation\Response;

class HomePageController extends Controller
{

	public function LoginAction()
	{	
		if (isset($_SESSION["Status"]) && isset($_SESSION["user"])) {
			return $this->render('SiteBDEHomePageBundle:HomePage:HomePage.html.twig', array("Status" => $_SESSION["Status"], "user" => $_SESSION["user"]));
		}
		else {
			return $this->render('SiteBDEHomePageBundle:HomePage:HomePage.html.twig');
		}
		
	}

	public function SignOutAction()
	{
		
		if (isset($_GET['SignOut'])) {
			if ($_GET['SignOut'] == 1){
				$_SESSION["user"] = NULL;
				$_SESSION["Status"] = NULL;
			}
			
		}	
	}


}

