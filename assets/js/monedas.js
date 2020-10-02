		$(document).ready(function(){
			load(1);
			
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_monedas.php?action=ajax&page='+page+'&q='+q,
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
		  text: "Realmente deseas eliminar la moneda",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, eliminarlo!',
		  cancelButtonText: "No, cancelar!",  
		}).then((result) => {
		  if (result.value) {
			var datos={
				"id":id,
				"campo":"id_moneda",
				"tabla":"monedas",
				"dato": "Moneda"
			};
			$.ajax({
				type: "POST",
				url: "./ajax/borrar.php",
				data: datos,
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
			

$( "#guardar_moneda" ).submit(function( event ) {
 event.preventDefault();
  $('#guardar_datos').attr("disabled", true);
  var datos = $(this).serializeArray();
  datos.push({name: 'TABLA', value: "monedas"});
  datos.push({name: 'dato_mensaje', value: "Moneda"});
  datos.push({name: 'columnas', value: "Nombre,simbolo"});
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
			$('#guardar_moneda')[0].reset();
			load(1);
			remove_alert();
		  },
		  error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			alert(thrownError);
		  }  
	});
})
		
		
		
