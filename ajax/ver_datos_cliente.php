<?php 
$id=$_POST['id'];
include("../config/conexion.php");

if (mysqli_connect_errno()) {
    printf("Error de conexion: %s\n", mysqli_connect_error());
    exit();
}
$result = $con->query("SET NAMES 'utf8'");
$sql="SELECT * FROM clientes where id_cliente=".$id;
if ($result = $con->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $return = Array('id_cliente'=>$row['id_cliente'],
                        'razon_social'=>$row['Razon_Social'], 
                    	'rfc'=>$row['RFC'], 
                    	'giro'=>$row['Giro'], 
                    	'direccion'=>$row['Direccion'],
                    	'contacto'=>$row['Contacto'],
                    	'correo_contacto'=>$row['Correo_contacto'],
                    	'telefono'=>$row['Telefono'],
                    	'prospecto'=>$row['Prospecto'],
        	);
    }
    /* cerramos la conexion */
    $result->close();
    $res=$res.json_encode($return)."\n";
    echo $res;
}
else{
    $result->close();
     $return = Array('error'=>mysqli_error($mysqli).$sql);
    $res=$res.json_encode($return)."\n";
    echo $res;
   exit();
}

$con->close();
?>

