<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if($_POST)
{


   
    

    $Nome = $_POST['Nome'];
    $Descricao = $_POST['Descricao'];
    $Cor = $_POST['Cor'];
    
    
    //$securePass = md5($Permitir_venda);

    $query = "INSERT INTO pendencia (Nome, Descricao, Cor) VALUES ('$Nome', '$Descricao', '$Cor');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/pendencias.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>