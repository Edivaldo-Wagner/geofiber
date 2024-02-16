<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'geo');

 

if(isset($_POST['updatedata']))//updatedata
    {   

       
    
    
   

    $id = $_POST['update_id'];
    $Codigo = $_POST['Codigo'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Total_de_portas = $_POST['Total_de_portas'];
    $Numero_bandejas = $_POST['Numero_bandejas'];
    $Tag_do_lado_A = $_POST['Tag_do_lado_A'];
    $Tag_do_lado_B = $_POST['Tag_do_lado_B'];
    $Atenuacao = $_POST['Atenuacao'];
    $Descricao = $_POST['Descricao'];

  

        $query = "UPDATE dio SET Codigo='$Codigo', Marca='$Marca', Modelo='$Modelo', total_portas='$Total_de_portas', Nr_bandejas='$Numero_bandejas', Tag_lado_A='$Tag_do_lado_A', Tag_lado_B='$Tag_do_lado_B', Atenucao='$Atenuacao', Descricao='$Descricao' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location:http://localhost/admin/views/dio.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>