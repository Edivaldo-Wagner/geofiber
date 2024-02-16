
<?php
header("Content-type: application/json; charset=utf-8");

include dirname(dirname(__DIR__)).'/Admin_config/connection.php';
include dirname(dirname(__DIR__)).'/Admin_controllers/login.php';

$jsonResponse = [
    'sucesso' => false,
    'msg' => 'erro desconhecido',
    'dados' => null,
    'redirect' => null
];

//##########INCLUIR VERIFICACAO DE ADMIN
//receber o json
$blogUrl = file_get_contents("php://input");

$decod = json_decode($blogUrl, true);

$json = $decod["json"];

$id = $decod["id"];

$uniqueid = $decod["uniqueid"];




$data = json_encode($json, JSON_UNESCAPED_UNICODE);



$q = mysqli_query($conn, "UPDATE `figuras` SET shape = '$data' WHERE uniqueid = '$uniqueid'");




if (!$q) {
    $jsonResponse['msg'] = mysqli_error($conn);
} else {

    echo "<script> alert('sucesso') </script>";

    $jsonResponse['msg'] = 'Figura inserida';
    $jsonResponse['sucesso'] = true;
}



echo json_encode($jsonResponse);

?>

