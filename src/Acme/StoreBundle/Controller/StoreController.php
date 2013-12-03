<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StoreController extends Controller {
	public function indexAction($store) {
		return $this->render(
				'AcmeStoreBundle:Store:index.html.twig',
				array('store' => $store)
		);
	}
}