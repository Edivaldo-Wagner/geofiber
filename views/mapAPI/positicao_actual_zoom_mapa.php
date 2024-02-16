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
	$zoom = $_POST['zoom'];
	
	
    $query = "UPDATE posicao_actual_mapa SET zoom='$zoom' WHERE id=1";
    
	   

	mysqli_query($conn, $query);
	

?>