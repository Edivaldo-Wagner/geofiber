<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if($_POST)
{

    

    $Codigo = $_POST['Codigo'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Total_de_portas = $_POST['Total_de_portas'];
    $Numero_bandejas = $_POST['Numero_bandejas'];
    $Tag_do_lado_A = $_POST['Tag_do_lado_A'];
    $Tag_do_lado_B = $_POST['Tag_do_lado_B'];
    $Atenuacao = $_POST['Atenuacao'];
    $Descricao = $_POST['Descricao'];

    
    
    //$securePass = md5($Permitir_venda);

    $query = "INSERT INTO dio (Codigo, Marca, Modelo, total_portas, Nr_bandejas, Tag_lado_A, Tag_lado_B, Atenucao, Descricao) VALUES ('$Codigo', '$Marca', '$Modelo', '$Total_de_portas', '$Numero_bandejas', '$Tag_do_lado_A', '$Tag_do_lado_B', '$Atenuacao', '$Descricao');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/dio.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>