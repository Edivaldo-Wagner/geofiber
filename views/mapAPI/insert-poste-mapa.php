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
	$data = $_POST['json'];
	$uid = $_POST['id'];
	$id_poste = $_POST['id_poste'];
	
	

	    
	  
	    
	    
	  //  mysqli_query($conn, "UPDATE caixa SET latitude_longitude='$latitude_longitude' WHERE id='$id_caixa'");
	    


   

	//inserir dados na bd
	$admin_id = 1;

	$q = mysqli_query($conn, "INSERT INTO `figuras` (`admin_id`, `shape`, `uniqueid`, `type_id`) VALUES ('$admin_id', '$data', '$uid', 1)");
	if (!$q) {
		$jsonResponse['msg'] = mysqli_error($conn);
	} else {
		$jsonResponse['msg'] = 'Figura inserida';
		$jsonResponse['sucesso'] = true;
	}

	echo json_encode($jsonResponse);

?>