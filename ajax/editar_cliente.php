<?php
    $id_cliente=$_POST['mod_id'];
    $razon_social=$_POST['mod_razon_social'];
    $rfc=$_POST['mod_rfc'];
    $giro=$_POST['mod_giro'];
    $direccion=$_POST['mod_direccion'];
    $contacto=$_POST['mod_contacto'];
    $correo_contacto=$_POST['mod_email'];
    $telefono=$_POST['mod_telefono'];
    include("../config/conexion.php");
    if (mysqli_connect_errno()) {
	    printf("Error de conexion: %s\n", mysqli_connect_error());
	    exit();
	}
        $result = $con->query("SET NAMES 'utf8'");
        $sql="update clientes set Razon_Social='".$razon_social."', RFC='".$rfc."', Giro='".$giro."', Direccion='".$direccion."', Contacto='".$contacto."', Correo_contacto='".$correo_contacto."', Telefono='".$telefono."' where id_cliente=".$id_cliente;
        if ($con->query($sql)) {
            $respuesta= '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>	
                <strong>¡Bien hecho!</strong>
                Cliente ha sido actualizado satisfactoriamente.</div>
                </table>
            </div>';
        }
        else{
            $respuesta=mysqli_error($con)."-".$sql;
        }
        echo $respuesta;
?>
                
					 