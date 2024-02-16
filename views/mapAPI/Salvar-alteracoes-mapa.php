<?php

  header("Content-Type: application/json");

  include dirname(dirname(__DIR__)).'/Admin_config/connection.php';
  include dirname(dirname(__DIR__)).'/Admin_controllers/login.php';

  $jsonResponse = [
    'sucesso' => false,
    'msg' => 'erro desconhecido',
    'dados' => null,
    'redirect' => null
  ];


  if(isset($_COOKIE['array_caixa_mapa'])){


    $array_caixa_mapa = $_COOKIE['array_caixa_mapa'];

   // print_r($array_caixa_mapa);

    foreach ($array_caixa_mapa as $x) {
      
     

        $q = mysqli_query($conn, "INSERT INTO `figuras` (`admin_id`, `shape`, `uniqueid`, `type_id`) VALUES (1, '$x', 1, 1)");

     
        if (!$q) {
    $jsonResponse['msg'] = mysqli_error($conn);
    echo "mau";
  } else {
    $jsonResponse['msg'] = 'Figura inserida';
    $jsonResponse['sucesso'] = true;
    echo "bom";
  }

  echo json_encode($jsonResponse);


    }

}

?>