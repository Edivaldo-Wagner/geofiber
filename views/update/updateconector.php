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

   

    $id = $_POST['update_id'];
    $Codigo = $_POST['Codigo'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Atenuacao = $_POST['Atenuacao'];
    $Descricao = $_POST['Descricao'];

  

        $query = "UPDATE conector SET Codigo='$Codigo', Marca='$Marca', Modelo='$Modelo', Permite_conexao='$Permitir_conexao_de_cliente', Atenucao='$Atenuacao', Descricao='$Descricao' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:http://localhost/admin/views/conector.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>