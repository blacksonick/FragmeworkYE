<?php
    # Esta clase se encarga de ejecutar y mostrar las vistas que se requieren desde los controladores 
	class Controlador{

		# Cargar los modelos
		public function modelo($modelo){
			require_once'../app/modelos/'.$modelo.'.php';
			return new $modelo();
		}

		# Cargar las vistas
		public function vista($vista,$datos = []){
	
			if (file_exists('../app/vistas/'.$vista.'.php')) {
				require_once'../app/vistas/'.$vista.'.php';
			}else{
				die('Vista solicitada no existe, verifique la ruta de origen');
			}
		}
	}