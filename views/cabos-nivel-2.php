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
        <h5 class="modal-title" id="exampleModalLabel">Tela de Novo tipo de cabo nível 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="insert/insertcabonivel2.php" method="POST">

                    <div class="modal-body">

        <div class="form-group">
          <label>Quantidade de fibras</label>
          <select class="form-control" name="quantidade_fibras" required>

            <option></option>

            <option>2</option>

            <option>4</option>

            <option>6</option>

            <option>12</option>

            <option>24</option>

            <option>36</option>

            <option>48</option>

            <option>72</option>

          </select>
        </div>

        <div class="form-group">
          <label>Quantidade de tubo looses</label>
          <select class="form-control" name="quantidade_tubo_looses" required>

            <option></option>

            <option>1</option>

            <option>2</option>

            <option>4</option>

            <option>6</option>

          </select>
        </div>

         <div class="form-group">
          <label>Cor</label>
          <input type="color" class="form-control" name="cor" placeholder="Escolhe uma cor">
        </div>

        <div class="form-group">
          <label>Alto sustentável do cabo</label>
          <select class="form-control" name="alto_sustentavel_cabo" required>

            <option></option>

            <option>Asu 80</option>

            <option>Asu 120</option>

          </select>
        </div>

        <div class="form-group">
          <label>Status de implementação</label>
          <select class="form-control" name="status_implementacao" required>

            <option></option>

            <option>Implantado</option>

            <option>Não implantado</option>

          </select>
        </div>


        
       <div class="form-group">
          <label>Observação</label>
          
          <textarea class="form-control" name="observacao"></textarea>
        </div>
           
    <div class='form-group'>
        <label>Escala (mm)</label>
        <select class='form-control' name="escala" required>

            <option></option>
            
             <option>1</option>
          
             <option>2</option>

             <option>3</option>

             <option>4</option>

             <option>5</option>

             <option>6</option>

             <option>7</option>

             <option>8</option>

             <option>9</option>

             <option>10</option>
        
        </select>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Editar Tela de Novo tipo de cabo nível 2 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update/updatecabonivel2.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="campo-id-editar">

                        
      <div class="form-group">
          <label>Quantidade de fibras</label>
          <select class="form-control" id="campo-1" name="quantidade_fibras" required>

            <option></option>

            <option>2</option>

            <option>4</option>

            <option>6</option>

            <option>12</option>

            <option>24</option>

            <option>36</option>

            <option>48</option>

            <option>72</option>

          </select>
        </div>

        <div class="form-group">
          <label>Quantidade de tubo looses</label>
          <select class="form-control" id="campo-2" name="quantidade_tubo_looses" required>

            <option></option>

            <option>1</option>

            <option>2</option>

            <option>4</option>

            <option>6</option>

          </select>
        </div>

         <div class="form-group">
          <label>Cor</label>
          <input type="color" class="form-control" id="campo-3" name="cor" placeholder="Escolhe uma cor">
        </div>

        <div class="form-group">
          <label>Alto sustentável do cabo</label>
          <select class="form-control" id="campo-4" name="alto_sustentavel_cabo" required>

            <option></option>

            <option>Asu 80</option>

            <option>Asu 120</option>

          </select>
        </div>

        <div class="form-group">
          <label>Status de implementação</label>
          <select class="form-control" id="campo-5" name="status_implementacao" required>

            <option></option>

            <option>Implantado</option>

            <option>Não implantado</option>

          </select>
        </div>


        
       <div class="form-group">
          <label>Observação</label>
          
          <textarea class="form-control" id="campo-6" name="observacao"></textarea>
        </div>
           
    <div class='form-group'>
        <label>Escala (mm)</label>
        <select class='form-control' id="campo-7" name="escala" required>

            <option></option>
            
             <option>1</option>
          
             <option>2</option>

             <option>3</option>

             <option>4</option>

             <option>5</option>

             <option>6</option>

             <option>7</option>

             <option>8</option>

             <option>9</option>

             <option>10</option>
        
        </select>
      </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Atualizar</button>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Deletar cabo </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete/deletecabonivel2.php" method="POST">

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
            + Novo tipo de cabo nível 2
            </button>

            <div class="card" style="margin: 20px 0px 0px 0px;">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'geo');

                $query = "SELECT * FROM cabo_nivel_2";
                $query_run = mysqli_query($connection, $query);

              
            ?>
                    <table id="datatableid" class="table table-bordered table-light">
                        <thead>
                            <tr>
                                <th scope="col" style='display:none'> ID</th>
                                <th scope="col">Em uso</th>
                                <th scope="col">Cor</th>
                                <th scope="col">Quantidade de fibras</th>
                                <th scope="col">Quantidade de tubo looses </th>
                                <th scope="col">Alto sustentável do cabo</th>
                                <th scope="col">Criado em</th>
                                <th scope="col">Modificado em</th>
                                <th scope="col">Status de implementação</th>
                                <th scope="col">Observação</th>
                                <th scope="col">Escala (mm)</th>
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
                                <td class="id-tabela" style='display:none'> <?php echo $row['id']; ?> </td>

                                <td> <input type="radio" id="checkbox-caixa-em-uso" class="checkbox-caixa-em-uso" name="radio" style='text-align:center; width:100%'> </td>
                               

                                <td>

                                 <?php

                                 $cor = $row['cor'];

                                  echo "<div style='background:$cor; width:15px; height:15px'></div>"; 

                                     echo "<div class='cor' style='display:none'>$cor</div>";
                                  ?>

                                 </td>
                                <td class='quantidade_fibras'> <?php echo $row['quantidade_fibras']; ?> </td>
                                <td class='quantidade_tubo_looses'> <?php echo $row['quantidade_tubo_looses']; ?> </td>
                                <td class='alto_sustentavel_cabo'> <?php echo $row['alto_sustentavel_cabo']; ?> </td>
                                <td> <?php echo $row['criado_em']; ?> </td>
                                <td> <?php echo $row['modificado_em']; ?> </td>
                                <td class='status_implementacao'> <?php echo $row['status_implementacao']; ?> </td>
                                <td class='observacao'> <?php echo $row['observacao']; ?> </td>
                                <td class='escala'> <?php echo $row['escala']; ?> </td>
                              
                                
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

     document.querySelector("table").addEventListener("click", (event)=>{

        if(event.target.classList == "btn btn-success editbtn"){

            const container = event.target.parentElement.parentElement
 
          

            document.getElementById("campo-id-editar").value = container.querySelector(".id-tabela").innerText 
            
            document.getElementById("campo-1").value = container.querySelector(".quantidade_fibras").innerText 

            document.getElementById("campo-2").value = container.querySelector(".quantidade_tubo_looses").innerText 

            document.getElementById("campo-3").value = container.querySelector(".cor").innerText 

            document.getElementById("campo-4").value = container.querySelector(".alto_sustentavel_cabo").innerText 

            document.getElementById("campo-5").value = container.querySelector(".status_implementacao").innerText  

            document.getElementById("campo-6").value = container.querySelector(".observacao").innerText 

            document.getElementById("campo-7").value = container.querySelector(".escala").innerText 

            
        }
        
        
        if(event.target.classList == "checkbox-caixa-em-uso"){
            
            const container = event.target.parentElement.parentElement

            const id_tabela = container.querySelector(".id-tabela").innerText
            
            const cor_tabela = container.querySelector(".cor").innerText 
            
            const quantidade_fibras_tabela = container.querySelector(".quantidade_fibras").innerText
            
            const quantidade_tubo_looses_tabela = container.querySelector(".quantidade_tubo_looses").innerText
            
            const alto_sustentavel_cabo_tabela = container.querySelector(".alto_sustentavel_cabo").innerText
             
            const status_implementacao_tabela = container.querySelector(".status_implementacao").innerText
            
            const observacao_tabela = container.querySelector(".observacao").innerText 

            const escala_tabela = container.querySelector(".escala").innerText
            
            localStorage.setItem("id_cabo_nivel_2", id_tabela)
            
            localStorage.setItem("cor_cabo_nivel_2", cor_tabela)
            
            localStorage.setItem("quantidade_fibras_cabo_nivel_2", quantidade_fibras_tabela)
            
            localStorage.setItem("quantidade_tubo_looses_cabo_nivel_2", quantidade_tubo_looses_tabela)
            
            localStorage.setItem("alto_sustentavel_cabo_nivel_2", alto_sustentavel_cabo_tabela)
            
            localStorage.setItem("status_implementacao_cabo_nivel_2", status_implementacao_tabela)
            
            localStorage.setItem("observacao_cabo_nivel_2", observacao_tabela)

            localStorage.setItem("escala_cabo_nivel_2", escala_tabela)

            window.location.reload();
            
        }
        
        
        
        

    })
    
    
    window.onload = ()=>{
        
        if(localStorage.getItem("id_cabo_nivel_2") == null){
            
            localStorage.setItem("id_cabo_nivel_2");
        }
        
        if(localStorage.getItem("cor_cabo_nivel_2") == null){
            
            localStorage.setItem("cor_cabo_nivel_2");
        }
         
        if(localStorage.getItem("quantidade_fibras_cabo_nivel_2") == null){
            
            localStorage.setItem("quantidade_fibras_cabo_nivel_2");
        }
        
        if(localStorage.getItem("quantidade_tubo_looses_cabo_nivel_2") == null){
            
            localStorage.setItem("quantidade_tubo_looses_cabo_nivel_2");
        }
        
        if(localStorage.getItem("alto_sustentavel_cabo_nivel_2") == null){
            
            localStorage.setItem("alto_sustentavel_cabo_nivel_2");
        }
        
        if(localStorage.getItem("status_implementacao_cabo_nivel_2") == null){
            
            localStorage.setItem("status_implementacao_cabo_nivel_2");
        }
        
        if(localStorage.getItem("observacao_cabo_nivel_2") == null){
            
            localStorage.setItem("observacao_cabo_nivel_2");
        }
            
        if(localStorage.getItem("escala_cabo_nivel_2") == null){
            
            localStorage.setItem("escala_cabo_nivel_2")
          } 
          
        
        
        
        let id_tabela = document.querySelectorAll(".id-tabela")
            
           let checkbox_caixa_em_uso = document.querySelectorAll(".checkbox-caixa-em-uso")
            
            for(let i = 0; i < checkbox_caixa_em_uso.length; i++){
                
                if(id_tabela[i].innerText == localStorage.getItem("id_cabo_nivel_2")){
                
                checkbox_caixa_em_uso[i].checked = true
                
                }
                
            }
            
        }


 </script>

 

</body>

</html>
