<?php

namespace App\Front\Controller;

use App\Front\Controller\AbstractController;

class CountryController extends AbstractController
{
	public function index(array $uriVars = []) {
		//http vers 8000 pr afficher les countries
		$this->render('country/index', [
			'countries' =>$countries
		]);
	}
}