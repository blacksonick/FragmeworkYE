<?php
	
	/* Este es el archivo base en donde se manejaran los controladores en el fragmework */
	/*
		Traer la URL ingresada en el navegador
		0.controlador
		1.metodo
		2.parametros

		Ejemplo:	Estudiante/Actualizar/id 
		Ejemplo:	0: Estudiante/
					1: Actualizar/
					2: id 
	*/
	class Core{
		# Inicializar variables para cuando no se pase nada por url
		protected $controladorActual = 'home';
		protected $metodoActual = 'index';
		protected $parametros = [];

		public function __construct(){
			
			$url = $this->getUrl();

			# Buscar y verifica si existe el controlador solicitado
			if (file_exists('../app/controladores/'.ucwords($url[0]).'.php')) {

				# si existe , el controlador pasado por la url se setea como controlador actual
				$this->controladorActual = ucwords($url[0]);
				unset($url[0]);
			}
			# Solicitar el controlador actual
			require_once'../app/controladores/'.$this->controladorActual.'.php';
			# Instancia el controlador actual
			$this->controladorActual= new $this->controladorActual;

			if (isset($url[1])) {
				# Verificar la la posicion 1 de la url que seria el metodo
				if (method_exists($this->controladorActual, $url[1])) {

					# Definimos el metodo
					$this->metodoActual = $url[1];

					unset($url[1]);
				}
			}
			# Obtenemos los parametros que enviamos por la url
			$this->parametros = $url ? array_values($url) : [];

			# llamar callback por parametros array
			call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
			
		}

		public function getUrl(){

			if (isset($_GET['url'])) {
				$url 	= rtrim($_GET['url'], '/');
				$url 	= filter_var($url, FILTER_SANITIZE_URL);
				$url 	= explode('/', $url);

				return $url;
			}
		}
	}