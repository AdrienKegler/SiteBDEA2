<?php

namespace SiteBDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventController extends Controller
{
    public function indexAction()
    {
    	if (isset($_SESSION["Status"]) && isset($_SESSION["user"])) {
			if (!is_null($_SESSION["Status"]) && !is_null($_SESSION["user"])) {
				return $this->render('SiteBDEEventBundle:Event:Event.html.twig', array("Status" => $_SESSION["Status"], "user" => $_SESSION["user"]));
			}
			else {
				return $this->render('SiteBDEEventBundle:Event:Event.html.twig');
			}
		}
		else {
			return $this->render('SiteBDEEventBundle:Event:Event.html.twig');
		}
    }
    
}
