<?php
namespace SiteBDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GalleryController extends Controller
{
    
	public function addAction(Request $request)
	{
		$advert = new Advert();
		$form = $this->createForm(new AdvertType(), $advert);


		if ($form->handleRequest($request)->isValid())
		{
	
			$em = $this->getDoctrine()->getManager();
			$em->persist($advert);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Image bien enregistrée.');
		}

		return $this->render('SiteBDEEventBundle:Gallery:Gallery.html.twig', $form);
	}


    public function indexAction()
    {
        return $this->render('SiteBDEEventBundle:Gallery:Gallery.html.twig');
    }
}
