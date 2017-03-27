<?php


namespace App\Controllers;

class ExampleController extends BaseController {

	public function redirect($request, $response) {

		return $response->withRedirect($this->c->router->pathFor('landing'));
	}

	public function landing($request, $response) {

		return 'to here';
	}
}