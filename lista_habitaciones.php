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
    array("tipo" => "70900", "numero" => ["10", "11","12","13","14","15"]),
    array("tipo" => "170900", "numero" => ["34","35","36","37","38"]),
    array("tipo" => "120900", "numero" => ["20","21","22","23","24"])
    );
  
  $result = array_filter($array, function ($item) use ($tipo) {
      if (stripos($item['tipo'], $tipo) !== false) {
          return true;
      }
      return false;
  });

  echo $result;
  
  $someJSON = json_encode($someArray);
  echo $someJSON;
?>