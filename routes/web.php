<?php

use App\Models\User;
use App\Controllers\ExampleController;


	$app->get('/', function($request, $response) {

		return $this->view->render($response, 'home.twig');
	});

	$app->get('/redirect', ExampleController::class . ':redirect');
	$app->get('/show', ExampleController::class . ':show')->setName('show');