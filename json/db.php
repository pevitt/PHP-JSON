<?php
	function obtenerConexion() {
		$db = mysql_connect('localhost', 'root', '123') or die('Error Conexion');

		mysql_select_db('mysql') or die('No se pudo seleccionar la base de datos');

		return $db;	
	}

	function cerrarConexion($db, $query) {
		// Liberar resultados
		mysql_free_result($query);

		// Cerrar la conexión
		mysql_close($db);
	}

	function ejecutarQuery($db, $sql) {
		$resultado=mysql_query($sql) or die('Consulta fallida: ' . mysql_error());

		return $resultado;
	}
?>