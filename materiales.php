
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Materiales - Cotizador Web</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
	<link rel="icon" href="assets/images/cart_icon2.png">
	 <!--alerts CSS -->
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"><!-- summernotes CSS -->
<link href="assets/plugins/summernote/dist/summernote-bs4.css" rel="stylesheet" />
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
		        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b>
                            <!-- Light Logo icon -->
                            <img src="assets/images/cart_icon.png" alt="homepage" class="light-logo" style="width:34px" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         
                         <!-- Light Logo text -->  
						<span class='text-white'> Cotizador <b>Web</b></span>						 
                         
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        
                       
    
                    </ul>
                   
                    <ul class="navbar-nav my-lg-0">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-user'></i> demo</a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li> 
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="assets/images/users/avatar.png" alt="user"></div>
                                            <div class="u-text">
                                                <h4>demo</h4>
                                                <p class="text-muted">demo@gmail.com</p></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="usuarios.php?profile=1"><i class="ti-user"></i> Mi Perfil</a></li>
                                    <li><a href="cotizaciones.php?type=1"><i class="ti-wallet"></i> Mis cotizaciones</a></li>
                                    
                                    <li role="separator" class="divider"></li>
                                   
                                    <li><a href="login.php?logout"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
          include("menu.html");
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Productos</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item">Catálogo</li>
							<li class="breadcrumb-item active">Productos</li>
                        </ol>
                    </div>
					
					 <div class="col-md-6 col-4 align-self-center">
						
                        <button class="btn float-right  btn-success" data-toggle="modal" data-target="#addModalProduct"><i class="mdi mdi-plus-circle"></i> <span class='hidden-sm-down'>Nuevo</span></button>
                        <div class="dropdown float-right m-r-10 hidden-sm-down">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Importar datos </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;"> 
								
								<a class="dropdown-item" href="#importar_modal" data-toggle="modal"><i class="mdi mdi-file-excel"></i> Hoja de cálculo</a>
								<a class="dropdown-item" href="assets/template/formato_importacion_productos.xlsx" ><i class="mdi mdi-download"></i> Descargar formato</a>
								 
							</div>
                        </div>
                    </div>
                    
                </div>
				
				
				
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
					<!-- Modal -->
	<div class="modal fade " id="addModalProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		 </div>
		  <div class="modal-body">
			
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			
			<div class="row">
				<div class="col-md-6">
					<label for="codigo" class="control-label">Código</label>
					<input type="text" class="form-control" id="codigo" name="codigo" placeholder="" required>
				</div>
				<div class="col-md-6">
					<label for="modelo" class="control-label">Modelo</label>
					<input type="text" class="form-control" id="modelo" name="modelo" placeholder="" >
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="nombre" class="control-label">Nombre o descripción del producto</label>
					<textarea  id="nombre" name="nombre" class='form-control summernote' ></textarea >
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label for="fabricante" class="control-label">Fabricante</label>
					<select class="form-control" id="fabricante" name="fabricante">
					<option value="">-- Selecciona --</option>
											<option value="10">3M</option>
												<option value="8">Chile Empresas</option>
												<option value="7">Daker</option>
												<option value="12">Evolis</option>
												<option value="3">la colina</option>
												<option value="4">la colina</option>
												<option value="5">Obekorn</option>
												<option value="6">Polar</option>
												<option value="2">Poseidon</option>
												<option value="1">stih</option>
												<option value="9">SUPLIDORA INDUSTRIAL 6 SGIMA, C.A.</option>
										  </select>
				</div>
				<div class="col-md-4">
					<label for="estado" class="control-label">Estado</label>
					 <select class="form-control" id="estado" name="estado" required>
						<option value="">-- Selecciona --</option>
						<option value="1" selected>Activo</option>
						<option value="0">Inactivo</option>
					</select>
				</div>
				<div class="col-md-4">
					<label for="precio" class="control-label">Precio</label>
					<input type="text" class="form-control" id="precio" name="precio" placeholder="" required pattern="^[0-9]{1,11}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="13">
				</div>
			</div>			
			 
			  
			 
			 
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>	<!-- Modal -->
	<div class="modal fade" id="editModalProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar producto</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_producto" name="editar_producto">
			
			<div class="row">
				<div class="col-md-6">
					<label for="codigo" class="control-label">Código</label>
					<input type="text" class="form-control" id="mod_codigo" name="mod_codigo" placeholder="Código del producto" required>
					<input type="hidden" name="mod_id" id="mod_id">
				</div>
				<div class="col-md-6">
					<label for="modelo" class="control-label">Modelo</label>
					<input type="text" class="form-control" id="mod_modelo" name="mod_modelo" placeholder="Modelo del producto" >
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="mod_nombre" class="control-label">Nombre o descripción del producto</label>
					<textarea  id="mod_nombre" name="mod_nombre" class='form-control'></textarea >
				</div>
			</div>
			  
			<div class="row">
				<div class="col-md-4">
					<label for="mod_fabricante" class="control-label">Fabricante</label>
					 <select class="form-control" id="mod_fabricante" name="mod_fabricante">
					<option value="">-- Selecciona --</option>
											<option value="10">3M</option>
												<option value="8">Chile Empresas</option>
												<option value="7">Daker</option>
												<option value="12">Evolis</option>
												<option value="3">la colina</option>
												<option value="4">la colina</option>
												<option value="5">Obekorn</option>
												<option value="6">Polar</option>
												<option value="2">Poseidon</option>
												<option value="1">stih</option>
												<option value="9">SUPLIDORA INDUSTRIAL 6 SGIMA, C.A.</option>
										  </select>
				</div>
				<div class="col-md-4">
					<label for="mod_estado" class="control-label">Estado</label>
					<select class="form-control" id="mod_estado" name="mod_estado" required>
						<option value="">-- Selecciona --</option>
						<option value="1" selected>Activo</option>
						<option value="0">Inactivo</option>
					</select>
				</div>
				<div class="col-md-4">
					<label for="mod_precio" class="control-label">Precio</label>
					<input type="text" class="form-control" id="mod_precio" name="mod_precio" placeholder="Precio de venta del producto" required pattern="^[0-9]{1,11}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="13">
				</div>
			</div>	
			 
			 
			  
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div> 
<form method="post" id="importar_datos" name="importar_datos" enctype="multipart/form-data">
<!-- Modal -->
<div class="modal fade " id="importar_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
		<h4 class="modal-title"><i class='fa fa-file'></i> Importar datos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body" >
		<div class="form-group">
			<label for="periodo_imp" class="control-label">Selecciona archivo</label>
			<input type="file" class='form-control' name="archivo" id="archivo" required>
			<p class="help-block">Carga tus productos desde una hoja de cálculo, ya sea en formato .xlsx ó .ods. Para realizar la importación de datos, asegúrate de usar el formato correcto. Puedes descargarlo aquí: <a href="assets/template/formato_importacion_productos.xlsx">Formato de importación de productos</a>  </p>
		</div>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary importar_datos"> Importar datos</button>
      </div>
    </div>
  </div>
