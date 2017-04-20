<?php

namespace SiteBDE\HomePageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\httpFoundation\Response;

class HomePageController extends Controller
{

	public function LoginAction()
	{	
		if (isset($_SESSION["Status"]) && isset($_SESSION["user"])) {
			if (!is_null($_SESSION["Status"]) && !is_null($_SESSION["user"])) {
				return $this->render('SiteBDEHomePageBundle:HomePage:HomePage.html.twig', array("Status" => $_SESSION["Status"], "user" => $_SESSION["user"]));
			}
			else {
				return $this->render('SiteBDEHomePageBundle:HomePage:HomePage.html.twig');
			}
		}
		else {
			return $this->render('SiteBDEHomePageBundle:HomePage:HomePage.html.twig');
		}
		
	}

	public function SignOutAction()
	{
		$_SESSION["user"] = NULL;
		$_SESSION["Status"] = NULL;
		return $this->redirectToRoute('site_bde_home_page_homepage_SignedOut');
	}


}

