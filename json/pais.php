<?php
	include("db.php");

	function obtenerTodosLosPaises() {
		$paises = array();
		$sql = "SELECT idpais, nombre 
			    FROM paises"; 

		$db = obtenerConexion();
		$result = ejecutarQuery($db, $sql);

		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$pais = new pais($row['idpais'], $row['nombre']);
		    array_push($paises, $pais);
		}

		cerrarConexion($db, $result);

		return $paises;
	}

	class pais {
		public $id;
		public $nombre;

		function __construct($id, $nombre) {
			$this->id = $id;
			$this->nombre = $nombre;
		}
	}
?>