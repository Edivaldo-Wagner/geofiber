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
	$blogUrl = file_get_contents("php://input");

	$decod = json_decode($blogUrl, true);

	$json = $decod["json"];

	$id = $decod["id"];

	$data = json_encode($json);
	
	
	
	$q = mysqli_query($conn, "UPDATE `figuras` SET shape = '$data' WHERE uniqueid = '$id'");
	if (!$q) {
		$jsonResponse['msg'] = mysqli_error($conn);
	} else {

		echo "<script> alert('sucesso') </script>";

		$jsonResponse['msg'] = 'Figura inserida';
		$jsonResponse['sucesso'] = true;
	}

	

	echo json_encode($jsonResponse);

?>