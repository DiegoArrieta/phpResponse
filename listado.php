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
$sql = "SELECT * FROM dbcmy8cct16o1bed.reservas";
$result = $conn->query($sql);
$arreglo = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["apellido"]. "<br>";
        $arreglo[] = $row['id'], [$row['nombre'], $row['apellido'], $row['fecha_inicio'], $row['fecha_termino'], $row['dias'], $row['servicio'], $row['habitacion '], $row['costo'], $row['pais'];
    }
    echo $arreglo;
} else {
    echo "0 results";
}
CloseCon($conn);
?>
