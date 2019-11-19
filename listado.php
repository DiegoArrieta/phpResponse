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
if(mysqli_query($conn, $sql)){
    while($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {
      echo "EMP ID :{$row['id']}  <br> ".
         "EMP NAME : {$row['nombre']} <br> ".
         "EMP SALARY : {$row['apellido']} <br> ".
         "--------------------------------<br>";
   }
} else{
    echo "ERROR: no se pudo guardar $sql. " . mysqli_error($conn);
}
CloseCon($conn);
?>
