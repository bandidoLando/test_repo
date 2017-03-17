<?php

use App\Models\User;
use App\Controllers\TopicController;
use App\Controllers\UserController;
use App\Controllers\RedirectController;


	$app->get('/', function($request, $response) {

		return $this->view->render($response, 'home.twig');
	});

