<?php
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