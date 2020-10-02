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
		 $aColumns = array('RFC', 'Razon_Social');//Columnas de busqueda
		 $sTable = "clientes";
		 $sWhere = "";
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere=$sWhere." and Estatus='activo'";
			$sWhere .= ')';
		}
		else{
			$sWhere=$sWhere." where Estatus='activo'";
		}

		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 50; //how much records you want to show
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
              <tr class="warning">
					<th>ID</th>
					<th>Razon Social</th>
					<th>RFC</th>
					<th>Giro</th>
					<th>Dirección</th>
					<th>Contacto</th>
                    <th>Correo de contacto</th>
                    <th>Teléfono</th>
					<th class="text-right">Acciones</th>
										
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
					$id_cliente=$row['id_cliente'];
					$nombre_cliente=$row['Razon_Social'];
                    $rfc=$row['RFC'];
                    $giro=$row['Giro'];
                    $direccion=$row['Direccion'];
                    $nombre_contacto=$row['Contacto'];
                    $correo_contacto=$row['Correo_contacto'];
                    $telefono=$row['Telefono'];
					?>
					<tr>
						<td><? echo $id_cliente; ?></td>
						<td><? echo $nombre_cliente; ?></td>
						<td ><? echo $rfc; ?></td>
                        <td ><? echo $giro; ?></td>
                        <td ><? echo $direccion; ?></td>
                        <td ><? echo $nombre_contacto; ?></td>
                        <td ><? echo $correo_contacto; ?></td>
                        <td ><? echo $telefono; ?></td>
                        <td>
                        <div class="float-right">
                        <a href="#" title="Editar cliente" onclick="obtener_datos('<? echo $id_cliente; ?>');" data-toggle="modal" data-target="#myModal2"><i class="fa fa-edit fa-2x"></i></a>
                        <a href="#" title="Borrar cliente" onclick="eliminar('<? echo $id_cliente; ?>')"><i class="fa fa-trash fa-2x" style='color:red'></i></a>
                        </div>
                        </td>
					</tr>
					<?php
				}
                ?>
                </table>
				</div>
				<div class="float-right">
					<?
					// echo paginate($reload, $page, $total_pages, $adjacents);
					?>
				</div>
			
			<?php
		}
	}
?>