<?php
	include("db.php");
	
	if(isset($_POST['idPais'])) {
		$ciudadess = array();
		$sql = "SELECT idciudad, nombre 
				FROM ciudades 
				WHERE idpais = ".$_POST['idPais']; 

		$db = obtenerConexion();
		$result = ejecutarQuery($db, $sql);

		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$ciudad = new ciudad($row['idciudad'], $row['nombre']);
		    array_push($ciudadess, $ciudad);
		}

		cerrarConexion($db, $result);

		echo json_encode($ciudadess);
	}
	
	class ciudad {
		public $id;
		public $nombre;

		function __construct($id, $nombre) {
			$this->id = $id;
			$this->nombre = $nombre;
		}
	}
?>