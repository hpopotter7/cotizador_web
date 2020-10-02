<?php

    $id=$_POST['id'];
    $tabla=$_POST['tabla'];
    $dato=$_POST['dato'];
    $campo=$_POST['campo'];
    include("../config/conexion.php");
    if (mysqli_connect_errno()) {
	    printf("Error de conexion: %s\n", mysqli_connect_error());
	    exit();
	}
        $result = $con->query("SET NAMES 'utf8'");
        $sql="delete from ".$tabla." where ".$campo."=".$id;
        if ($con->query($sql)) {
            $respuesta= '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>	
                <strong>¡Bien hecho!</strong>
                '.$dato.' ha sido eliminado satisfactoriamente.</div>
                </table>
            </div>';
        }
        else{
            $respuesta=mysqli_error($con)."-".$sql;
        }
        echo $respuesta;
?>
           