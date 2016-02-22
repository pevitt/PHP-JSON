<?php
	include("db.php");
	
	if(isset($_POST['idCiudad'])) {
		$parroquias = array();
		$sql = "SELECT idparroquia, nombre 
				FROM parroquia 
				WHERE idciudad = ".$_POST['idCiudad']." AND idpais = ".$_POST['idPais']; 

		$db = obtenerConexion();
		$result = ejecutarQuery($db, $sql);

		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$parroquia = new parroquia($row['idparroquia'], $row['nombre']);
		    array_push($parroquias, $parroquia);
		}

		cerrarConexion($db, $result);

		echo json_encode($parroquias);
	}
	
	class parroquia {
		public $id;
		public $nombre;

		function __construct($id, $nombre) {
			$this->id = $id;
			$this->nombre = $nombre;
		}
	}
?>