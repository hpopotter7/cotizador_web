<?php
  require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
?>
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
    <title>Perfil de empresa - Cotizador Web</title>
    <!-- Bootstrap Core CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
	<link rel="icon" href="assets/images/cart_icon2.png">
	 <!--alerts CSS -->
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"><link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">
</head>

<body class="fix-header card-no-border ">
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
                        <h3 class="text-themecolor mb-0 mt-0">Configurar datos de la empresa</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item ">Configuración</li>
							<li class="breadcrumb-item active">Configurar datos de la empresa</li>
                        </ol>
                    </div>
					
					 
                    
                </div>
				
				
				
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
				
								<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Configuración</h4>
								
																	

									
							<form  role="form" enctype="multipart/form-data" method="post" >	
                              <div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									<label>Nombre o Razón Social</label>
									<input type="text" name="nombre" id="nombre"  class="form-control" maxlength="150" value="TIW" required>
								</div>
								<div class="col-xs-12 col-md-6 form-group">
									<label>Actividad económica</label>
									<input class="form-control" name="giro" id="giro" type="text" value="Desarrollo de sistemas web a la medida" maxlength="150" required/>
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									<label>Propietario</label>
									<input class="form-control" name="propietario" id="propietario"  type="text" value="Marco Antonio Salazar Barrientos " maxlength="60" required/>
								</div>
								<div class="col-xs-12 col-md-6 form-group">
									<label>RFC</label>
									<input class="form-control" name="nrc" id="nrc" type="text" value="XXXXXXXX" maxlength="15" required/>
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									<label>Dirección</label>
									<textarea class="form-control" name="direccion" id="direccion" maxlength='255' required>2001 Corporativo, Av. Armando Birlain Shaffler 11, Centro Sur, 76090 Santiago de Querétaro, Qro.</textarea>
								</div>
								<div class="col-xs-12 col-md-6 form-group">
									<label>Teléfono</label>
									<input class="form-control" name="telefono" id="telefono" type="text" value="442 634 4358" maxlength='30' required/>
									
								</div>
								 <div class="col-xs-12 col-md-6 form-group">
									<label>Selecciona moneda</label>
									<select name="moneda" id="moneda" class='form-control'>
                                    <?php
                                        $sql="SELECT * FROM  monedas order by id_moneda asc";
                                        $query = mysqli_query($con, $sql);
                                        while ($row=mysqli_fetch_array($query)){
                                            $id_moneda=$row['id_moneda'];
                                            $nombre=$row['Nombre'];
                                    ?>
                                            <option value=''><? echo $nombre; ?></option>
                                            <?php
                                            }
                                            ?>
									</select>
                                </div>
                                <div class="col-xs-12 col-md-6 form-group">
																	
									<label>Correo electrónico</label>
									<input class="form-control" name="email" id="email" type="email" value="contacto@tiw.com.mx" maxlength='64' required/>
								</div>
								
							</div>
							
							<div class="row">
								
								
								<div class="col-xs-12 col-md-6 form-group">
									<label style="display:block;">Logo</label>
									<input type="file" id="input-file-now-custom-1" name="imagefile" class="dropify" data-default-file="assets/images/logo/logo.jpg" />
									
								</div>
								
							</div>
							
							<div class="row">
								
								
							</div>
							
							<div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									
								</div>
									
								<div class="col-xs-12 col-md-6 form-group">
									
									<button type="submit" class="btn btn-primary" name="guardar">Guardar datos</button>
								</div>
															</div>
							
					</form>		
							
								
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
	<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>	<script src="assets/plugins/dropify/dist/js/dropify.min.js"></script>
	<script>
    $(document).ready(function() {
        // Basic
       ;
		
		
		$('.dropify').dropify({
			messages: {
				'default': 'Arrastrar y soltar una imagen o click aquí.',
				'replace': 'Arrastra y suelta o haz clic para reemplazar.',
				'remove':  'Borrar',
				'error':   'Vaya, algo mal pasó.'
			}
		});

       
        
    });
    </script>
	
 </body>
</html>
