<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if($_POST)
{

    $nome = $_POST['Nome'];
    $identificador = $_POST['Identificador'];
    $usuarios = $_POST['Usuarios'];
    $projeto_pai = $_POST['Projeto_pai'];
    $Image = $_POST['Image'];
    $local = $_POST['local'];
    //$securePass = md5($projeto_pai);


    $query = "INSERT INTO projeto (Nome, Identificador, Usuarios, Projeto_pai, Image,local) VALUES ('$nome', '$identificador', '$usuarios','$projeto_pai','$Image','$local');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/projectos.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>