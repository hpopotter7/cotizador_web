<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
    # conectare la base de datos
    //$con = new mysqli("157.230.172.237:3306", "tiwcommx_cotizador", "@Matrix_2020", "tiwcommx_cotizador");

    $con=@mysqli_connect("209.59.139.52:3306", "admini27_cotizador", "@ERPideas2019", "admini27_cotizador");
    /*
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    */
?>
