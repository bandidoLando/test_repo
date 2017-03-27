<?php


namespace App\Controllers;

class ExampleController extends BaseController {

	public function redirect($request, $response) {

		return $response->withRedirect($this->c->router->pathFor('show'));
	}

	public function show($request, $response, $args) {

		return 'to here';
	}
}