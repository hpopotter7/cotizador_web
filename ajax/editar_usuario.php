<?php
    $id_usuario=$_POST['mod_id'];
    $username=$_POST['mod_username'];
    $nombre=$_POST['mod_nombre'];
    $email=$_POST['mod_email'];
    $grupo=$_POST['mod_grupo'];
    include("../config/conexion.php");
    if (mysqli_connect_errno()) {
	    printf("Error de conexion: %s\n", mysqli_connect_error());
	    exit();
	}
        $result = $con->query("SET NAMES 'utf8'");
        $sql="update usuarios set Username='".$username."', nombre='".$nombre."', Email='".$email."', Grupo='".$grupo."' where id_usuario=".$id_usuario;
        if ($con->query($sql)) {
            $respuesta= '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>	
                <strong>¡Bien hecho!</strong>
                Usuario ha sido actualizado satisfactoriamente.</div>
                </table>
            </div>';
        }
        else{
            $respuesta=mysqli_error($con)."-".$sql;
        }
        echo $respuesta;
?>
                
					 