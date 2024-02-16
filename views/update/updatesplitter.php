<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

 

if(isset($_POST['updatedata']))//updatedata
    {   

       
    
    
    if(isset($_POST['Atenuacao_2'])){

       $Atenuacao_2 = $_POST['Atenuacao_2'];

    }else{

      $Atenuacao_2 = "";

    }

    if(isset($_POST['balanceado'])){

        $balanceado = $_POST['balanceado'] = "Sim";

    }else{

        $balanceado = "Não";

    }

    if(isset($_POST['Permitir_conexao_de_cliente'])){

        $Permitir_conexao_de_cliente = $_POST['Permitir_conexao_de_cliente'] = "Sim";

    }else{

        $Permitir_conexao_de_cliente = "Não";

    }

    $id = $_POST['update_id'];
    $Codigo = $_POST['Codigo'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Prefixo = $_POST['Prefixo'];
    $Tipo_de_entrada_saida = $_POST['Tipo_de_entrada_saida'];
    $Numero_de_entradas = $_POST['Numero_de_entradas'];
    $Numero_de_saidas = $_POST['Numero_de_saidas'];
    $Atenuacao_1 = $_POST['Atenuacao_1'];
    $Descricao = $_POST['Descricao'];

     
  

        $query = "UPDATE splitter SET Codigo='$Codigo', Marca='$Marca', Modelo='$Modelo' , Prefixo='$Prefixo', Tipo_de_entrada_saida='$Tipo_de_entrada_saida', Nr_entradas='$Numero_de_entradas', Nr_saidas='$Numero_de_saidas', Atenuacao_1='$Atenuacao_1', Atenuacao_2='$Atenuacao_2', Balanceando='$balanceado', Permite_conexao='$Permitir_conexao_de_cliente', Descricao='$Descricao' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:http://localhost/admin/views/splitter.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>