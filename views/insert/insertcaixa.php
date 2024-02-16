<?php

$connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'geo');

if($_POST)
{

    $nome = $_POST['nome'];
    $splitter = $_POST['splitter'];
    $tipo_splitter = $_POST['tipo_splitter'];
    $cor = $_POST['cor'];
    $status_implementacao = $_POST['status_implementacao'];
    $observacao = $_POST['observacao'];
    $escala = $_POST['escala'];
    
    $formato = date("A");
    
    $dia = date("d");
    
    $mes = date("m");
    
    $ano = date("Y");
    
    $horas = date("h");
    
     $minutos = date("i");
     
     $segundos = date("s");
     
    if($formato == "PM" and $horas == 1){

                $horas = 13;

            }

            if($formato == "PM" & $horas == 2){

                $horas = 14;

            }

            if($formato == "PM" & $horas == 3){

                $horas = 15;

            }

            if($formato == "PM" & $horas == 4){

                $horas = 16;

            }

            if($formato == "PM" & $horas == 5){

                $horas = 17;

            }

            if($formato == "PM" & $horas == 6){

                $horas = 18;

            }     

            if($formato == "PM" & $horas == 7){

                $horas = 19;

            }

            if($formato == "PM" & $horas == 8){

                $horas = 20;

            }

            if($formato == "PM" & $horas == 9){

                $horas = 21;

            }

            if($formato == "PM" & $horas == 10){

                $horas = 22;

            }

            if($formato == "PM" & $horas == 11){

                $horas = 23;

            }
  
    
    $query = "INSERT INTO caixa (nome, splitter, criado_em, tipo_splitter, cor, status_implementacao, observacao, escala) VALUES ('$nome', '$splitter', '$ano-$mes-$dia $horas:$minutos:$segundos', '$tipo_splitter', '$cor', '$status_implementacao', '$observacao', '$escala');";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script>alert('Registado com sucesso!')</script>";
        header('Location:http://localhost/admin/views/caixa-nivel-1.php');
       
    }else{
        echo "<script>alert('Erro projeto já existe!')</script>";
    }
}

?>