<?php
    $tabla=$_POST['TABLA'];
    $dato_mensaje=$_POST['dato_mensaje'];
    $columnas=$_POST['columnas'];
    $values="";
    $cont=0;
    $tamaño=count($_POST);
    $limite=$tamaño-3;
    foreach ($_POST as $key => $value) {
        if($cont<$limite){
            //echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
            $values=$values."'".$value."', ";
        }
        $cont++;
        
    }
    $values = substr_replace( $values, "", -2 );

    include("../config/conexion.php");
    if (mysqli_connect_errno()) {
	    printf("Error de conexion: %s\n", mysqli_connect_error());
	    exit();
	}
        $result = $con->query("SET NAMES 'utf8'");
        $sql="insert into ".$tabla." (".$columnas.") values(".$values.");";
        
        if ($con->query($sql)) {
            $respuesta= '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>	
                <strong>¡Bien hecho!</strong>
                '.$dato_mensaje.' ha sido ingresado satisfactoriamente.</div>
                </table>
            </div>';
        }
        else{
            $respuesta=mysqli_error($con);
        }
        echo $respuesta;
?>
                
					 