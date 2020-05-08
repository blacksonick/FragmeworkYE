<?php 

	# Funciones para redireccionar a una pagina 
	function redireccionar($pagina){
		header('location: '.URL.$pagina);
	}
	function redirigir($pagina){
		echo "<script type='text/javascript'>window.location='".URL.$pagina."';</script>";
	}

	# Funciones para redirigir a la pagina anterior visitada
	function back_page(){
		header("Location:".$_SERVER['HTTP_REFERER']);
	}