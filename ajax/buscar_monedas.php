<?php
	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array('Nombre', 'Simbolo');//Columnas de busqueda
		 $sTable = "monedas";
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
					<th>Nombre</th>
					<th>Simbolo</th>
					<th>Eliminar</th>
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
					$id_moneda=$row['id_moneda'];
					$nombre_moneda=$row['Nombre'];
                    $simbolo_moneda=$row['Simbolo'];
					?>
					<tr>
						<td><? echo $id_moneda; ?></td>
						<td><? echo $nombre_moneda; ?></td>
						<td ><? echo $simbolo_moneda; ?></td>
						<td ><span class="pull-right"><a href="#" onclick="eliminar('<? echo $id_moneda ?>')"><i class="fa fa-trash" style='color:red'></i></a></span></td>
					</tr>
					<?php
				}
                ?>
                
			  </table>
			</div>
			<?php
		}
	}
?>