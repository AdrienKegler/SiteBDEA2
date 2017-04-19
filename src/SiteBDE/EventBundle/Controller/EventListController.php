<?php

namespace SiteBDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventListController extends Controller
{
    public function EventListAction()
    {
        return $this
        		->render('SiteBDEEventBundle:EventList:EventList.html.twig');
    }
}
