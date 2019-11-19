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

$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["apellido"]. "<br>";
        echo "<tr><td>".$row['id']."</td><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['fecha_inicio']."</td><td>".$row['fecha_termino']."</td><td>".$row['dias']."</td><td>".$row['servicio']."</td><td>".$row['habitacion ']."</td><td>".$row['costo']."</td><td>".$row['pais']."</td></tr>";
        
    }
        
} else {
    echo "0 results";
}
echo $arreglo;
CloseCon($conn);
?>
