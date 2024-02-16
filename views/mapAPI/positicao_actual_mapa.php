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
	
	
	
	
	

	//##########INCLUIR VERIFICACAO DE ADMIN
	//receber o json
	$array_lat_lng = $_POST['array_lat_lng'];

    $data = json_encode($array_lat_lng, JSON_UNESCAPED_UNICODE);
	
	
    $query = "UPDATE posicao_actual_mapa SET lat_lng='$data' WHERE id=1";
    
	   

	mysqli_query($conn, $query);
	

?>