	<?php

	class Modelo {

		private $conn;
		
		function __construct() { 

			$servername = "localhost";
			$database = "crud";
			$username = "root";
			$password = "";

			$this->conn = mysqli_connect($servername, $username, $password, $database);

			if ($this->conn->connect_error) {
				die("Connection failed: " . $this->conn->connect_error);
			}
		}

		public function select (){
			$sql = "SELECT * FROM persona";
			$result = $this->conn->query($sql);

			if ($result->num_rows > 0) {
				$arrayName = array();

				while($row = $result->fetch_assoc()) {
					$arrayName[]=$row;
				}
			} 
			return $arrayName;
		}

		public function insertar ($data) {
			$sql = "INSERT INTO persona  (".implode(", ", array_keys($data)).")  VALUES ('".implode("', '", $data)."')  ";
			return mysqli_query($this->conn, $sql);
		}


		public function actualizar ($temp) {
			$id_persona=$temp['id_persona'];
			unset($temp['id_persona']);
			$sql="UPDATE persona SET ";
			foreach($temp as $id => $value){
				$sql.=    $id."= '".$value."', ";
			}
			$sql= substr($sql, 0, -2);
			$sql.=" WHERE id_persona='".$id_persona."'";
			
			
	//$sql="UPDATE persona SET nombre='".$temp['nombre']."', apellido='".$temp['apellido']."',telefono='".$temp['telefono']."', direccion='".$temp['direccion']."'  WHERE id_persona='".$temp['id_persona']."'";

			return mysqli_query($this->conn, $sql);

		}

		public function eliminar ($datos) {
			$sql = "DELETE FROM persona  WHERE id_persona=".$datos;
			return mysqli_query($this->conn, $sql);
		}

	}
	?>
