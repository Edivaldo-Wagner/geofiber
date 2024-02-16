<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

 

if(isset($_POST['updatedata']))//updatedata
    { 

   

    $id = $_POST['update_id'];
    $Nome = $_POST['Nome'];
    $Cor_padrao_fibra = $_POST['Cor_padrao_fibra'];
    $Cor_padrao_tubo = $_POST['Cor_padrao_tubo'];
    


    foreach($Cor_padrao_fibra as $Cor_padrao_fibras){

        $Variavel_cor_padrao_fibra .= "$Cor_padrao_fibras, ";

    }

    foreach($Cor_padrao_tubo as $Cor_padrao_tubos){

        $Variavel_cor_padrao_tubo .= "$Cor_padrao_tubos, ";

    }

 

    $query = "UPDATE perfis_fibra SET Nome='$Nome', Cor_padrao_fibra='$Variavel_cor_padrao_fibra', Cor_padrao_turbo='$Variavel_cor_padrao_tubo' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:http://localhost/admin/views/perfis-de-fibra.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>




