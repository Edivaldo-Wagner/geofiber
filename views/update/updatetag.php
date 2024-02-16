<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

 

if(isset($_POST['updatedata']))//updatedata
    { 

   

    $id = $_POST['update_id'];
    $Nome = $_POST['Nome'];
    $grupos_disponiveis = $_POST['grupos_disponiveis'];

  

    $query = "UPDATE tag SET Nome='$Nome', Grupo='$grupos_disponiveis' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:http://localhost/admin/views/tag.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>