</div>
</form>								<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Buscar productos</h4>
                                  <div class="row">
                                    <div class="col-md-3 nopadding">
										<input type="text" class="form-control" id="q" placeholder="Buscar por el código" onkeyup='load(1);'>
									</div>

									<div class="col-md-4 nopadding">
										<input type="text" class="form-control" id="q2" placeholder="Buscar por el nombre" onkeyup='load(1);'>
									</div>
                                    <div class="col-md-4 nopadding">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
											
												<select class="form-control" id="q3" onchange="load(1);">
													<option value="">Selecciona fabricante</option>
																												<option value="10">3M</option>
																														<option value="8">Chile Empresas</option>
																														<option value="7">Daker</option>
																														<option value="12">Evolis</option>
																														<option value="3">la colina</option>
																														<option value="4">la colina</option>
																														<option value="5">Obekorn</option>
																														<option value="6">Polar</option>
																														<option value="2">Poseidon</option>
																														<option value="1">stih</option>
																														<option value="9">SUPLIDORA INDUSTRIAL 6 SGIMA, C.A.</option>
																											</select>
												
												<span class="input-group-btn input-group-append">
													<button class="btn btn-secondary btn-outline bootstrap-touchspin-up" type="button" onclick="load(1);"><i class='fa fa-search'></i> Buscar</button>
												</span>
											</div>
                                                
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-1">
										<span id="loader"></span>
									</div>
									
									
									
									
									
									
									
                                </div>
								<div class="row">

									<div id="resultados" class='col-sm-12 '></div><!-- Carga los datos ajax -->
                                    <div class='outer_div' class='col-sm-12 ' style="width:100%"></div><!-- Carga los datos ajax -->
                                    <div class="outer_div" style="width:100%">			<div class="table-responsive">
			  <span id="descripcion136" style="display:none"><p>rdfsaf</p><span>
					</span><span>
					</span></span><span id="descripcion135" style="display:none">Software online encargado de la gestión documental.&nbsp;<span>
					</span></span><span id="descripcion92" style="display:none">ip<span>
					</span></span><span id="descripcion83" style="display:none">PASTILLA SQUARE D 1X30 127V<span>
					</span></span><span id="descripcion82" style="display:none">gfdgd<span>
					</span></span><span id="descripcion76" style="display:none">Sistema web con angular y net core 3.0<span>
					</span></span><span id="descripcion71" style="display:none">Lector de huella<span>
					</span></span><span id="descripcion69" style="display:none">fsaf sdfsdf sdf<span></span><span></span><span>
					</span><span>
					</span></span><span id="descripcion67" style="display:none">Producto 1<span>
					</span></span><span id="descripcion66" style="display:none">ml359<span>
					</span></span><table class="table">
				<tbody><tr class="warning">
					<th>Código</th>
					<th>Modelo</th>
					<th>Producto</th>
					<th>Fabricante</th>
					<th>Estado</th>
					<th>Agregado</th>
					<th><span class="pull-right">Precio</span></th>
										<th class="text-right">Acciones</th>
									</tr>
									
					<input type="hidden" value="fadsfadsfadsf" id="codigo_producto136">
					<input type="hidden" value="ds" id="modelo_producto136">
					<input type="hidden" value="<p>rdfsaf</p><span>
					</span>" id="nombre_producto136">
					<input type="hidden" value="3M" id="fabricante136">
					<input type="hidden" value="Activo" id="estado136">
					<input type="hidden" value="12000.00" id="precio_producto136">
					<tr>
						<td>fadsfadsfadsf</td>
						<td>ds</td>
						<td><p>rdfsaf</p><span>
					</span></td>
						<td>3M</td>
						<td>Activo</td>
						<td>21/09/2020</td>
						<td>$<span class="pull-right">12.000,00</span></td>
										<td class="text-right">
										<button type="button" class="btn btn-success" title="Agregar a cotización" onclick="agregar_cotizacion('136');"><i class="fa fa-shopping-cart"></i></button> 
					<a href="#" class="btn btn-info" title="Editar producto" onclick="obtener_datos('136');" data-toggle="modal" data-target="#editModalProduct"><i class="fa fa-edit"></i></a> 
										<a href="#" class="btn btn-danger" title="Borrar producto" onclick="eliminar('136')"><i class="fa fa-trash"></i> </a>
										</td>
						
					</tr>
										
					<input type="hidden" value="001" id="codigo_producto135">
					<input type="hidden" value="Software Gestión de Archivo" id="modelo_producto135">
					<input type="hidden" value="Software online encargado de la gestión documental.&amp;nbsp;" id="nombre_producto135">
					<input type="hidden" value="" id="fabricante135">
					<input type="hidden" value="Activo" id="estado135">
					<input type="hidden" value="2500000.00" id="precio_producto135">
					<tr>
						<td>001</td>
						<td>Software Gestión de Archivo</td>
						<td>Software online encargado de la gestión documental.&nbsp;</td>
						<td></td>
						<td>Activo</td>
						<td>21/09/2020</td>
						<td>$<span class="pull-right">2.500.000,00</span></td>
										<td class="text-right">
										<button type="button" class="btn btn-success" title="Agregar a cotización" onclick="agregar_cotizacion('135');"><i class="fa fa-shopping-cart"></i></button> 
					<a href="#" class="btn btn-info" title="Editar producto" onclick="obtener_datos('135');" data-toggle="modal" data-target="#editModalProduct"><i class="fa fa-edit"></i></a> 
										<a href="#" class="btn btn-danger" title="Borrar producto" onclick="eliminar('135')"><i class="fa fa-trash"></i> </a>
										</td>
						
					</tr>
										
					<input type="hidden" value="001" id="codigo_producto92">
					<input type="hidden" value="camara ip" id="modelo_producto92">
					<input type="hidden" value="ip" id="nombre_producto92">
					<input type="hidden" value="Chile Empresas" id="fabricante92">
					<input type="hidden" value="Activo" id="estado92">
					<input type="hidden" value="10000.00" id="precio_producto92">
					<tr>
						<td>001</td>
						<td>camara ip</td>
						<td>ip</td>
						<td>Chile Empresas</td>
						<td>Activo</td>
						<td>10/08/2020</td>
						<td>$<span class="pull-right">10.000,00</span></td>
										<td class="text-right">
										<button type="button" class="btn btn-success" title="Agregar a cotización" onclick="agregar_cotizacion('92');"><i class="fa fa-shopping-cart"></i></button> 
					<a href="#" class="btn btn-info" title="Editar producto" onclick="obtener_datos('92');" data-toggle="modal" data-target="#editModalProduct"><i class="fa fa-edit"></i></a> 
										<a href="#" class="btn btn-danger" title="Borrar producto" onclick="eliminar('92')"><i class="fa fa-trash"></i> </a>
										</td>
						
					</tr>
										
					<input type="hidden" value="QO130" id="codigo_producto83">
					<input type="hidden" value="" id="modelo_producto83">
					<input type="hidden" value="PASTILLA SQUARE D 1X30 127V" id="nombre_producto83">
					<input type="hidden" value="SUPLIDORA INDUSTRIAL 6 SGIMA, C.A." id="fabricante83">
					<input type="hidden" value="Activo" id="estado83">
					<input type="hidden" value="127.23" id="precio_producto83">
					<tr>
						<td>QO130</td>
						<td></td>
						<td>PASTILLA SQUARE D 1X30 127V</td>
						<td>SUPLIDORA INDUSTRIAL 6 SGIMA, C.A.</td>
						<td>Activo</td>
						<td>23/07/2020</td>
						<td>$<span class="pull-right">127,23</span></td>
										<td class="text-right">
										<button type="button" class="btn btn-success" title="Agregar a cotización" onclick="agregar_cotizacion('83');"><i class="fa fa-shopping-cart"></i></button> 
					<a href="#" class="btn btn-info" title="Editar producto" onclick="obtener_datos('83');" data-toggle="modal" data-target="#editModalProduct"><i class="fa fa-edit"></i></a> 
										<a href="#" class="btn btn-danger" title="Borrar producto" onclick="eliminar('83')"><i class="fa fa-trash"></i> </a>
										</td>
						
					</tr>
										
					<input type="hidden" value="3232" id="codigo_producto82">
					<input type="hidden" value="3232" id="modelo_producto82">
					<input type="hidden" value="gfdgd" id="nombre_producto82">
					<input type="hidden" value="Evolis" id="fabricante82">
					<input type="hidden" value="Activo" id="estado82">
					<input type="hidden" value="32.00" id="precio_producto82">
					<tr>
						<td>3232</td>
						<td>3232</td>
						<td>gfdgd</td>
						<td>Evolis</td>
						<td>Activo</td>
						<td>22/07/2020</td>
						<td>$<span class="pull-right">32,00</span></td>
										<td class="text-right">
										<button type="button" class="btn btn-success" title="Agregar a cotización" onclick="agregar_cotizacion('82');"><i class="fa fa-shopping-cart"></i></button> 
					<a href="#" class="btn btn-info" title="Editar producto" onclick="obtener_datos('82');" data-toggle="modal" data-target="#editModalProduct"><i class="fa fa-edit"></i></a> 
										<a href="#" class="btn btn-danger" title="Borrar producto" onclick="eliminar('82')"><i class="fa fa-trash"></i> </a>
										</td>
						
					</tr>
										
					<input type="hidden" value="A0001" id="codigo_producto76">
					<input type="hidden" value="Web" id="modelo_producto76">
					<input type="hidden" value="Sistema web con angular y net core 3.0" id="nombre_producto76">
					<input type="hidden" value="3M" id="fabricante76">
					<input type="hidden" value="Activo" id="estado76">
					<input type="hidden" value="8000.00" id="precio_producto76">
					<tr>
						<td>A0001</td>
						<td>Web</td>
						<td>Sistema web con angular y net core 3.0</td>
						<td>3M</td>
						<td>Activo</td>
						<td>11/07/2020</td>
						<td>$<span class="pull-right">8.000,00</span></td>
										<td class="text-right">
										<button type="button" class="btn btn-success" title="Agregar a cotización" onclick="agregar_cotizacion('76');"><i class="fa fa-shopping-cart"></i></button> 
					<a href="#" class="btn btn-info" title="Editar producto" onclick="obtener_datos('76');" data-toggle="modal" data-target="#editModalProduct"><i class="fa fa-edit"></i></a> 
										<a href="#" class="btn btn-danger" title="Borrar producto" onclick="eliminar('76')"><i class="fa fa-trash"></i> </a>
										</td>
						
					</tr>
										
					<input type="hidden" value="123" id="codigo_producto71">
					<input type="hidden" value="abc" id="modelo_producto71">
					<input type="hidden" value="Lector de huella" id="nombre_producto71">
					<input type="hidden" value="Poseidon" id="fabricante71">
					<input type="hidden" value="Activo" id="estado71">
					<input type="hidden" value="1230.00" id="precio_producto71">
					<tr>
						<td>123</td>
						<td>abc</td>
						<td>Lector de huella</td>
						<td>Poseidon</td>
						<td>Activo</td>
						<td>26/06/2020</td>
						<td>$<span class="pull-right">1.230,00</span></td>
										<td class="text-right">
										<button type="button" class="btn btn-success" title="Agregar a cotización" onclick="agregar_cotizacion('71');"><i class="fa fa-shopping-cart"></i></button> 
					<a href="#" class="btn btn-info" title="Editar producto" onclick="obtener_datos('71');" data-toggle="modal" data-target="#editModalProduct"><i class="fa fa-edit"></i></a> 
										<a href="#" class="btn btn-danger" title="Borrar producto" onclick="eliminar('71')"><i class="fa fa-trash"></i> </a>
										</td>
						
					</tr>
										
					<input type="hidden" value="ser4" id="codigo_producto69">
					<input type="hidden" value="vvcvc" id="modelo_producto69">
					<input type="hidden" value="fsaf sdfsdf sdf<span></span><span></span><span>
					</span>" id="nombre_producto69">
					<input type="hidden" value="Poseidon" id="fabricante69">
					<input type="hidden" value="Inactivo" id="estado69">
					<input type="hidden" value="50.00" id="precio_producto69">
					<tr>
						<td>ser4</td>
						<td>vvcvc</td>
						<td>fsaf sdfsdf sdf<span></span><span></span><span>
					</span></td>
						<td>Poseidon</td>
						<td>Inactivo</td>
						<td>24/06/2020</td>
						<td>$<span class="pull-right">50,00</span></td>
										<td class="text-right">
										<button type="button" class="btn btn-success" title="Agregar a cotización" onclick="agregar_cotizacion('69');"><i class="fa fa-shopping-cart"></i></button> 
					<a href="#" class="btn btn-info" title="Editar producto" onclick="obtener_datos('69');" data-toggle="modal" data-target="#editModalProduct"><i class="fa fa-edit"></i></a> 
										<a href="#" class="btn btn-danger" title="Borrar producto" onclick="eliminar('69')"><i class="fa fa-trash"></i> </a>
										</td>
						
					</tr>
										
					<input type="hidden" value="1" id="codigo_producto67">
					<input type="hidden" value="1" id="modelo_producto67">
					<input type="hidden" value="Producto 1" id="nombre_producto67">
					<input type="hidden" value="Evolis" id="fabricante67">
					<input type="hidden" value="Activo" id="estado67">
					<input type="hidden" value="1.00" id="precio_producto67">
					<tr>
						<td>1</td>
						<td>1</td>
						<td>Producto 1</td>
						<td>Evolis</td>
						<td>Activo</td>
						<td>21/06/2020</td>
						<td>$<span class="pull-right">1,00</span></td>
										<td class="text-right">
										<button type="button" class="btn btn-success" title="Agregar a cotización" onclick="agregar_cotizacion('67');"><i class="fa fa-shopping-cart"></i></button> 
					<a href="#" class="btn btn-info" title="Editar producto" onclick="obtener_datos('67');" data-toggle="modal" data-target="#editModalProduct"><i class="fa fa-edit"></i></a> 
										<a href="#" class="btn btn-danger" title="Borrar producto" onclick="eliminar('67')"><i class="fa fa-trash"></i> </a>
										</td>
						
					</tr>
										
					<input type="hidden" value="232" id="codigo_producto66">
					<input type="hidden" value="proliant" id="modelo_producto66">
					<input type="hidden" value="ml359" id="nombre_producto66">
					<input type="hidden" value="la colina" id="fabricante66">
					<input type="hidden" value="Activo" id="estado66">
					<input type="hidden" value="23.00" id="precio_producto66">
					<tr>
						<td>232</td>
						<td>proliant</td>
						<td>ml359</td>
						<td>la colina</td>
						<td>Activo</td>
						<td>19/06/2020</td>
						<td>$<span class="pull-right">23,00</span></td>
										<td class="text-right">
										<button type="button" class="btn btn-success" title="Agregar a cotización" onclick="agregar_cotizacion('66');"><i class="fa fa-shopping-cart"></i></button> 
					<a href="#" class="btn btn-info" title="Editar producto" onclick="obtener_datos('66');" data-toggle="modal" data-target="#editModalProduct"><i class="fa fa-edit"></i></a> 
										<a href="#" class="btn btn-danger" title="Borrar producto" onclick="eliminar('66')"><i class="fa fa-trash"></i> </a>
										</td>
						
					</tr>
									
			  </tbody></table>
				<div class="float-right">
					<nav aria-label="Page navigation example"> <ul class="pagination"><li class="disabled page-item"><span><a class="page-link">‹ Siguiente</a></span></li><li class="page-item active"><a class="page-link">1</a></li><li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="load(2)">2</a></li><li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="load(3)">3</a></li><li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="load(4)">4</a></li><li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="load(5)">5</a></li><li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="load(6)">6</a></li><li class="page-item"><span><a class="page-link" href="javascript:void(0);" onclick="load(2)">Anterior ›</a></span></li></ul></nav>				</div>
			</div>
			</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
								

				
               
				
				
				
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
	
		<script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/js/custom.min.js"></script>
	<!--Sweetalert plugin -->
	<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>	<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
	<script type="text/javascript" src="assets/js/materiales.js"></script>
	
 </body>
</html>
