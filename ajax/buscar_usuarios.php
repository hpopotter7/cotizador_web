<?php
	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array('Nombre', 'Email', 'Username');//Columnas de busqueda
		 $sTable = "usuarios";
		 $sWhere = "";
		if ( $_GET['q'] != "" ){
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		else{
			$sWhere=$sWhere." where Estatus='activo'";
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
		$sql="SELECT * FROM  $sTable $sWhere  LIMIT $offset,$per_page ";
		
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr  class="warning">
					<th>ID</th>
					<th>User</th>
					<th>Nombre</th>
                    <th>Email</th>
                    <th>Grupo</th>
                    <!-- <th>Estatus</th> -->
                    <th>Acciones</th>
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
					$id_usuario=$row['id_usuario'];
					$username=$row['Username'];
                    $nombre=$row['Nombre'];
                    $email=$row['Email'];
                    $grupo=$row['Grupo'];
					$estatus=$row['Estatus'];
					$icono="";
                    if($estatus=="Activo"){
						$estatus="<label class='label label-success'>".$estatus."</label>";
						$icono="<a href='#' style='color:red' onclick='eliminar(". $id_usuario.")' style='padding:7px'><i class='fa fa-trash fa-2x'></i></a>";
                    }
                    else{
						$estatus="<label class='label label-danger'>".$estatus."</label>";
						$icono="<a href='#' style='color:green' onclick='activar(". $id_usuario.")' style='padding:7px'><i class='fa fa-power-off fa-2x'></i></a>";
                    }
					?>
					<tr>
						<td><? echo $id_usuario; ?></td>
						<td><? echo $username; ?></td>
                        <td ><? echo $nombre; ?></td>
                        <td ><? echo $email; ?></td>
                        <td ><? echo $grupo; ?></td>
						<td >
						
						<a href="#" title="Editar usuario" onclick="obtener_datos('<? echo $id_usuario; ?>');" data-toggle="modal" data-target="#myModal2"><i class="fa fa-edit fa-2x"></i></a>
						<a href="#" style='color:red' onclick="eliminar('<? echo $id_usuario ?>')" style='padding:7px'><i class='fa fa-trash fa-2x'></i></a>
					</td>
					</tr>
					<?php
				}
                ?>
                <tr>
					<td colspan=10><span class="float-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
	
?>
