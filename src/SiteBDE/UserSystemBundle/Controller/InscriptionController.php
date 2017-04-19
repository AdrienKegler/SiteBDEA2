<?php

namespace SiteBDE\UserSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SiteBDE\UserSystemBundle\Entity\User;

class InscriptionController extends Controller
{
    public function AddUserAction()
    {

    	return $this->render('SiteBDEUserSystemBundle:Inscription:InscriptionForm.html.twig', array());

    }
}