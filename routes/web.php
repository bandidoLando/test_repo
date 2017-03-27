<?php

use App\Models\User;
use App\Controllers\ExampleController;


	$app->get('/', function($request, $response) {

		return $this->view->render($response, 'home.twig');
	});

	$app->get('/json', ExampleController::class . ':json')->setName('json');