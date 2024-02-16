<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

if(isset($_POST['updatedata']))//updatedata
    {   
        $id = $_POST['update_id'];
        
        $nome = $_POST['Nome'];
        $identificador = $_POST['Identificador'];
        $usuarios = $_POST['Usuarios'];
        $projeto_pai = $_POST['Projeto_pai'];
        $Image = $_POST['Image'];
        $local = $_POST['local'];

        $query = "UPDATE projeto SET Nome='$nome', Identificador='$identificador', Usuarios='$usuarios', Projeto_pai=' $projeto_pai' , Image=' $Image' , local=' $local' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:http://localhost/admin/views/projectos.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>