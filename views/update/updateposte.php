<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if(isset($_POST['updatedata']))//updatedata
    {   

        if(isset($_POST['Permitir_venda'])){

        $Permitir_venda = $_POST['Permitir_venda'] = "Sim";

    }else{

        $Permitir_venda = "Não";

    }


        $id = $_POST['id-editar'];
        $nome = $_POST['nome'];
        $tipo_rede = $_POST['tipo_rede'];
        $cor = $_POST['cor'];
        $status_implementacao = $_POST['status_implementacao'];
        $status_licenciamento = $_POST['status_licenciamento'];
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

  

        $query = "UPDATE poste SET nome='$nome', tipo_rede='$tipo_rede', Cor='$cor', status_implementacao='$status_implementacao', status_licenciamento='$status_licenciamento', observacao=' $observacao', modificado_em='$ano-$mes-$dia $horas:$minutos:$segundos', escala='$escala'  WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:http://localhost/admin/views/poste.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>