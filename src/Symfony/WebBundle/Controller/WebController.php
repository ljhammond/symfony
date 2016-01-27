<?php
// src/Symfony/WebBundle/Controller/WebController.php
namespace Symfony\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebController extends Controller {

	public function indexAction() {
		return $this->render('SymfonyWebBundle:Web:index.html.twig');
	}

}