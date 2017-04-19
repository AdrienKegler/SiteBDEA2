<?php

namespace SiteBDE\UserSystemBundle\Controller;

use SiteBDE\UserSystemBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionHiddenController extends Controller
{
    public function VerifyNSaveAction()
    {	
    	$a=NULL;


    	if ($_POST['inputPassword'] == $_POST['confirmation']) {
    		

    		$User = new User();
			$User->setLastName($_POST['inputLastname']);
			$User->setFirstName($_POST["inputName"]);
			$User->setPseudo($_POST["inputPseudo"]);
			$User->setMailAddress($_POST["inputEmail"]);
			$User->setBirthDate($_POST["inputBirthDate"]);
			$User->setPassWord($_POST["inputPassword"]);
			$User->setSex($_POST["inlineRadioSexe"]);
			$User->setSchoolID($_POST["inlineRadioSchool"]);
			$User->setStatusID($_POST["inlineRadioOption"]);
			$User->setAvatar(basename($_FILES['Avatar']['name']));


			$em = $this->getDoctrine()->getManager();
			$em->persist($User);

			$em->flush();
			return $this->redirect('http://localhost/SiteBDEA2/web/app_dev.php');
    	}


	}
}