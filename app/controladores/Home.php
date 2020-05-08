<?php

	class Home extends Controlador{
		
		public function __construct() {
			# Aqui se declararan los modelos creados por el usuario
		}

		public function index(){

			$datos = [ 
				'titulo' => "Fragmework MVC - PDO"
			];

			$this->vista('home',$datos);
		}
	}