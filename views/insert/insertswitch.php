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


    if(isset($_POST['Gerenciavel'])){

        $Gerenciavel = $_POST['Gerenciavel'] = "Sim";

    }else{

        $Gerenciavel = "Não";

    }

    

    $Codigo = $_POST['Codigo'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Numero_de_portas = $_POST['Numero_de_portas'];
    $Descricao = $_POST['Descricao'];
    
    
    //$securePass = md5($Permitir_venda);

    $query = "INSERT INTO switch (Codigo, Marca, Modelo, Permite_conexao, Nr_portas, Gerivel, Descricao) VALUES ('$Codigo', '$Marca', '$Modelo', '$Permitir_conexao_de_cliente', '$Numero_de_portas', '$Gerenciavel', '$Descricao');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/switch.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>