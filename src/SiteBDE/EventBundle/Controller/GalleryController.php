<?php
namespace SiteBDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GalleryController extends Controller
{
    public function addAction()
  {
    // On crée un objet Advert
    $advert = new Advert();

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form', $advert);

    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $formBuilder
      ->add('date',      'date')
      ->add('title',     'text')
      ->add('content',   'textarea')
      ->add('author',    'text')
      ->add('published', 'checkbox')
      ->add('save',      'submit')
    ;
    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

    // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
    return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }

}
