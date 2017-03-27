<?php


namespace App\Controllers;
use PDO;

class ExampleController extends BaseController {


	public function json($request, $response){

		$topics = $this->c->db->query("SELECT * FROM topics")->fetchAll(PDO::FETCH_OBJ);

		return $response->write(json_encode($topics));

	}

}