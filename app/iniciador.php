<?php
	# Cargar configuraciones
	require_once'config/configurar.php';

	# Atoload para las clases
	spl_autoload_register(function($nombreClase){
		require_once'librerias/'.$nombreClase.'.php';
	});

				