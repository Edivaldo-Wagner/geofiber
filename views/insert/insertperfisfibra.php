<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if($_POST)
{


   
    

    $Nome = $_POST['Nome'];
    $Cor_padrao_fibra = $_POST['Cor_padrao_fibra'];
    $Cor_padrao_tubo = $_POST['Cor_padrao_tubo'];
    


    foreach($Cor_padrao_fibra as $Cor_padrao_fibras){

        $Variavel_cor_padrao_fibra .= "$Cor_padrao_fibras, ";

    }

    foreach($Cor_padrao_tubo as $Cor_padrao_tubos){

        $Variavel_cor_padrao_tubo .= "$Cor_padrao_tubos, ";

    }


    
    //$securePass = md5($Permitir_venda);

    $query = "INSERT INTO perfis_fibra (Nome, Cor_padrao_fibra, Cor_padrao_turbo) VALUES ('$Nome', '$Variavel_cor_padrao_fibra', '$Variavel_cor_padrao_tubo');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/perfis-de-fibra.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>