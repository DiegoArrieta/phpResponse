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
$arreglot = array();
if ($result->num_rows > 0) {
    
    echo $result;
    
    
} else {
    echo "0 results";
}
CloseCon($conn);
?>
