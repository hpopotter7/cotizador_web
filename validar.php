<?php 
	include ('conexion.php');
	
			$correo=$_POST['user_name'];
			$password=$_POST['user_password'];
			
			$valida= "SELECT * FROM user_demo WHERE email='$correo' AND password='$password'";
			
			$resultado= mysql_query($valida);
			
			//USO DEL RESULTADO DE LA CONSULTA
			$total= mysql_num_rows($resultado);
			$datos= mysql_fetch_array($resultado);
			
			if($total==1){
					session_start();
					$_SESSION['id_cliente'] = $datos['id_cliente'];
					$_SESSION['nombre'] = $datos['nombre'];					
					$_SESSION['password'] = $datos['password'];					
					
					header('Location: index.php');
			}
			else{
				echo "No se encuentra el usuario";
			}
?>