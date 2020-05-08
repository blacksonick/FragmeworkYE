<?php 
    # Limpiar y filtrar datos de entrada
	function Clear($cadena){
		$cadena     = trim($cadena);
		$cadena     = htmlentities($cadena);
		$cadena     = filter_var($cadena,FILTER_SANITIZE_STRING);
		return $cadena;
	}

	# Formatear fecha
	function Format_Fecha($fecha) {
        if(empty($fecha)) {
        	return "No hay fecha";
        }
        $intervalos = array("segundo", "minuto", "hora", "día", "semana", "mes", "año");
        $duraciones = array("60","60","24","7","4.35","12","1");
        $ahora = time();
        $Fecha_Unix = strtotime($fecha);
        if(empty($Fecha_Unix)) {   return "Fecha incorrecta"; }

        if($ahora > $Fecha_Unix) {   
            $diferencia     =$ahora - $Fecha_Unix;
            $tiempo         = "hace";
        } else {
            $diferencia     = $Fecha_Unix -$ahora;
            $tiempo         = "dentro de";
        }
        for($j = 0; $diferencia >= $duraciones[$j] && $j < count($duraciones)-1; $j++) {
            $diferencia /= $duraciones[$j];
        }
        $diferencia = round($diferencia);
        if($diferencia != 1) {
            $intervalos[5]	.="e";
            $intervalos[$j]	.= "s";
        }
        return "$tiempo $diferencia $intervalos[$j]";
    }