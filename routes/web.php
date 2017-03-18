<?php

use App\Models\User;
use App\Controllers\BaseController;


	$app->get('/', function($request, $response) {

		return $this->view->render($response, 'home.twig');
	});
