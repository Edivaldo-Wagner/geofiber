<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

 

if(isset($_POST['updatedata']))//updatedata
    { 

   

    $id = $_POST['update_id'];
    $Nome = $_POST['Nome'];
    $Cor = $_POST['Cor'];

  

    $query = "UPDATE cores SET Nome='$Nome', Cor='$Cor' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:http://localhost/admin/views/cores.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>