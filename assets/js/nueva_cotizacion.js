function inicio(){
	load(1);
	var contador_tintas=0;
	var arreglo_tipo=new Array();
	var arreglo_color=new Array();
	var arreglo_cantidad=new Array();	
	var grapas_tamaño=new Array();	
	var grapas_cantidad=new Array();			
	
	//load_data();
	
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	$('.pop').tooltipster({
		content: $('<div id="mikrah">Dimensiones: 123mm x 124mm x 125mm<br>Material: Carton</div><div id="mikrash">Color: N/A</div>'),
		animation: 'fade',
		delay: 200,
		theme: 'tooltipster-borderless',
		trigger: 'hover',
		contentAsHTML: true
		});

		

		

		$("#datos_cotizacion").submit(function(){
		  var id_cliente = $("#id_cliente").val();
		  var id_contacto = $("#atencion").val();
		  var condiciones = $("#condiciones").val();
		  var validez = $("#validez").val();
		  var entrega = $("#entrega").val();
		  var notas = $("#notas").val();
		  var moneda=$("#moneda").val();
		  if (id_cliente==""){
			alert("Debes seleccionar el cliente");
			$("#nombre_cliente").focus();
			return false;
		  }
		
			/*VentanaCentrada('./pdf/documentos/cotizacion_pdf.php?id_cliente='+id_cliente+'&id_contacto='+id_contacto+'&condiciones='+condiciones+'&validez='+validez+'&entrega='+entrega+'&notas='+notas+'&moneda='+moneda,'Cotizacion','','1024','768','true');*/
		 
			//var parametros = {'id_cliente':id_cliente,'id_contacto':id_contacto,'condiciones':condiciones,'validez':validez,'entrega':entrega,'notas':notas,'moneda':moneda};
			
			var parametros = $(this).serialize();
			
			$.ajax({
					type: "POST",
					url: "ajax/nueva_cotizacion.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
				  }
			});			
	 	});

		function load(page){
			$(".outer_div").html("");
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/productos_cotizacion.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="assets/images/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
				}
			})
		}

		function añadir(datos){
			$("#combo_componentes").val(datos[0]);			
			$("#combo_material_primario").val(datos[1]);
			$("#combo_material_especifico").val(datos[2]);
			$("#combo_tipo_contenedor").val(datos[3]);
			var id=datos[4];
			var alto=document.getElementById('alto_'+id).value;
			var ancho=document.getElementById('ancho_'+id).value;
			var largo=document.getElementById('largo_'+id).value;
			var html="Al: "+alto+"mm x An: "+ancho+"mm x La: "+largo+"mm";
			$("#help_caracteristicas").html(html);
			$('.close').click();
		}

	/* function agregar (id){
			var precio_venta=document.getElementById('precio_venta_'+id).value;
			var descuento=document.getElementById('descuento_'+id).value;
			var cantidad=document.getElementById('cantidad_'+id).value;
			var moneda=$("#moneda").val();
			var tax=$("#taxes").val();
			
			//Inicia validacion
			if (isNaN(cantidad))
			{
			alert('Esto no es un numero');
			document.getElementById('cantidad_'+id).focus();
			return false;
			}
			if (isNaN(descuento))
			{
			alert('Esto no es un numero');
			document.getElementById('descuento_'+id).focus();
			return false;
			}
			if (isNaN(precio_venta))
			{
			alert('Esto no es un numero');
			document.getElementById('precio_venta_'+id).focus();
			return false;
			}
			//Fin validacion
			
			$.ajax({
        type: "POST",
        url: "./ajax/agregar_cotizador.php",
        data: "id="+id+"&precio_venta="+precio_venta+"&cantidad="+cantidad+"&descuento="+descuento+"&moneda="+moneda+'&tax='+tax,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});
		} */
		
			function eliminar (id){
				var moneda=$("#moneda").val();
				var tax=$("#taxes").val();
				$.ajax({
					type: "GET",
					url: "./ajax/agregar_cotizador.php",
					data: "id="+id+"&moneda="+moneda+'&tax='+tax,
					beforeSend: function(objeto){
						$("#resultados").html("Mensaje: Cargando...");
					},
					success: function(datos){
					$("#resultados").html(datos);
					}
				});
			}
		
			/*
			$(function() {
				$("#nombre_cliente").autocomplete({
					source: "./ajax/autocomplete/clientes.php",
					minLength: 2,
					select: function(event, ui) {
						event.preventDefault();
						$('#id_cliente').val(ui.item.id_cliente);
						$('#nombre_cliente').val(ui.item.nombre_cliente);
						$('#tel1').val(ui.item.movil);
						$('#atencion').val(ui.item.contacto);
						$('#empresa').val(ui.item.nombre_comercial);
						$('#tel2').val(ui.item.fijo);
						$('#email').val(ui.item.email);
						$('#email_contact').val("");
						
						get_contact(ui.item.id_cliente);
						}
				});
			});
			*/
					
	/* $("#nombre_cliente" ).on( "keydown", function( event ) {
						if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
						{
							$("#id_cliente" ).val("");
							$("#atencion" ).val("");
							$("#tel1" ).val("");
							$("#tel2" ).val("");
							$("#empresa" ).val("");
							$("#email" ).val("");
							$('#email_contact').val("");
							
						}
						if (event.keyCode==$.ui.keyCode.DELETE){
							$("#nombre_cliente" ).val("");
							$$("#id_cliente" ).val("");
							$("#atencion" ).val("");
							$("#tel1" ).val("");
							$("#tel2" ).val("");
							$("#empresa" ).val("");
							$("#email" ).val("");
							$('#email_contact').val("");
						}
			}); */				

			function get_contact(id_cliente){
				$("#atencion" ).load( "ajax/contactos_clientes.php?id_cliente="+id_cliente );
			}

			$('#atencion').on('change', function(e){ 
				var telefono = $(this).find("option:selected").data('telefono'); 
				var email_contact = $(this).find("option:selected").data('email'); 
				$("#tel1").val(telefono);
				$("#email_contact").val(email_contact);
			});
			
			function load_data(){
				var moneda=$("#moneda").val();
				var tax=$("#taxes").val();
				$( "#resultados" ).load( "ajax/agregar_cotizador.php?moneda="+moneda+"&tax="+tax );
			}
			
			
	$('#editModalItem').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var codigo = button.data('codigo')
	  var cantidad = button.data('cantidad')
	  var descripcion = button.data('descripcion')
	  var precio = button.data('precio')
	  var descuento = button.data('descuento')
	  var id = button.data('id') 
	  var modal = $(this)
	  modal.find('.modal-title').text('Editar Ãtem')
	  modal.find('.modal-body #codigo_item').val(codigo)
	  modal.find('.modal-body #cantidad_item').val(cantidad)
	  modal.find('.modal-body #descripcion_item').val(descripcion)
	  modal.find('.modal-body #precio_item').val(precio)
	  modal.find('.modal-body #descuento_item').val(descuento)
	  modal.find('.modal-body #id_tmp').val(id)
	})
	
	
	$( "#editar_item" ).submit(function( event ) {
		var moneda=$("#moneda").val();
		var tax=$("#taxes").val();
		var parametros = $(this).serialize();
		
		$.ajax({
			type: "POST",
			url: "./ajax/agregar_cotizador.php",
			data: parametros+ "&moneda="+moneda+"&tax="+tax,
			 beforeSend: function(objeto){
				$("#resultados").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			$("#editModalItem").modal("hide");
			
			window.setTimeout(function() {
				$( "tr" ).removeClass( "table-info" );
			}, 5000);
			
		  }
		});		
	 event.preventDefault();
	})
		
		function descargar(id){
		 VentanaCentrada('ver_cotizacion.php?id='+id,'Cotizacion','','1024','768','true');
	 	}
	
	
	
	$( "#guardar_producto" ).submit(function( event ) {
		  $('#guardar_datos').attr("disabled", true);
		  
		 var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "ajax/nuevo_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados2").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#resultados2").html(datos);
					$('#guardar_datos').attr("disabled", false);
					$("#addModalProduct").modal("hide");
					load(1);
					remove_alert();
				  }
			});
		  event.preventDefault();
		})
		
		$('#addModalProduct').on('shown.bs.modal', function () {
			$("#codigo").focus();
			$('#guardar_producto').trigger("reset");
			
			$('#nombre').summernote({
			  toolbar: [
				// [groupName, [list of button]]
				['style', ['bold', 'italic', 'underline']],
				
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['link',['linkDialogShow', 'unlink']],
				
				
			  ],height: 150,
			  
			});
			
			$('#nombre').summernote('code', '');
			
			
		})
		
		$('#addModalClient').on('shown.bs.modal', function () {
			$('#guardar_cliente').trigger("reset");
			$("#cliente").focus();
		})
		
		
					
			
		function remove_alert(){
				window.setTimeout(function() {
					$(".alert").fadeTo(500, 0).slideUp(500, function(){
					$(this).remove();
				});
				}, 5000); 
			}	
			
		function tax_value(value){
			
				var moneda=$("#moneda").val();
				$( "#resultados" ).load( "ajax/agregar_cotizador.php?moneda="+moneda+"&tax="+value );
		}	

		$('#combo_componentes').change(function(){
			$("#caracteristicasModal").modal({
			  fadeDuration: 100
			});
		  });

		  $('#guardar_caracteristicas').on("click",function(){
			var alto=$('#txt_alto').val();
			var ancho=$('#txt_ancho').val();
			var largo=$('#txt_largo').val();
			var cadena=alto+" mm x "+ancho+" mm x "+largo+" mm";
			$('#help_caracteristicas').html(cadena);
		  });

		  $("#example-tabs").steps({
			headerTag: "h3",
			bodyTag: "section",
			transitionEffect: "slideLeft",
			enableFinishButton: false,
			enablePagination: false,
			enableAllSteps: true,
			titleTemplate: "#title#",
			cssClass: "tabcontrol",
			onStepChanged: function(event, currentIndex) {
				//alert("ads");
			  }
		});

		$('#btn_ok_tintas').on('click',function(){
			if(arreglo_cantidad.length==0){
				Swal.fire({
					title: '¿Desea cancelar las tintas?',
					text: "No se ha agregado ninguna tinta",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Si, cancelar',
					cancelButtonText: 'NO'
				  }).then((result) => {
					console.log(result);
					if (result.value) {
						$("#label_tintas").html("Tintas");
						arreglo_tipo = [];
						arreglo_color = [];
						arreglo_cantidad= [];
						$("#cuerpo_tintas").html("");
						$("#combo_tintas").val("no");
						$("#close_demo").click();
					}
				  })
			}
			else{
				$("#label_tintas").html("Tintas <h6 style='display: inline; font-size:1.2em !important;color:black'><span class='badge badge-warning' style='color:black !important;'>"+arreglo_cantidad.length+"</span></h6> <i style='cursor:pointer;color:blue;' data-toggle='modal' data-target='#Modal_demo' class='fa fa-edit'></i>");
				$("#close_demo").click();
			}
		});

		$("#combo_tintas").change(function (){
			var valor=$(this).val();
			if(valor!="vacio"){
				if(valor!="no"){
					//Modal_demo 
					$("#label_tintas").html("Tintas <i style='cursor:pointer;color:blue;' data-toggle='modal' data-target='#Modal_demo' class='fa fa-edit'></i>");
					$("#Modal_demo").modal({
						fadeDuration: 100,
						backdrop: 'static',
						keyboard: false
					  });
				}
				else{
					$("#label_tintas").html("Tintas");
					arreglo_tipo = [];
					arreglo_color = [];
					arreglo_cantidad= [];
					$("#cuerpo_tintas ").html("");
				}
			}
			else{
				$("#label_tintas").html("Tintas");
				arreglo_tipo = [];
				arreglo_color = [];
				arreglo_cantidad= [];
				$("#cuerpo_tintas ").html("");
			}
		});


		$("#combo_grapas").change(function (){
			var valor=$(this).val();
			if(valor!="vacio"){
				if(valor!="no"){
					//Modal_demo 
					$("#label_grapas").html("Grapas <i style='cursor:pointer;color:blue;' data-toggle='modal' data-target='#Modal_grapas' class='fa fa-edit'></i>");
					$("#Modal_grapas").modal({
						fadeDuration: 100,
						backdrop: 'static',
						keyboard: false
					  });
				}
				else{
					$("#label_grapas").html("Grapas");
					grapas_tamaño = [];
					grapas_cantidad = [];
					$("#cuerpo_grapas ").html("");
				}
			}
			else{
				$("#label_grapas").html("Grapas");
				grapas_tamaño = [];
				grapas_cantidad = [];
				$("#cuerpo_grapas ").html("");
			}
		});

		$("#combo_tarimas").change(function (){
			var valor=$(this).val();
			if(valor!="vacio"){
				if(valor!="no"){
					//Modal_demo 
					$("#label_tarimas").html("Tarimas <i style='cursor:pointer;color:blue;' data-toggle='modal' data-target='#Modal_tarimas' class='fa fa-edit'></i>");
					$("#Modal_tarimas").modal({
						fadeDuration: 100,
						backdrop: 'static',
						keyboard: false
					  });
				}
				else{
					$("#label_tarimas").html("Tarimas");
					//reset form tarimas
					alert("reset form tarimas");
					
				}
			}
			else{
				$("#label_tarimas").html("Grapas");
				alert("reset form tarimas");
			}
		});

		$('#btn_ok_grapas').on('click',function(){
			if(grapas_cantidad.length==0){
				Swal.fire({
					title: '¿Desea cancelar las grapas?',
					text: "No se ha agregado ninguna grapa",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Si, cancelar',
					cancelButtonText: 'NO'
				  }).then((result) => {
					console.log(result);
					if (result.value) {
						$("#label_grapas").html("Grapas");
						grapas_tamaño = [];
						grapas_cantidad = [];						
						$("#cuerpo_grapas").html("");
						$("#combo_grapas").val("no");
						$("#close_grapas").click();
					}
				  })
			}
			else{
				$("#close_grapas").click();
			}
		});

		$("#tabla_tintas").delegate(".btn_borrar_tinta", 'click', function (){
			var id=$(this).attr("id");
			id=id-1;
			arreglo_tipo.splice(id,1);
			arreglo_color.splice(id,1);
			arreglo_cantidad.splice(id,1);
			num=1;
			var datos="";
			for(var r=0;r<=arreglo_tipo.length-1;r++){
				datos=datos+"<tr id='fila_"+num+"'><td>Tinta "+num+": </td><td>"+arreglo_tipo[r]+"</td><td>"+arreglo_color[r]+"</td><td>"+arreglo_cantidad[r]+"ml</td><td><i id='"+num+"' class='btn_borrar_tinta btn btn-danger fa fa-trash'></i></td></tr>";
				num++;
			}
			$("#cuerpo_tintas").html(datos);
		});

		$("#btn_add_tintas").on("click",function (){			  
			var cuerpo=$("#cuerpo_tintas").html();
			var tipo=$('#combo_tipo_tinta').val();
			var color=$('#txt_color_tinta').val();
			var cantidad=$('#txt_cantidad_tinta').val();
			var bandera=true;
			var mensaje="";
			if(tipo=="vacio"){
				mensaje="Debe seleccionar un tipo de tinta";
				bandera=false;
			}
			else if(color==""){
				mensaje="Debe ingresar un color";
				bandera=false;
			}
			else if(cantidad==""){
				mensaje="Debe ingresar una cantidad";
				bandera=false;
			}
			if(!bandera){
				$('#mensaje_tintas').html('<div class="alert alert-danger col-sm-11" role="alert"><strong >'+mensaje+'</strong></div>');
				$('#mensaje_tintas').show();
				remove_alert();
			}
			else{
				var contador_tintas = $('#cuerpo_tintas tr').length;
				contador_tintas++;
				var datos="<tr id='fila_"+contador_tintas+"'><td>Tinta "+contador_tintas+": </td><td>"+tipo+"</td><td>"+color+"</td><td>"+cantidad+"ml</td><td><i id='"+contador_tintas+"' class='btn_borrar_tinta btn btn-danger fa fa-trash'></i></td></tr>";
				cuerpo=cuerpo+datos;
				arreglo_tipo.push(tipo);
				arreglo_color.push(color);
				arreglo_cantidad.push(cantidad);
				$("#cuerpo_tintas").html(cuerpo);
				$('#combo_tipo_tinta').val('vacio');
				$('#txt_color_tinta').val('');
				$('#txt_cantidad_tinta').val('');
			}
		});

		$("#btn_add_grapas").on("click",function (){			  
			var cuerpo=$("#cuerpo_grapas").html();
			var tamaño=$('#combo_tamaño_grapa').val();
			var cantidad=$('#txt_cantidad_grapa').val();
			var bandera=true;
			var mensaje="";
			if(tamaño=="vacio"){
				mensaje="Debe seleccionar un tamaño de grapa";
				bandera=false;
			}
			else if(cantidad==""){
				mensaje="Debe ingresar una cantidad";
				bandera=false;
			}
			if(!bandera){
				$('#mensaje_grapas').html('<div class="alert alert-danger col-sm-11" role="alert"><strong >'+mensaje+'</strong></div>');
				$('#mensaje_grapas').show();
				remove_alert();
			}
			else{
				var contador_grapas = $('#cuerpo_grapas tr').length;
				contador_grapas++;
				var datos="<tr id='fila_"+contador_grapas+"'><td>"+contador_grapas+": </td><td>"+tamaño+"</td><td>"+cantidad+"</td><td><i id='"+contador_grapas+"' class='btn_borrar_grapas btn btn-danger fa fa-trash'></i></td></tr>";
				cuerpo=cuerpo+datos;
				grapas_tamaño.push(tamaño);
				grapas_cantidad.push(cantidad);
				$("#cuerpo_grapas").html(cuerpo);
				$('#combo_tamaño_grapa').val('vacio');			
				$('#txt_cantidad_grapa').val('');
			}
		});

		$("#tabla_grapas").delegate(".btn_borrar_grapas", 'click', function (){
			var id=$(this).attr("id");
			id=id-1;
			grapas_tamaño.splice(id,1);
			grapas_cantidad.splice(id,1);
			num=1;
			var datos="";
			for(var r=0;r<=grapas_cantidad.length-1;r++){
				datos=datos+"<tr id='fila_"+num+"'><td>"+num+": </td><td>"+grapas_tamaño[r]+"</td><td>"+grapas_cantidad[r]+"</td><td><i id='"+num+"' class='btn_borrar_grapas btn btn-danger fa fa-trash'></i></td></tr>";
				num++;
			}
			$("#cuerpo_grapas").html(datos);
		});




		function remove_alert(){
			window.setTimeout(function() {
				$(".alert").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove();
			});
			}, 5000); 
		}
		
		

		$("#combo_componentes").change(function (){
			var valor=$(this).val();
			if(valor==="caja"){
				Swal.mixin({
					input: 'text',
					confirmButtonText: 'Next &rarr;',
					showCancelButton: false,
					allowOutsideClick: false,
					progressSteps: ['1', '2', '3'],
					inputValidator: (value) => {
						if (!value) {
						  return 'Debes ingresar un valor válido!'
						}
					  }
				  }).queue([
					{
					  title: 'Medidas internas',
					  text: 'Alto (mm)'
					},
					{
						title: 'Medidas internas',
						text: 'Ancho (mm)'
					},
					{
						title: 'Medidas internas',
						text: 'Largo (mm)'
					},
				  ]).then((result) => {
					if (result.value) {
					  //const answers = JSON.stringify(result.value)
					  if(result.value[0]=="" || result.value[1]=="" || result.value[2]==""){
						Swal.fire({
							title: 'Advertencia',
							text: 'Debe ingresar los 3 valores solicitados',
							confirmButtonText: 'Aceptar'
						  });
						  $("#combo_componentes").val("vacio");
					  }
					  $('#help_caracteristicas').html("Al: "+result.value[0]+"mm x An: "+result.value[1]+"mm x La: "+result.value[2]+"mm");
					}
				  })
			}
		});

	}