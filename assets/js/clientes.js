		$(document).ready(function(){
			load(1);					
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_clientes.php?action=ajax&page='+page+'&q='+q,
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
		  text: "Realmente deseas eliminar el cliente",
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
				"campo":"id_cliente",
				"tabla":"clientes",
				"dato":"Cliente",
			};
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
				remove_alert();
				}
			});
		  }
		})
	}

		function remove_alert(){
				window.setTimeout(function() {
					$(".alert").fadeTo(500, 0).slideUp(500, function(){
					$(this).remove();
				});
				}, 5000); 
			}
  
$( "#guardar_cliente" ).submit(function( event ) {
	event.preventDefault();
  $('#guardar_datos').attr("disabled", true);
  var datos = $(this).serializeArray();
  datos.push({name: 'TABLA', value: "clientes"});
  datos.push({name: 'dato_mensaje', value: "Cliente"});
  datos.push({name: 'columnas', value: "Razon_Social,RFC,Giro,Direccion,Contacto,Correo_contacto,Telefono"});
	 $.ajax({
			type: "POST",
			url: "ajax/insertar.php",
			data: datos,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
				console.log("datos: "+datos);
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			$('#guardar_cliente')[0].reset();
			load(1);
			remove_alert();
		  },
		  error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			alert(thrownError);
		  }  
	});
})

$( "#editar_cliente" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_cliente.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			load(1);
			remove_alert();
		  }
	});
  event.preventDefault();
})

	function obtener_datos(id){		
			var parametros = {"id":id};
			$.ajax({
					type: "POST",
					url: "ajax/ver_datos_cliente.php",
					data: parametros,
					dataType: "json",
					beforeSend: function(objeto){
						$("#resultados_ajax2").html("Mensaje: Cargando...");
					},
					success: function(datos){
						$("#resultados_ajax2").html("");
						$("#mod_id").val(datos.id_cliente);
						$("#mod_razon_social").val(datos.razon_social);
						$("#mod_rfc").val(datos.rfc);
						$("#mod_giro").val(datos.giro);
						$("#mod_direccion").val(datos.direccion);
						$("#mod_contacto").val(datos.contacto);
						$("#mod_email").val(datos.correo_contacto);
						$("#mod_telefono").val(datos.telefono);
				},
				error: function (xhr, ajaxOptions, thrownError) {
					alert(xhr.responseText);
					alert(thrownError);
				  }
			});
		}      
	
		
		