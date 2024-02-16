<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if($_POST)
{


    if(isset($_POST['Permitir_conexao_de_cliente'])){

        $Permitir_conexao_de_cliente = $_POST['Permitir_conexao_de_cliente'] = "Sim";

    }else{

        $Permitir_conexao_de_cliente = "Não";

    }


    

    $Codigo = $_POST['Codigo'];
    $Atenuacao = $_POST['Atenuacao'];
    
    
    //$securePass = md5($Permitir_venda);

    $query = "INSERT INTO fusao (Codigo, Permite_conexao, Atenucao) VALUES ('$Codigo', '$Permitir_conexao_de_cliente', '$Atenuacao');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/fusao.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>