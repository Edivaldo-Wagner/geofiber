<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

 

if(isset($_POST['updatedata']))//updatedata
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
    
   

    $id = $_POST['update_id'];
    $Codigo = $_POST['Codigo'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Numero_de_portas = $_POST['Numero_de_portas'];
    $Descricao = $_POST['Descricao'];

  

        $query = "UPDATE switch SET Codigo='$Codigo', Marca='$Marca', Modelo='$Modelo', Permite_conexao='$Permitir_conexao_de_cliente', Nr_portas='$Numero_de_portas', Gerivel='$Gerenciavel', Descricao='$Descricao' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:http://localhost/admin/views/switch.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>