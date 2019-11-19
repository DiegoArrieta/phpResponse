<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}
include 'bd.php';
$conn = OpenCon();

$nombre = $_POST['formulario-nombre'];
$apellido = $_POST[''];
$fecha_inicio = $_POST[''];
$fecha_termino = $_POST[''];
$dias = $_POST[''];
$servicio = $_POST[''];
$habitacion = $_POST[''];
$costo = $_POST[''];
$pais = $_POST[''];
$sql = "INSERT INTO reservas (nombre, apellido, fecha_inicio, fecha_termino, dias, servicio, habitacion, costo,pais) VALUES (''$nombre', '$apellido', '$fecha_inicio', '$fecha_termino', '$dias', '$servicio', '$habitacion', '$costo', '$pais')";

if(mysqli_query($conn, $sql)){
    echo "Los datos se guardaron ok";
} else{
    echo "ERROR: no se pudo guardar $sql. " . mysqli_error($conn);
}
CloseCon($conn);
?>
 