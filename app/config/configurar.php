<?php 
	# Datos para la conexion a la base de datos
	define('HOST_BD', 'localhost');
	define('USER_BD', 'root');
	define('PASS_BD', '');
	define('BD', '');

	# Ruta de la aplicacion
		define('RUTA_APP', dirname(dirname(__file__)));

	# Ruta del sitio
		define('URL', "http://".$_SERVER['HTTP_HOST']."/FrameworkYE");

	# Nombre del sitio
		define('NOMBRE', "Plantilla | MVC");

	# Definir concatenacion
	    header ("charset = UTF-8");

	# Definir zona horaria
    	date_default_timezone_set("America/Caracas");

	# Reportar 0 errores
    	ini_set('error_reporting', 0);