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
        <h5 class="modal-title" id="exampleModalLabel">Tela de Novo tipo de splitter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="insert/insertsplitter.php" method="POST">

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
          <label>Prefixo</label>
          <input type="text" class="form-control" name="Prefixo" placeholder="Prefixo" required>
        </div>
       <div class="form-group">
          <label>Tipo de entrada/saída</label>
          <select class="form-control" name="Tipo_de_entrada_saida">

            <option>CE</option>

            <option>CTO</option>

          </select>
        </div>
        <p>
        <div class="form-group">
          <p><input type="checkbox" id="checkbox-splitter-balanceado" class="fom-control" name="balanceado" value="Sim"> <label for="checkbox-splitter-balanceado">Splitter balanceado</label> </p>
        </div>
      </p>
      <p>
        <div class="form-group">
          <p><input type="checkbox" id="checkbox-conexao_de_cliente" class="fom-control" name="Permitir_conexao_de_cliente" value="Sim"> <label for="checkbox-conexao_de_cliente">Permitir conexão de cliente</label> </p>
        </div>
      </p>
        <div class="form-group">
          <label>Número de entradas</label>
          <input type="number" class="form-control" id="Numero_de_entradas" name="Numero_de_entradas" placeholder="Número de entradas" readonly="true" value=1>
        </div>
        <div class="form-group">
          <label>Número de saídas</label>
          <input type="number" class="form-control" id="Numero_de_saidas" name="Numero_de_saidas" placeholder="Número de saídas" readonly="true" value=2>
        </div>
        <div class="form-group">
          <label id="titulo_Atenuacao_1">Atenuação porta 1 (db)</label>
          <input type="text" class="form-control" id="campo_Atenuacao_1" name="Atenuacao_1" placeholder="Atenuação/Km (db)" onkeypress="$(this).mask('#0.0', {reverse: true});" required>
        </div>
        <div class="form-group">
          <label id="titulo_Atenuacao_2">Atenuação porta 2 (db)</label>
          <input type="text" class="form-control" id="campo_Atenuacao_2" name="Atenuacao_2" placeholder="Atenuação/Km (db)" onkeypress="$(this).mask('#0.0', {reverse: true});" required>
        </div>
       <div class="form-group">
          <label>Descrição</label>
          
          <textarea class="form-control" name="Descricao" placeholder="Descrição" required></textarea>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Editar Tela de Novo tipo de splitter </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update/updatesplitter.php" method="POST">

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
          <label>Prefixo</label>
          <input type="text" class="form-control" name="Prefixo" placeholder="Prefixo" required>
        </div>
       <div class="form-group">
          <label>Tipo de entrada/saída</label>
          <select class="form-control" name="Tipo_de_entrada_saida">

            <option>CE</option>

            <option>CTO</option>

          </select>
        </div>
        <p>
        <div class="form-group">
          <p><input type="checkbox" id="checkbox-splitter-balanceado_editar" class="fom-control" name="balanceado" value="Sim"> <label for="checkbox-splitter-balanceado_editar">Splitter balanceado</label> </p>
        </div>
      </p>
      <p>
        <div class="form-group">
          <p><input type="checkbox" id="checkbox-conexao_de_cliente_editar" class="fom-control" name="Permitir_conexao_de_cliente" value="Sim"> <label for="checkbox-conexao_de_cliente_editar">Permitir conexão de cliente</label> </p>
        </div>
      </p>
        <div class="form-group">
          <label>Número de entradas</label>
          <input type="number" class="form-control" id="Numero_de_entradas_editar" name="Numero_de_entradas" placeholder="Número de entradas" readonly="true" value=1>
        </div>
        <div class="form-group">
          <label>Número de saídas</label>
          <input type="number" class="form-control" id="Numero_de_saidas_editar" name="Numero_de_saidas" placeholder="Número de saídas" readonly="true" value=2>
        </div>
        <div class="form-group">
          <label id="titulo_Atenuacao_1_editar">Atenuação porta 1 (db)</label>
          <input type="text" class="form-control" id="campo_Atenuacao_1_editar" name="Atenuacao_1" placeholder="Atenuação/Km (db)" onkeypress="$(this).mask('#0.0', {reverse: true});" required>
        </div>
        <div class="form-group">
          <label id="titulo_Atenuacao_2_editar">Atenuação porta 2 (db)</label>
          <input type="text" class="form-control" id="campo_Atenuacao_2_editar" name="Atenuacao_2" placeholder="Atenuação/Km (db)" onkeypress="$(this).mask('#0.0', {reverse: true});" required>
        </div>
       <div class="form-group">
          <label>Descrição</label>
          
          <textarea class="form-control" name="Descricao" placeholder="Descrição" required></textarea>
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

                <form action="delete/deletesplitter.php" method="POST">

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
            + Novo tipo de splitter
            </button>

            <div class="card" style="margin: 20px 0px 0px 0px;">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'geo');

                $query = "SELECT * FROM splitter";
                $query_run = mysqli_query($connection, $query);

              
            ?>
                    <table id="datatableid" class="table table-bordered table-light">
                        <thead>
                            <tr>
                                <th scope="col" style="display:none"> ID</th>
                                <th scope="col">Código</th>
                                <th scope="col">Splitters </th>
                                <th scope="col">Número de entradas</th>
                                <th scope="col">Número de saídas</th>
                                <th scope="col">Balanceado</th>
                                <th scope="col">Permite conexão de cliente</th>
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
                                <td style="display:none"> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['Codigo']; ?> </td>
                                <td> </td>
                                <td> <?php echo $row['Nr_entradas']; ?> </td>
                                <td> <?php echo $row['Nr_saidas']; ?> </td>
                                <td> <?php echo $row['Balanceando']; ?> </td>
                                <td> <?php echo $row['Permite_conexao']; ?> </td>
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

    let checkbox_splitter_balanceado = document.getElementById("checkbox-splitter-balanceado")

    let campo_Numero_de_entradas = document.getElementById("Numero_de_entradas") 

    let campo_Numero_de_saidas = document.getElementById("Numero_de_saidas")

    let titulo_Atenuacao_1 = document.getElementById("titulo_Atenuacao_1")

    let campo_Atenuacao_1 = document.getElementById("campo_Atenuacao_1")

    let titulo_Atenuacao_2 = document.getElementById("titulo_Atenuacao_2")

    let campo_Atenuacao_2 = document.getElementById("campo_Atenuacao_2")


    campo_Numero_de_entradas.addEventListener("input", (event)=>{

        if(event.target.value < 0){

            event.target.value = 0

        }

        

    })

    campo_Numero_de_saidas.addEventListener("input", (event)=>{

        if(event.target.value < 0){

            event.target.value = 0

        }
 
        

    })



    checkbox_splitter_balanceado.addEventListener("click", ()=>{

        if(checkbox_splitter_balanceado.checked == true){

            campo_Numero_de_entradas.value = ""

            campo_Numero_de_entradas.readOnly = false

            campo_Numero_de_saidas.value = ""

            campo_Numero_de_saidas.readOnly = false

            titulo_Atenuacao_1.innerText = "Atenuação (db)"

            titulo_Atenuacao_2.style.display = "none" 

            campo_Atenuacao_2.style.display = "none" 

            campo_Atenuacao_2.value = ""

            campo_Atenuacao_2.required = false

        }else{

            campo_Numero_de_entradas.value = 1

            campo_Numero_de_entradas.readOnly = true

            campo_Numero_de_saidas.value = 2

            campo_Numero_de_saidas.readOnly = true

            titulo_Atenuacao_1.innerText = "Atenuação porta 1 (db)"

             titulo_Atenuacao_2.style.display = "block" 

            campo_Atenuacao_2.style.display = "block" 

            campo_Atenuacao_2.required = true

        }

    })













    let checkbox_splitter_balanceado_editar = document.getElementById("checkbox-splitter-balanceado_editar")

    let campo_Numero_de_entradas_editar = document.getElementById("Numero_de_entradas_editar") 

    let campo_Numero_de_saidas_editar = document.getElementById("Numero_de_saidas_editar")

    let titulo_Atenuacao_1_editar = document.getElementById("titulo_Atenuacao_1_editar")

    let campo_Atenuacao_1_editar = document.getElementById("campo_Atenuacao_1_editar")

    let titulo_Atenuacao_2_editar = document.getElementById("titulo_Atenuacao_2_editar")

    let campo_Atenuacao_2_editar = document.getElementById("campo_Atenuacao_2_editar")


    campo_Numero_de_entradas_editar.addEventListener("input", (event)=>{

        if(event.target.value < 0){

            event.target.value = 0

        }

        

    })

    campo_Numero_de_saidas_editar.addEventListener("input", (event)=>{

        if(event.target.value < 0){

            event.target.value = 0

        }
 
        

    })



    checkbox_splitter_balanceado_editar.addEventListener("click", ()=>{

        if(checkbox_splitter_balanceado_editar.checked == true){

            campo_Numero_de_entradas_editar.value = ""

            campo_Numero_de_entradas_editar.readOnly = false

            campo_Numero_de_saidas_editar.value = ""

            campo_Numero_de_saidas_editar.readOnly = false

            titulo_Atenuacao_1_editar.innerText = "Atenuação (db)"

            titulo_Atenuacao_2_editar.style.display = "none" 

            campo_Atenuacao_2_editar.style.display = "none" 

            campo_Atenuacao_2_editar.value = ""

            campo_Atenuacao_2_editar.required = false

        }else{

            campo_Numero_de_entradas_editar.value = 1

            campo_Numero_de_entradas_editar.readOnly = true

            campo_Numero_de_saidas_editar.value = 2

            campo_Numero_de_saidas_editar.readOnly = true

            titulo_Atenuacao_1_editar.innerText = "Atenuação porta 1 (db)"

             titulo_Atenuacao_2_editar.style.display = "block" 

            campo_Atenuacao_2_editar.style.display = "block" 

            campo_Atenuacao_2_editar.required = true

        }

    })


</script>

</body>

</html>
