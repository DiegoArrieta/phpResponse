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
  echo 'Tipo: '.$tipo;
  echo 'Version: '.phpversion();
  // Array
  $someArray = [
    "70900" => ["10", "11","12","13","14","15"],
    "170900" => ["34","35","36","37","38"],
    "120900" => ["20","21","22","23","24"]
  ];

  print_r($someArray);

  $result = array_filter($someArray, function($k) use ($tipo) {
    echo 'Dentro del ArrayFilter '.$tipo;
    echo $k;
    if($k == $tipo){
      echo 'True';
      return true;
      
    }
    else{
      echo 'False';
      return false;

    };
}, ARRAY_FILTER_USE_KEY);

  
  
  $someJSON = json_encode($result);
  echo $someJSON;
?>