// JavaScript Document
$(document).ready(function(){
			$("#cboPaises").change(function() {
				var pais = $(this).val();
				
				if(pais > 0)
				{
			        var datos = {
			            idPais : $(this).val()  
			        };

			        $.post("ciudad.php", datos, function(ciudadess) {
			        	
					  	var $comboCiudades = $("#cboCiudades");
		                $comboCiudades.empty();
						$comboCiudades.append("<option value='0'>Seleccione una ciudad</option>");
		                $.each(ciudadess, function(index, cuidad) {
		                	//
	                        $comboCiudades.append("<option value='"+ cuidad.id +"'>" + cuidad.nombre + "</option>");
		                });
					}, 'json');
				}
				else
				{
					var $comboCiudades = $("#cboCiudades");
	                $comboCiudades.empty();
					$comboCiudades.append("<option>Seleccione una ciudad</option>");
				}
			});
		
			$("#cboCiudades").change(function(){ 
				var ciudad = $(this).val();
				
				if(ciudad > 0){
					var datos = {
						idCiudad : $(this).val(),
						idPais : $("#cboPaises").val()
					};
					$.post("parroquia.php", datos, function(parroquias) {
			        	
					  	var $comboParroquia = $("#cboParroquia");
		                $comboParroquia.empty();
						$comboParroquia.append("<option value='0'>Seleccione una parroquia</option>");
		                $.each(parroquias, function(index, parroquia) {
		                	//
	                        $comboParroquia.append("<option value='"+ parroquia.id +"'>" + parroquia.nombre + "</option>");
		                });
					}, 'json');

				}else{
					var $comboParroquia = $("#cboParroquia");
					$comboParroquia.empty();
					$comboParroquia.append("<option>Seleccione Parroquia</option>");
				}
			});  

		}); 