<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    

    $query = "DELETE FROM splitter WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header('Location:http://localhost/admin/views/splitter.php');
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>