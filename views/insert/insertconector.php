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
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Atenuacao = $_POST['Atenuacao'];
    $Descricao = $_POST['Descricao'];
    
    
    //$securePass = md5($Permitir_venda);

    $query = "INSERT INTO conector (Codigo, Marca, Modelo, Permite_conexao, Atenucao, Descricao) VALUES ('$Codigo', '$Marca', '$Modelo', '$Permitir_conexao_de_cliente', '$Atenuacao', '$Descricao');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/conector.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>