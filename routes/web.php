<?php

use App\Models\User;
use App\Controllers\TopicController;
use App\Controllers\UserController;
use App\Controllers\RedirectController;

	
	//this route pulls data from db
	$app->get('/pdo', function($request, $response) {

		$users = $this->db->query("SELECT * FROM members")->fetchAll(PDO::FETCH_OBJ);
	
		echo '<pre>';
			var_dump($users);
		echo '</pre>';
	
		// return $this->view->render($response, 'home.twig');
	});
