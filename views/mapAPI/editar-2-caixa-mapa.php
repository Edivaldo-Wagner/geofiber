
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

	$json = $_POST['json'];

	$id = $_POST['id'];

	$uniqueid = $_POST['uniqueid'];

	$latitude_longitude = $_POST['latitude_longitude'];
	

	$data = json_encode($json, JSON_UNESCAPED_UNICODE);
	
	
	
	mysqli_query($conn, "UPDATE `figuras` SET shape = '$data' WHERE uniqueid = '$uniqueid'");

?>
	

	
	