<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

  // Array
  $someArray = [
    [
      "tipo"   => "Single",
      "precio" => "$70,900"
    ],
    
    [
      "tipo"   => "Double",
      "precio" => "$170,900"
    ],
    
    [
      "tipo"   => "Double VIP",
      "precio" => "$370,900"
    ]
    
  ];

  // Convert Array to JSON String
  $someJSON = json_encode($someArray);
  echo $someJSON;
?>