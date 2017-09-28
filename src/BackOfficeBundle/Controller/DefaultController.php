<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {
	
	public function indexAction() {
		var_dump ( 'Back controller' );
		// return $this->render('BackOfficeBundle::index.html.twig');
		return $this->redirect ( $this->generateUrl ( 'back_admin' ) );
	}

}
