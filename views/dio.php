<?php


date_default_timezone_set("Asia/Kolkata");

error_reporting(0);
session_start();


if (!isset($_SESSION['adm_Id'])) {
  header('Location: login.php');
}
include 'header.php';
?>
 <script src="script.js"></script>

<body id="page-top">

  <?php include 'navbar.php';?>

  <div id="wrapper">

  <?php include 'sidebar.php';?>


    <div id="content-wrapper">

    <!-- model button-->
 

<!-- Modal Insert-->
<div class="modal fade" id="addprojecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tela de Novo tipo de DIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="insert/insertdio.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="id" id="id">

        <div class="form-group">
          <label>Código</label>
          <input type="text" class="form-control" name="Codigo" placeholder="Código" required>
        </div>

        <div class="form-group">
          <label>Marca</label>
          <input type="text" class="form-control" name="Marca" placeholder="Marca" required>
        </div>
        <div class="form-group">
          <label>Modelo</label>
          <input type="text" class="form-control" name="Modelo" placeholder="Modelo" required>
        </div>
        <div class="form-group">
          <label>Total de portas</label>
          <input type="number" id="campo_total_de_portas" class="form-control" name="Total_de_portas" value="1" required>
        </div>
        <div class="form-group">
          <label>Número de bandejas</label>
          <input type="number" id="campo_numero_bandejas" class="form-control" name="Numero_bandejas" value="1" required>
        </div>
        <div class="form-group">
          <label>Tag do lado A</label>
          <input type="text" class="form-control" name="Tag_do_lado_A" value="Lado A">
        </div>
        <div class="form-group">
          <label>Tag do lado B</label>
          <input type="text" class="form-control" name="Tag_do_lado_B" value="Lado B">
        </div>
        <div class="form-group">
          <label>Atenuação</label>
          <input type="text" class="form-control" name="Atenuacao"onkeypress="$(this).mask('#0.0', {reverse: true});">
        </div>
       <div class="form-group">
          <label>Descrição</label>
          
          <textarea class="form-control" name="Descricao" placeholder="Descrição"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" name="insertpro" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- Modal View-->
<!-- VIEW POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Visualizar Projecto </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="display.php" method="POST">

                    <div class="modal-body">

                        <input type="text" name="view_id" id="view_id">

                        <!-- <p id="fname"> </p> -->
                        <h4 id="nome"> <?php echo ''; ?> </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Fechar </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>
<!-- Modal Edit-->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Editar Tela de Novo tipo de DIO </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update/updatedio.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        
       <div class="form-group">
          <label>Código</label>
          <input type="text" class="form-control" name="Codigo" placeholder="Código" required>
        </div>

        <div class="form-group">
          <label>Marca</label>
          <input type="text" class="form-control" name="Marca" placeholder="Marca" required>
        </div>
        <div class="form-group">
          <label>Modelo</label>
          <input type="text" class="form-control" name="Modelo" placeholder="Modelo" required>
        </div>
        <div class="form-group">
          <label>Total de portas</label>
          <input type="number" id="campo_total_de_portas_editar" class="form-control" name="Total_de_portas" value="1" required>
        </div>
        <div class="form-group">
          <label>Número de bandejas</label>
          <input type="number" id="campo_numero_bandejas_editar" class="form-control" name="Numero_bandejas" value="1" required>
        </div>
        <div class="form-group">
          <label>Tag do lado A</label>
          <input type="text" class="form-control" name="Tag_do_lado_A" value="Lado A">
        </div>
        <div class="form-group">
          <label>Tag do lado B</label>
          <input type="text" class="form-control" name="Tag_do_lado_B" value="Lado B">
        </div>
        <div class="form-group">
          <label>Atenuação</label>
          <input type="text" class="form-control" name="Atenuacao"onkeypress="$(this).mask('#0.0', {reverse: true});">
        </div>
       <div class="form-group">
          <label>Descrição</label>
          
          <textarea class="form-control" name="Descricao" placeholder="Descrição"></textarea>
        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
<!-- Modal Delete-->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delatar projeto </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete/deletedio.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Pretende deletar este projecto ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Nao </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Sim !!deletar. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<!-- DELETE POP UP FORM (Bootstrap MODAL) -->
      <div class="container-fluid">
           <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addprojecto">
            + Novo tipo de DIO
            </button>

            <div class="card" style="margin: 20px 0px 0px 0px;">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'geo');

                $query = "SELECT * FROM dio";
                $query_run = mysqli_query($connection, $query);

              
            ?>
                    <table id="datatableid" class="table table-bordered table-light">
                        <thead>
                            <tr>
                                <th scope="col" style='display: none'> ID</th>
                                <th scope="col">Código</th>
                                <th scope="col">DIOs </th>
                                <th scope="col">Portas por bandeja</th>
                                <th scope="col">Bandejas</th>
                                <th scope="col">Atenuação</th>
                                <th scope="col">Descrição</th>
                                <!-- <th scope="col"> VIEW </th> -->
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
                        <?php



                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td style='display: none'> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['Codigo']; ?> </td>
                                <td> </td>
                                <td> <?php echo $row['total_portas']; ?> </td>
                                <td> <?php echo $row['Nr_bandejas']; ?> </td>
                                <td> <?php echo $row['Atenucao']; ?> </td>
                                <td> <?php echo $row['Descricao']; ?> </td>
                                
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> Editar </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> Deletar </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>
         
        </div>

      </div>
      <!-- /.container-fluid -->
      <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>


    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#inputnome').val(data[1]);
                $('#inputid').val(data[2]);
                $('#inputUsuarios').val(data[3]);
                $('#inputProjeto').val(data[4]);
            });
        });
    </script>
      
      

      <?php include 'footer.php';?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include 'scripts.php';?>

  <script>

    let campo_total_de_portas = document.getElementById("campo_total_de_portas")

    let campo_numero_bandejas = document.getElementById("campo_numero_bandejas") 

    campo_total_de_portas.addEventListener("input", (event)=>{

        if(event.target.value < 1){

            event.target.value = 1

        }
 
        

    })


    campo_numero_bandejas.addEventListener("input", (event)=>{

        if(event.target.value < 1){

            event.target.value = 1

        }
 
        

    })








    let campo_total_de_portas_editar = document.getElementById("campo_total_de_portas_editar")

    let campo_numero_bandejas_editar = document.getElementById("campo_numero_bandejas_editar") 

    campo_total_de_portas_editar.addEventListener("input", (event)=>{

        if(event.target.value < 1){

            event.target.value = 1

        }
 
        

    })


    campo_numero_bandejas_editar.addEventListener("input", (event)=>{

        if(event.target.value < 1){

            event.target.value = 1

        }
 
        

    })


</script>

</body>

</html>
