<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if($_POST)
{


   
    

    $Nome = $_POST['Nome'];
    $Cor = $_POST['Cor'];
    
    
    //$securePass = md5($Permitir_venda);

    $query = "INSERT INTO cores (Nome, Cor) VALUES ('$Nome', '$Cor');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/cores.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>