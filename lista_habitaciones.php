<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}
  $tipo = $_GET['tipo'];
  // Array
  $someArray = array(
    "70900" => ["10", "11","12","13","14","15"],
    "120900" => ["20","21","22","23","24"],
    "170900" => ["34","35","36","37","38"]
    );
    $resultado = array_filter($someArray, function ($key) {
      return in_array($tipo, $key);
  });
  echo $resultado;
  $someJSON = json_encode($someArray);
  echo $someJSON;
?>