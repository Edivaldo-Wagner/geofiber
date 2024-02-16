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
        <h5 class="modal-title" id="exampleModalLabel">Tela de Inserção de projecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="insertprojecto.php" method="POST">
      <div class="modal-body">
          <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" name="Nome" placeholder="Nome">
        </div>

        <div class="form-group">
          <label>Identificador</label>
          <input type="text" class="form-control" name="Identificador" placeholder="identificador">
        </div>

        <div class="form-group">
          <label>Usuarios</label>
          <input type="text" class="form-control" name="Usuarios" placeholder="Usuarios">
        </div>

        <div class="form-group">
          <label>Projeto Pai</label>
          <input type="text" class="form-control" name="Projeto_pai" placeholder="Projeto Pai">
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="text" class="form-control" name="Image" placeholder="Projeto Pai">
        </div>
        <div class="form-group">
          <label>Local</label>
          <input type="text" class="form-control" name="local" placeholder="Projeto Pai">
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

                <div class="modal-body">
                    <h4 class="id_view"></h4>
                    <h4 class="fname_view"></h4>
                    <h4 class="lname_view"></h4>
                    <h4 class="class_view"></h4>
                    <h4 class="section_view"></h4>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Editar Projecto </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updateprojeto.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" name="Nome" id="Nome" placeholder="Nome">
        </div>

        <div class="form-group">
          <label>Identificador</label>
          <input type="text" class="form-control" name="Identificador" id="Identificador" placeholder="identificador"> 
        </div>

        <div class="form-group">
          <label>Usuarios</label>
          <input type="text" class="form-control" name="Usuarios" id="Usuarios" placeholder="Usuarios">
        </div>

        <div class="form-group">
          <label>Projeto Pai</label>
          <input type="text" class="form-control" name="Projeto_pai" id="Projeto_pai" placeholder="Projeto Pai">
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="text" class="form-control" name="Image" id="Image" placeholder="Projeto Pai">
        </div>
        <div class="form-group">
          <label>Local</label>
          <input type="text" class="form-control" name="local" id="local" placeholder="Projeto Pai">
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

                <form action="deleteprojeto.php" method="POST">

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
            + Criar Projecto
            </button>

            <div class="card" style="margin: 20px 0px 0px 0px;">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'geo');

                $query = "SELECT * FROM projeto";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="dataTable" class="table table-bordered table-light">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>    
                                <th scope="col">Nome</th>
                                <th scope="col">Identificador </th>
                                <th scope="col">Usarios</th>
                                <th scope="col">Projeto Pai</th>
                                <!--<th scope="col"> VIEW </th>-->
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
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['Nome']; ?> </td>
                                <td> <?php echo $row['Identificador']; ?> </td>
                                <td> <?php echo $row['Usuarios']; ?> </td>
                                <td> <?php echo $row['Projeto_pai']; ?> </td>
                                <!--<td>
                                    <button type="button" class="btn btn-info viewbtn"> Ver </button>
                                </td>-->
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
            getdata();

            $(document).on("click", ".viewbtn", function () {

                var stud_id = $(this).closest('tr').find('.stud_id').text();
                // alert(stud_id);

                $.ajax({
                    type: "POST",
                    url: "display.php",
                    data: {
                        'checking_view': true,
                        'stud_id': stud_id,
                    },
                    success: function (response) {
                        // console.log(response);
                        $.each(response, function (key, studview) { 
                            // console.log(studview['fname']);
                            $('.id_view').text(studview['id']);
                            $('.fname_view').text(studview['Nome']);
                            $('.lname_view').text(studview['Identificador']);
                            $('.class_view').text(studview['Usuarios']);
                            $('.section_view').text(studview['Projeto_pai']);
                        });
                        $('#viewmodal').modal('show');
                    }
                });

            });            
        });
    </script>

    <!--
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
    // Setup - add a text input to each footer cell
    $('#dataTable tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });
 
    // DataTable
    var table = $('#dataTable').DataTable({
        initComplete: function () {
            // Apply the search
            this.api()
                .columns()
                .every(function () {
                    var that = this;
 
                    $('input', this.footer()).on('keyup change clear', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
        },
    });
});
    </script>-->


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
                $('#Nome').val(data[1]);
                $('#Identificador').val(data[2]);
                $('#Usuarios').val(data[3]);
                $('#Projeto_pai').val(data[4]);
                //$('#Image').val(data[5]);
                //$('#local').val(data[6]);
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

</body>

</html>
