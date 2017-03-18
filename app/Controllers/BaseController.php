<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;

	abstract class BaseController {
	
		protected $c;

		// Makes container available in every controller with valid namespace
		public function __construct(ContainerInterface $c) {

			$this->c = $c;
		}

		public function helper() {

			//
		}
	}