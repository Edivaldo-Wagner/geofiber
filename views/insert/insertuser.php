<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if($_POST)
{

    if(isset($_POST['Senha'])){

        $Senha = $_POST['Senha'];

    }else{ 

        $Senha = "";

    }

    if(isset($_POST['Gerar_senha'])){

        $Gerar_senha = md5(rand(999, 99999999999));

    }else{

        $Gerar_senha = "";

    }


    if(isset($_POST['todos_projetos'])){

        $todos_projetos = $_POST['todos_projetos'] = "Sim";

    }else{

        $todos_projetos = "Não";

    }


    if(isset($_POST['Projetos'])){

        $Projetos = $_POST['Projetos'];

    }else{

        $Projetos = "Todos projetos";

    }

    if(isset($_POST['Chave_API'])){

        $Chave_API = $_POST['Chave_API'];

    }else{

        $Chave_API = "Nenhuma";

    }

    
    $Usuario = $_POST['Usuario'];
    $Email = $_POST['Email'];
    $Confirmar_senha = $_POST['Confirmar_senha'];
    $Tipo_usuario = $_POST['Tipo_usuario'];
    $Modulos = $_POST['Modulos'];
    $Nome = $_POST['Nome'];
    $Telefone = $_POST['Telefone'];
    $Observacoes = $_POST['Observacoes'];
 
    //$securePass = md5($Permitir_venda);


    $query = "INSERT INTO usuario (Usuario , Email, Senha, Gerar_senha, Tipo_usuario, Todos_projetos, Projetos, Modulos, Chave_API, Nome, Telefone, Observacoes) VALUES ('$Usuario', '$Email', '$Senha ','$Gerar_senha','$Tipo_usuario', '$todos_projetos', '$Projetos', '$Modulos', '$Chave_API', '$Nome', '$Telefone', '$Observacoes');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/users.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>