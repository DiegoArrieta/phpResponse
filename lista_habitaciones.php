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
    "170900" => ["34","35","36","37","38"],
    "120900" => ["20","21","22","23","24"]
    );
  echo $someArray;
  $result = array_filter($someArray, function ($item){
      if ($item[$tipo]) {
          return true;
      }
      return false;
  }, ARRAY_FILTER_USE_KEY);

  
  
  $someJSON = json_encode($result);
  echo $someJSON;
?>