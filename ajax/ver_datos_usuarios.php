<?php 
$id=$_POST['id'];
include("../config/conexion.php");

if (mysqli_connect_errno()) {
    printf("Error de conexion: %s\n", mysqli_connect_error());
    exit();
}
$result = $con->query("SET NAMES 'utf8'");
$sql="SELECT * FROM usuarios where id_usuario=".$id;
if ($result = $con->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $return = Array('id_usuario'=>$row['id_usuario'],
                        'username'=>$row['Username'], 
                    	'nombre'=>$row['Nombre'], 
                    	'email'=>$row['Email'], 
                    	'grupo'=>$row['Grupo'],
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

