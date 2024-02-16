<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

 

if(isset($_POST['updatedata']))//updatedata
    { 

   

    $id = $_POST['update_id'];
    $Nome = $_POST['Nome'];
    $Descricao = $_POST['Descricao'];
    $Cor = $_POST['Cor'];

  

    $query = "UPDATE pendencia SET Nome='$Nome', Descricao='$Descricao', Cor='$Cor' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:http://localhost/admin/views/pendencias.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>