<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if($_POST)
{

    $Usuario = $_POST['Usuario'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];
    $Gerar_senha = $_POST['Gerar_senha'];
    $Tipo_usuario = $_POST['Tipo_usuario'];
    $Projetos = $_POST['Projetos'];
    $Modulos = $_POST['Modulos'];
    $Chave_API = $_POST['Chave_API'];
    $Nome = $_POST['Nome'];
    $Telefone = $_POST['Telefone'];
    $Observacoes = $_POST['Observacoes'];
    //$securePass = md5($projeto_pai);


    echo "<br>$Usuario</br>";

     echo "<br>$Email</br>";

     echo "<br>$Senha</br>";

     echo "<br>$Gerar_senha</br>";

     echo "<br>$Tipo_usuario</br>";

     echo "<br>$Projetos</br>";

     echo "<br>$Modulos</br>";

     echo "<br>$Chave_API</br>";


    $query = "INSERT INTO projeto (Usuario, Email, Senha, Gerar_senha, Tipo_usuario, Projetos, Modulos, Chave_API, Nome, Telefone, Observacoes) VALUES ('$Usuario', '$Email', '$Senha','$Gerar_senha','$Tipo_usuario','$Projetos', '$Modulos', '$Chave_API', '$Chave_API', '$Nome', '$Telefone', '$Observacoes');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/projectos.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>