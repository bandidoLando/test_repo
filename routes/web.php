<?php

use App\Models\User;
use App\Controllers\TopicController;
use App\Controllers\UserController;
use App\Controllers\RedirectController;


	$app->get('/contact', function($request, $response) {

		return $this->view->render($response, 'home.twig');
	});

	$app->post('/contact', function($request, $response) {

		// param of your choice **
		echo $request->getParam('email');
		
		// gets all parametres to dump
		var_dump($request->getParams());

		echo $request->getParsedBodyParam('name');
		

	})->setName('contact');
	
	$app->get('/users', function($request, $response){

		echo $request->getQueruParam('pagenum');

		// returns value
		// if GET request query includes /users?page=4
		echo $request->getParam('page');
	});
