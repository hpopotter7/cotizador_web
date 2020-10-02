		$(document).ready(function(){
			load(1);
			
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_usuarios.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="assets/images/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}
	
		
	function eliminar (id){
		Swal.fire({
		  title: 'Estas seguro?',
		  text: "Realmente deseas eliminar el usuarios",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, eliminarlo!',
		  cancelButtonText: "No, cancelar!",  
		}).then((result) => {
		  if (result.value) {
			var parametros={
				"id":id,
				"campo":"id_usuario",
				"tabla":"usuarios",
				"dato":"Usuario",
			};
			console.log(parametros);
			$.ajax({
				type: "POST",
				url: "./ajax/baja.php",
				data: parametros,
				 beforeSend: function(objeto){
					$("#resultados").html("Mensaje: Cargando...");
				  },
				success: function(datos){
				$("#resultados").html(datos);
				load(1);
				}
			});
		  }
		})
	}
	
		
$( "#guardar_usuario" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
 var datos = $(this).serializeArray();
  datos.push({name: 'TABLA', value: "usuarios"});
  datos.push({name: 'dato_mensaje', value: "Usuario"});
  datos.push({name: 'columnas', value: "Username,Nombre,Email,Grupo"});
	 $.ajax({
			type: "POST",
			url: "ajax/insertar.php",
			data: datos,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

$( "#editar_usuario" ).submit(function( event ) {
	
  $('#actualizar_datos2').attr("disabled", true);
  
 var parametros = $(this).serialize();
 
	 $.ajax({
			type: "POST",
			url: "ajax/editar_usuario.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos2').attr("disabled", false);
			load(1);
		  },
		  error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.responseText);
			alert(thrownError);
		  }
	});
	event.preventDefault();
})

	function obtener_datos(id){
		var parametros = {"id":id};
		$.ajax({
				type: "POST",
				url: "ajax/ver_datos_usuarios.php",
				data: parametros,
				dataType: "json",
				beforeSend: function(objeto){
					$("#resultados_ajax2").html("Mensaje: Cargando...");
				},
				success: function(datos){
					$("#resultados_ajax2").html("");
					$("#mod_id").val(datos.id_usuario);
					$("#mod_username").val(datos.username);
					$("#mod_nombre").val(datos.nombre);
					$("#mod_email").val(datos.email);
					$("#mod_grupo").val(datos.grupo);
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.responseText);
				alert(thrownError);
			  }
		});
			
		}
		
