<?php 
	# Conexion a la BD
	class Conexion{
		private $host 	= HOST_BD;
		private $user 	= USER_BD;
		private $pass 	= PASS_BD;
		private $bd 	= BD;

		private $conexion;
		private $stmt;
		private $error;

		public function __construct(){

			#	Configurar la conexion
			$dsn = 'mysql:host='.$this->host.';dbname='.$this->bd;
			$opciones =array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);

			try{
				$this->conexion = new PDO($dsn, $this->user,$this->pass,$opciones);

				$this->conexion>exec('set names utf8');

			} catch(PDOExeception $e){
				$this->error = $e->getMenssage();
				echo $this->error;
			}
		}

		# Preparar consultas
		public function query($sql){
			$this->stmt = $this->conexion->prepare($sql);
		}

		# Verificar el tipo de dato de entrada y definirlo
		public function bind($parametro, $valor, $tipo = null){

			if (is_null($tipo)) {
				switch (true) {
					case is_int($valor):
						$tipo = PDO::PARAM_INT; break;
					case is_bool($valor):
						$tipo = PDO::PARAM_BOOL; break;
					case is_null($valor):
						$tipo = PDO::PARAM_NULL; break;
					default:
						$tipo = PDO::PARAM_STR; break;
				}
			}
			$this->stmt->bindValue($parametro, $valor, $tipo);
		}

		# Ejecutar consultas
		public function execute(){
			return $this->stmt->execute();
		}

		# Obtener todos los registros de una tabla
		public function registros(){
			$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}

  		# Obtener un registros de una tabla
		public function registro(){
			$this->execute();
			return $this->stmt->fetch(PDO::FETCH_OBJ);
		}


		# Obtener la cantidad de registros de una tabla
		public function rowCont(){
			$this->execute();
			return $this->stmt->fetchColumn();
		}

	}