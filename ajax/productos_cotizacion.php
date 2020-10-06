<?php

	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array('codigo_producto', 'material_primario', 'material_especifico', 'tipo_contenedor');//Columnas de busqueda
		 $sTable = "productos_demo";
		 $sWhere = "";
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 5; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './index.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr  class="warning">
					<th>Código</th>
					<th>Producto</th>
					<th>Material primario</th>
					<th>Material especifico</th>
					<th>Tipo de contenedor</th>
					<th style="width: 300px;text-align: center;">Dimensiones</th>
					<th style="width: 25px;"></th>
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
					$id_producto=$row['id_producto'];
					$codigo_producto=$row['codigo_producto'];
					$nombre_producto=$row['nombre_componente'];
					//$id_marca_producto=$row['id_marca_producto'];
					$codigo_producto=$row["codigo_producto"];
					//$sql_marca=mysqli_query($con, "select nombre_marca from marcas_demo where id_marca='$id_marca_producto'");
					//$rw_marca=mysqli_fetch_array($sql_marca);
					//$nombre_marca=$rw_marca['nombre_marca'];
					$tipo_contenedor=$row['tipo_contenedor'];
					$material_primario=$row["material_primario"];
					$material_especifico=$row["material_especifico"];
					//$precio_venta=number_format($precio_venta,2);
					?>
					<tr>
						<td class="col-xs-1"><? echo $codigo_producto; ?></td>
						<td class="col-xs-2"><? echo $nombre_producto; ?></td>
						<td class="col-xs-2"><? echo $material_primario; ?></td>
						<td class="col-xs-2"><? echo $material_especifico; ?></td>
						<td class="col-xs-2"><? echo $tipo_contenedor; ?></td>
						<td class="col-xs-2">
							<div class="pull-right dimensiones">
							<input type="text" class="form-control" style="width:30%; margin-left:5px;text-align:right" id="alto_<? echo $id_producto; ?>" placeholder='Alto' >							
							<input type="text" class="form-control" style="width:30%; margin-left:5px;text-align:right" id="ancho_<? echo $id_producto; ?>" placeholder='Ancho' >
							<input type="text" class="form-control" style="width:30%; margin-left:5px;text-align:right" id="largo_<? echo $id_producto; ?>" placeholder='Largo' >
							</div>
						</td>

						<!-- <td class='col-xs-1'>
						<div class="pull-right">
						<input type="text" class="form-control" style="text-align:right" id="cantidad_<? echo $id_producto; ?>"  value="1" >
						</div></td>
						<td class='col-xs-2'><div class="pull-right">
						<input type="text" class="form-control" style="text-align:right" id="precio_venta_<? echo $id_producto; ?>"  value="<? echo $precio_venta;?>" >
						</div></td> -->
						<? 
						$array=[$nombre_producto, $material_primario, $material_especifico, $tipo_contenedor, $id_producto];
						$json = json_encode($array);?>
						<td ><span class="pull-right"><a href="#" onclick='añadir(<?php echo $json; ?>)'><i class="fa fa-plus"></i></a></span></td>
						
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=5><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>