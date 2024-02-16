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
        <h5 class="modal-title" id="exampleModalLabel">Tela de Novo perfil de fibra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="insert/insertperfisfibra.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="id" id="id">

        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" name="Nome" placeholder="Nome" required>
        </div>
        <h5 class="modal-title" id="exampleModalLabel">Fibra</h5>
        <div class="form-group">
        	<div style="margin-top: 10px; display:flex">
          	  <label>Cor padrao:</label>
	          <input type="color" id="input_main_color_fibra" class="form-control" placeholder="Escolhe uma cor" required style="margin-left:20px; width:22%"> 
	          <input type="text" id="btn_add_color_fibra" class="btn btn-primary" style="margin-left:20px; width:48%" value="Adicionar +">
     	  </div>
     	  <div class="container_cores_fibra" style="position: relative; left: 50%; margin-top: 20px; width:100%; transform: translateX(-50%); border-top:1px solid rgb(0, 0, 0, 0.1);">

     	  		<div class="ul">

     	  			



     	  		</div>

     	  		<style>
     	  			.container_cores_fibra .ul li{
     	  				margin-top: 20px;
     	  				list-style: none;
     	  			}

     	  		</style>

     	  </div>
        </div>


        <h5 class="modal-title" id="exampleModalLabel" style="margin-top:30px">Tubo</h5>
        <div class="form-group">
        	<div style="margin-top: 10px; display:flex">
          	  <label>Cor padrao:</label>
	          <input type="color" id="input_main_color_tubo" class="form-control" placeholder="Escolhe uma cor" required style="margin-left:20px; width:22%"> 
	          <input type="text" id="btn_add_color_tubo" class="btn btn-primary" style="margin-left:20px; width:48%" value="Adicionar +">
     	  </div>
     	  <div class="container_cores_tubo" style="position: relative; left: 50%; margin-top: 20px; width:100%; transform: translateX(-50%); border-top:1px solid rgb(0, 0, 0, 0.1);">

     	  		<div class="ul">

     	  			



     	  		</div>

     	  		<style>
     	  			.container_cores_tubo .ul li{
     	  				margin-top: 20px;
     	  				list-style: none;
     	  			}

     	  		</style>

     	  </div>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Visualizar perfil de fibra </h5>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Editar Tela de Novo tipo de perfil de fibra </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update/updateperfisfibra.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        
       <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" name="Nome" placeholder="Nome" required>
        </div>
        <h5 class="modal-title" id="exampleModalLabel">Fibra</h5>
        <div class="form-group">
            <div style="margin-top: 10px; display:flex">
              <label>Cor padrao:</label>
              <input type="color" id="input_main_color_fibra_editar" class="form-control" placeholder="Escolhe uma cor" required style="margin-left:20px; width:22%"> 
              <input type="text" id="btn_add_color_fibra_editar" class="btn btn-primary" style="margin-left:20px; width:48%" value="Adicionar +">
          </div>
          <div class="container_cores_fibra_editar" style="position: relative; left: 50%; margin-top: 20px; width:100%; transform: translateX(-50%); border-top:1px solid rgb(0, 0, 0, 0.1);">

                <div class="ul">

                    



                </div>

                <style>
                    .container_cores_fibra_editar .ul li{
                        margin-top: 20px;
                        list-style: none;
                    }

                </style>

          </div>
        </div>


        <h5 class="modal-title" id="exampleModalLabel" style="margin-top:30px">Tubo</h5>
        <div class="form-group">
            <div style="margin-top: 10px; display:flex">
              <label>Cor padrao:</label>
              <input type="color" id="input_main_color_tubo_editar" class="form-control" placeholder="Escolhe uma cor" required style="margin-left:20px; width:22%"> 
              <input type="text" id="btn_add_color_tubo_editar" class="btn btn-primary" style="margin-left:20px; width:48%" value="Adicionar +">
          </div>
          <div class="container_cores_tubo_editar" style="position: relative; left: 50%; margin-top: 20px; width:100%; transform: translateX(-50%); border-top:1px solid rgb(0, 0, 0, 0.1);">

                <div class="ul">

                    



                </div>

                <style>
                    .container_cores_tubo_editar .ul li{
                        margin-top: 20px;
                        list-style: none;
                    }

                </style>

          </div>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Deletar Cor </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete/deleteperfisfibra.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Pretende deletar este perfil de fibra ??</h4>
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
            + Novo tipo de perfil de fibra
            </button>

            <div class="card" style="margin: 20px 0px 0px 0px;">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'geo');

                $query = "SELECT * FROM perfis_fibra";
                $query_run = mysqli_query($connection, $query);

              
            ?>
                    <table id="datatableid" class="table table-bordered table-light">
                        <thead>
                            <tr>
                                <th scope="col" style="display:none"> ID</th>
                                <th scope="col">Nome </th>
                                <th scope="col">Tipos de cabo </th>
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
                                <td> <?php echo $row['Nome']; ?> </td>
                                <td>  </td>
                                
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

  	let input_main_color_fibra = document.getElementById("input_main_color_fibra")

  	let btn_add_color_fibra = document.getElementById("btn_add_color_fibra")
  	
  	let container_cores_fibra = document.querySelector(".container_cores_fibra .ul") 

  	btn_add_color_fibra.addEventListener("click", ()=>{

  		container_cores_fibra.innerHTML += `

 				<li>

     	  				<input type="color" name='Cor_padrao_fibra[]' style="height: 40px; width:70%" value='${input_main_color_fibra.value}' required>
     	  				<button type="button" id="btn_delete_color_fibra" class="btn btn-danger deletebtn btn_delete_color_fibra" style="width: 24%; margin-top: -17px;margin-left:10px"> Deletar </button>

     	  			</li>

  	`

  	})

  	container_cores_fibra.addEventListener("click", function(event){

  		if(event.target.classList == "btn btn-danger deletebtn btn_delete_color_fibra"){



  			event.target.parentElement.style.display = "none"

  		}

  	})

  	let input_main_color_tubo = document.getElementById("input_main_color_tubo")

  	let btn_add_color_tubo = document.getElementById("btn_add_color_tubo")
  	
  	let container_cores_tubo = document.querySelector(".container_cores_tubo .ul") 

  	btn_add_color_tubo.addEventListener("click", ()=>{

  		container_cores_tubo.innerHTML += `

 				<li>

     	  				<input type="color" name='Cor_padrao_tubo[]' style="height: 40px; width:70%" value='${input_main_color_tubo.value}' required>
     	  				<button type="button" id="btn_delete_color_tubo" class="btn btn-danger deletebtn btn_delete_color_tubo" style="width: 24%; margin-top: -17px;margin-left:10px"> Deletar </button>

     	  			</li>

  	`

  	})

  	container_cores_tubo.addEventListener("click", function(event){

  		if(event.target.classList == "btn btn-danger deletebtn btn_delete_color_tubo"){



  			event.target.parentElement.style.display = "none"

  		}

  	})










    let input_main_color_fibra_editar = document.getElementById("input_main_color_fibra_editar")

    let btn_add_color_fibra_editar = document.getElementById("btn_add_color_fibra_editar")
    
    let container_cores_fibra_editar = document.querySelector(".container_cores_fibra_editar .ul") 

    btn_add_color_fibra_editar.addEventListener("click", ()=>{

        container_cores_fibra_editar.innerHTML += `

                <li>

                        <input type="color" name='Cor_padrao_fibra[]' style="height: 40px; width:70%" value='${input_main_color_fibra_editar.value}' required>
                        <button type="button" id="btn_delete_color_fibra_editar" class="btn btn-danger deletebtn btn_delete_color_fibra_editar" style="width: 24%; margin-top: -17px;margin-left:10px"> Deletar </button>

                    </li>

    `

    })

    container_cores_fibra_editar.addEventListener("click", function(event){

        if(event.target.classList == "btn btn-danger deletebtn btn_delete_color_fibra_editar"){



            event.target.parentElement.style.display = "none"

        }

    })

    let input_main_color_tubo_editar = document.getElementById("input_main_color_tubo_editar")

    let btn_add_color_tubo_editar = document.getElementById("btn_add_color_tubo_editar")
    
    let container_cores_tubo_editar = document.querySelector(".container_cores_tubo_editar .ul") 

    btn_add_color_tubo_editar.addEventListener("click", ()=>{

        container_cores_tubo_editar.innerHTML += `

                <li>

                        <input type="color" name='Cor_padrao_tubo[]' style="height: 40px; width:70%" value='${input_main_color_tubo_editar.value}' required>
                        <button type="button" id="btn_delete_color_tubo_editar" class="btn btn-danger deletebtn btn_delete_color_tubo_editar" style="width: 24%; margin-top: -17px;margin-left:10px"> Deletar </button>

                    </li>

    `

    })

    container_cores_tubo_editar.addEventListener("click", function(event){

        if(event.target.classList == "btn btn-danger deletebtn btn_delete_color_tubo_editar"){



            event.target.parentElement.style.display = "none"

        }

    })



  </script>


</body>

</html>
