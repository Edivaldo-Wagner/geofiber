<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];



    $query = "DELETE FROM cabo WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header('Location:http://localhost/admin/views/cabos-nivel-1.php');
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>