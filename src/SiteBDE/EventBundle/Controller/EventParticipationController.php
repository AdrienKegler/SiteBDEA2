<?php
namespace SiteBDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventParticipationController extends Controller
{
    
	public function addFormAction()
	{
		return $this->render('SiteBDEEventBundle:FormEvent:FormEventCreation.html.twig');
	}


    public function replyFormAction()
    {
        return $this->render('SiteBDEEventBundle:FormEvent:FormEventCreation.html.twig');
    }
}
