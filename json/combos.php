<?php
	include("pais.php");
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nebaris - Dropdowns en cascada</title>
	<script src="../js/jquery.js"></script>
	<script src="../js/json.js"></script>
	
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="divContenedor">
		<h2>Combos anidados</h2>
		<div class="divLabels">
			<label for="cboPaises">Paises</label>
		</div>
		<div class="divSelects">
			<select id="cboPaises">
				<option value="0">Seleccione un país</option>
				<?php
					$paises = obtenerTodosLosPaises();
					foreach ($paises as $pais) { 
						echo '<option value="'.$pais->id.'">'.utf8_encode($pais->nombre).'</option>';		
					}
				?>
			</select>
		</div>
		<div class="divLabels">
			<label for="cboCiudades">Ciudades</label>
		</div>
		<div class="divSelects">
			<select id="cboCiudades">
				<option value="0">Seleccione una ciudad</option>
			</select>
		</div>
		<div class="divLabels">
			<label for="cboParroquia">Parroquias</label>
		</div>
		<div class="divSelects">
			<select id="cboParroquia">
				<option value="0">Seleccione un parroquia</option>
			</select>
		</div>
		
		
	</div>	
</body>
</html>