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
        <h5 class="modal-title" id="exampleModalLabel">Tela de Registro de Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="insert/insertuser.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="id" id="id">

         <div class="form-group">
          <label>Usuário</label>
          <input type="text" class="form-control" name="Usuario" placeholder="Usuário" required>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="Email" placeholder="Email" required>
        </div>

        <div class="form-group" id="container-senha">
          <label>Senha</label>
          <input type="password" id="campo-senha" class="form-control" name="Senha" placeholder="Senha" required>
        </div>

        <div class="form-group" id="container-confirmar-senha">
          <label>Confirmar Senha</label>
          <input type="password" id="campo-confirmar-senha" class="form-control" name="Confirmar_senha" placeholder="Confirmar Senha" required>
        </div>
        <p>
        <div class="form-group">
          <p><input type="checkbox" id="checkbox-gerar-senha" class="fom-control" name="Gerar_senha" value="sim"> <label for="checkbox-gerar-senha">Gerar Senha</label> </p>
        </div>
      </p>
        <div class="form-group">
          <label>Tipo de usuário</label>
          <select class="form-control" name="Tipo_usuario">

            <option>Edivaldo</option>

            <option>Machine</option>

          </select>
        </div>

        <p>
        <div class="form-group">
          <p><input type="checkbox" id="checkbox-todos_projetos" class="fom-control" name="todos_projetos" placeholder="Projeto Pai" value="Sim"> <label for="checkbox-todos_projetos">Todos os Projetos</label> </p>
        </div>
      </p>

       <div class="form-group" id="container-projetos">
          <label>Projetos</label>
          <select class="form-control" name="Projetos">

            <option>Edivaldo</option>

            <option>Machine</option>

          </select>
        </div>

        <div class="form-group">
          <label>Módulos</label>
          <select class="form-control" name="Modulos">

            <option>Edivaldo</option>

            <option>Machine</option>

          </select>
        </div>
        <div class="form-group">
          <label>Chave de API</label>
          <input type="text" id="campo-chave-API" class="form-control" name="Chave_API" placeholder="Chave de API">
          <div id="div_chave_api" style="display:none"><?php echo md5(rand(222433323444333343434322, 9999993399489999)) ?></div>
        </div>
         <div class="modl-footer">
            <button type="button" class="btn btn-secondary">Copiar</button>
            <button type="button" id="btn-gerar-chave-API" class="btn btn-secondary">Gerar</button>
            <button type="button" id="btn-remover-chave-API" class="btn btn-danger">Remover</button> 
           </div>

            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Outras informações </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
             </div>

        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" name="Nome" placeholder="Nome" required>
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="text" class="form-control" name="Telefone" placeholder="Telefone" onkeypress="$(this).mask('(00) 0000-00000')" required>
        </div>
        <div class="form-group">
          <label>Observações</label>
          
          <textarea class="form-control" name="Observacoes" placeholder="Observações" required></textarea>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Editar Projecto </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update/updateuser.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

          <div class="form-group">
          <label>Usuário</label>
          <input type="text" class="form-control" name="Usuario" placeholder="Usuário" required>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="Email" placeholder="Email" required>
        </div>

        <div class="form-group" id="container-senha_editar">
          <label>Senha</label>
          <input type="password" id="campo-senha_editar" class="form-control" name="Senha" placeholder="Senha" required>
        </div>

        <div class="form-group" id="container-confirmar-senha_editar">
          <label>Confirmar Senha</label>
          <input type="password" id="campo-confirmar-senha_editar" class="form-control" name="Confirmar_senha" placeholder="Confirmar Senha" required>
        </div>
        <p>
        <div class="form-group">
          <p><input type="checkbox" id="checkbox-gerar-senha_editar" class="fom-control" name="Gerar_senha" value="sim"> <label for="checkbox-gerar-senha_editar">Gerar Senha</label> </p>
        </div>
      </p>
        <div class="form-group">
          <label>Tipo de usuário</label>
          <select class="form-control" name="Tipo_usuario">

            <option>Edivaldo</option>

            <option>Machine</option>

          </select>
        </div>

        <p>
        <div class="form-group">
          <p><input type="checkbox" id="checkbox-todos_projetos_editar" class="fom-control" name="todos_projetos" placeholder="Projeto Pai" value="Sim"> <label for="checkbox-todos_projetos_editar">Todos os Projetos</label> </p>
        </div>
      </p>

       <div class="form-group" id="container-projetos_editar">
          <label>Projetos</label>
          <select class="form-control" name="Projetos">

            <option>Edivaldo</option>

            <option>Machine</option>

          </select>
        </div>

        <div class="form-group">
          <label>Módulos</label>
          <select class="form-control" name="Modulos">

            <option>Edivaldo</option>

            <option>Machine</option>

          </select>
        </div>
        <div class="form-group">
          <label>Chave de API</label>
          <input type="text" id="campo-chave-API_editar" class="form-control" name="Chave_API" placeholder="Chave de API">
          <div id="div_chave_api_editar" style="display:none"><?php echo md5(rand(222433323444333343434322, 9999993399489999)) ?></div>
        </div>
         <div class="modl-footer">
            <button type="button" class="btn btn-secondary">Copiar</button>
            <button type="button" id="btn-gerar-chave-API_editar" class="btn btn-secondary">Gerar</button>
            <button type="button" id="btn-remover-chave-API_editar" class="btn btn-danger">Remover</button> 
           </div>

            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Outras informações </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
             </div>

        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" name="Nome" placeholder="Nome" required>
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="text" class="form-control" name="Telefone" placeholder="Telefone" onkeypress="$(this).mask('(00) 0000-00000')" required>
        </div>
        <div class="form-group">
          <label>Observações</label>
          
          <textarea class="form-control" name="Observacoes" placeholder="Observações" required></textarea>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Deletar projeto </h5>
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
            + Novo Usuário
            </button>

            <div class="card" style="margin: 20px 0px 0px 0px;">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'geo');

                $query = "SELECT * FROM usuario";
                $query_run = mysqli_query($connection, $query);

              
            ?>
                    <table id="datatableid" class="table table-bordered table-light">
                        <thead>
                            <tr>
                                <th scope="col" style="display: none"> ID</th>
                                <th scope="col"> Usuário</th>    
                                <th scope="col">Nome</th>
                                <th scope="col">Papel </th>
                                <th scope="col">Email</th>
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
                                <td style="display: none"> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['Usuario']; ?> </td>
                                <td> <?php echo $row['Nome']; ?> </td>
                                <td> <?php echo $row['Tipo_usuario']; ?> </td>
                                <td> <?php echo $row['Email']; ?> </td>
                                
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

    let checkbox_gerar_senha = document.getElementById("checkbox-gerar-senha")

    let container_senha = document.getElementById("container-senha")

    let campo_senha = document.getElementById("campo-senha") 

    let container_confirmar_senha = document.getElementById("container-confirmar-senha")

    let campo_confirmar_senha = document.getElementById("campo-confirmar-senha")

    let checkbox_todos_projetos = document.getElementById("checkbox-todos_projetos")

    let container_projetos = document.getElementById("container-projetos")

    checkbox_gerar_senha.addEventListener("click", ()=>{

        if(checkbox_gerar_senha.checked == true){ 

            container_senha.style.display = "none"

            campo_senha.value = ""

            campo_senha.required = false

            container_confirmar_senha.style.display = "none"

            campo_confirmar_senha.value = "" 

            campo_confirmar_senha.required = false

        }else{ 

            container_senha.style.display = "block"

            campo_senha.required = true

            container_confirmar_senha.style.display = "block"

            campo_confirmar_senha.required = true

        }

    })

    checkbox_todos_projetos.addEventListener("click", ()=>{

        if(checkbox_todos_projetos.checked == true){

            container_projetos.style.display = "none"

        }else{ 

            container_projetos.style.display = "block"

        }

    })

    let campo_chave_API = document.getElementById("campo-chave-API")

    let btn_gerar_chave_API = document.getElementById("btn-gerar-chave-API")

    let btn_remover_chave_API = document.getElementById("btn-remover-chave-API")
 
    let div_chave_api = document.getElementById("div_chave_api")

    btn_gerar_chave_API.addEventListener("click", ()=>{

        if(campo_chave_API.value == ""){

            campo_chave_API.value = div_chave_api.innerText

        }else{


        }

    })

    btn_remover_chave_API.addEventListener("click", ()=>{

        campo_chave_API.value =  ""

    })






    let checkbox_gerar_senha_editar = document.getElementById("checkbox-gerar-senha_editar")

    let container_senha_editar = document.getElementById("container-senha_editar")

    let campo_senha_editar = document.getElementById("campo-senha_editar") 

    let container_confirmar_senha_editar = document.getElementById("container-confirmar-senha_editar")

    let campo_confirmar_senha_editar = document.getElementById("campo-confirmar-senha_editar")

    let checkbox_todos_projetos_editar = document.getElementById("checkbox-todos_projetos_editar")

    let container_projetos_editar = document.getElementById("container-projetos_editar")

    checkbox_gerar_senha_editar.addEventListener("click", ()=>{

        if(checkbox_gerar_senha_editar.checked == true){ 

            container_senha_editar.style.display = "none"

            campo_senha_editar.value = ""

            campo_senha_editar.required = false

            container_confirmar_senha_editar.style.display = "none"

            campo_confirmar_senha_editar.value = "" 

            campo_confirmar_senha_editar.required = false

        }else{ 

            container_senha_editar.style.display = "block"

            campo_senha_editar.required = true

            container_confirmar_senha_editar.style.display = "block"

            campo_confirmar_senha_editar.required = true

        }

    })

    checkbox_todos_projetos_editar.addEventListener("click", ()=>{

        if(checkbox_todos_projetos_editar.checked == true){

            container_projetos_editar.style.display = "none"

        }else{ 

            container_projetos_editar.style.display = "block"

        }

    })

    let campo_chave_API_editar = document.getElementById("campo-chave-API_editar")

    let btn_gerar_chave_API_editar = document.getElementById("btn-gerar-chave-API_editar")

    let btn_remover_chave_API_editar = document.getElementById("btn-remover-chave-API_editar")
 
    let div_chave_api_editar = document.getElementById("div_chave_api_editar")

    btn_gerar_chave_API_editar.addEventListener("click", ()=>{

        if(campo_chave_API_editar.value == ""){

            campo_chave_API_editar.value = div_chave_api_editar.innerText

        }else{


        }

    })

    btn_remover_chave_API_editar.addEventListener("click", ()=>{

        campo_chave_API_editar.value =  ""

    })



  </script>

</body>

</html>
