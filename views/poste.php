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
        <h5 class="modal-title" id="exampleModalLabel">Tela de Novo tipo de poste</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="insert/insertposte.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="id" id="id">


         <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' name='nome' id='nome' placeholder='Nome' required>
      </div>

        <div class="form-group">
          <label>Tipo de Rede</label>
          <select class="form-control" name="tipo_rede" required>
              
               <option></option>
          
            <option>Alta</option>
            
            <option>Baixa</option>
          
          
          </select>
          
        </div>

        <div class="form-group">
          <label>Escolhe uma cor</label>
          <input type="color" class="form-control" name="cor" placeholder="Escolhe uma cor">
        </div>
        <p> 
         <div class="form-group">
          <label>Status de implementação</label>
          <select class="form-control" name="status_implementacao" required>
              
               <option></option>
          
            <option>Implantado</option>
            
            <option>Não implantado</option>
          
          
          </select>
          
        </div>
      </p>
       <p> 
         <div class="form-group">
          <label>Status de licenciamento</label>
          <select class="form-control" name="status_licenciamento" required>
              
               <option></option>
          
            <option>Licenciado</option>
            
            <option>Não licenciado</option>
          
          
          </select>
          
        </div>
      </p>
       <div class="form-group">
          <label>Observação</label>
          
          <textarea class="form-control" name="observacao" placeholder="Observação"></textarea>
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

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Editar Tela de Novo tipo de poste </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update/updateposte.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="id-editar" id="id-editar">

        <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' name='nome' id='campo-0' required>
      </div>

        <div class="form-group">
          <label>Tipo de Rede</label>
          <select class="form-control" name="tipo_rede" id="campo-1" required>
              
               <option></option>
          
            <option>Alta</option>
            
            <option>Baixa</option>
          
          
          </select>
          
        </div>

        <div class="form-group">
          <label>Escolhe uma cor</label>
          <input type="color" class="form-control" name="cor" id="campo-2" placeholder="Escolhe uma cor">
        </div>
        <p> 
         <div class="form-group">
          <label>Status de implementação</label>
          <select class="form-control" name="status_implementacao" id="campo-3" required>
              
               <option></option>
          
            <option>Implantado</option>
            
            <option>Não implantado</option>
          
          
          </select>
          
        </div>
      </p>
       <p> 
         <div class="form-group">
          <label>Status de licenciamento</label>
          <select class="form-control" name="status_licenciamento" id="campo-4" required>
              
               <option></option>
          
            <option>Licenciado</option>
            
            <option>Não licenciado</option>
          
          
          </select>
          
        </div>
      </p>
       <div class="form-group">
          <label>Observação</label>
          
          <textarea class="form-control" name="observacao" id="campo-5" placeholder="Observação"></textarea>
        </div>

        <div class='form-group'>
        <label>Escala (mm)</label>
        <select class='form-control' name="escala" id="campo-6" required>

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
                        <button type="submit" name="updatedata" class="btn btn-primary">Actualizar</button>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Deletar poste </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete/deleteposte.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Pretende deletar este poste?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Não </button>
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
            + Novo tipo de poste
            </button>

            <div class="card" style="margin: 20px 0px 0px 0px;">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'geo');

                $query = "SELECT * FROM poste";
                $query_run = mysqli_query($connection, $query);

              
            ?>
                    <table id="datatableid" class="table table-bordered table-light">
                        <thead>
                            <tr>
                                <th scope="col" style="display:none"> ID</th>
                                <th scope="col"> Em uso</th> 
                                <th scope="col"> Cor</th> 
                                <th scope="col"> Nome</th>     
                                <th scope="col">Tipo de Rede</th>
                                <th scope="col">Status de implementação</th>
                                <th scope="col">Status de licenciamento</th>
                                <th scope="col">Observação</th>
                                <th scope="col">Criado Em</th>
                                <th scope="col">Modificado Em</th>
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
                                
                                <td class="id-tabela" style="display: none"> <?php echo $row['id']; ?> </td>
                                <td> <input type="radio" id="checkbox-poste-em-uso" class="checkbox-poste-em-uso" name="radio" style='text-align:center; width:100%'> </td>
                                <td>
                                    
                                
                                

                                 <?php

                                 $Cor = $row['Cor'];

                                 echo "<div class='cor' style='display:none'>$Cor</div>";

                                  echo "<div style='background:$Cor; width:15px; height:15px'></div>"; 


                                  ?>

                                 </td>
                                 <td class="nome"> <?php echo $row['nome']; ?> </td>
                                <td class="tipo_rede"> <?php echo $row['tipo_rede']; ?> </td>
                                <td class="status_implementacao"> <?php echo $row['status_implementacao']; ?> </td>
                                <td class="status_licenciamento"> <?php echo $row['status_licenciamento']; ?> </td>
                                <td class="observacao"> <?php echo $row['observacao']; ?> </td>
                                <td class="criado_em"> <?php echo $row['criado_em']; ?>  </td>
                                 <td class="modificado_em"> <?php echo $row['modificado_em']; ?> </td>
                                <td class="escala"> <?php echo $row['escala']; ?> </td>
                                
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

                

                $('#update_id').val(data[0]);
                $('#Cor').val(data[1]); 
                $('#Nome').val(data[2]);
                $('#Nome').val(data[3]);
                $('#Permitir_venda').val(data[4]);
                $('#Observacoes').val(data[5]);
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
            
            document.getElementById("id-editar").value = container.querySelector(".id-tabela").innerText 

            document.getElementById("campo-0").value = container.querySelector(".nome").innerText

            document.getElementById("campo-1").value = container.querySelector(".tipo_rede").innerText 

            document.getElementById("campo-2").value = container.querySelector(".cor").innerText 

            document.getElementById("campo-3").value = container.querySelector(".status_implementacao").innerText

            document.getElementById("campo-4").value = container.querySelector(".status_licenciamento").innerText
           
            document.getElementById("campo-5").value = container.querySelector(".observacao").innerText

            document.getElementById("campo-6").value = container.querySelector(".escala").innerText
        

    }
    
    
    if(event.target.classList == "checkbox-poste-em-uso"){
            
            const container = event.target.parentElement.parentElement

            const id_tabela = container.querySelector(".id-tabela").innerText

            const nome_tabela = container.querySelector(".nome").innerText
            
            const tipo_rede_tabela = container.querySelector(".tipo_rede").innerText
            
            const cor_tabela = container.querySelector(".cor").innerText
            
            const status_implementacao_tabela = container.querySelector(".status_implementacao").innerText
            
            const status_licenciamento_tabela = container.querySelector(".status_licenciamento").innerText
            
            const observacao_tabela = container.querySelector(".observacao").innerText

            const escala_tabela = container.querySelector(".escala").innerText
            
            localStorage.setItem("id_poste", id_tabela)

            localStorage.setItem("nome_poste", nome_tabela)
           
            localStorage.setItem("tipo_rede_poste", tipo_rede_tabela)
            
            localStorage.setItem("cor_poste", cor_tabela)
            
            localStorage.setItem("status_implementacao_poste", status_implementacao_tabela)
            
            localStorage.setItem("status_licenciamento_poste", status_licenciamento_tabela)
            
            localStorage.setItem("observacao_poste", observacao_tabela)

            localStorage.setItem("escala_poste", escala_tabela)

             window.location.reload();
            
        }
    
    })
    
    
    window.onload = ()=>{
        
        if(localStorage.getItem("id_poste") == null){
            
            localStorage.setItem("id_poste");
        }

        if(localStorage.getItem("nome_poste") == null){
            
            localStorage.setItem("nome_poste");
        }
        
        if(localStorage.getItem("tipo_rede_poste") == null){
            
            localStorage.setItem("tipo_rede_poste");
        }
        
        if(localStorage.getItem("cor_poste") == null){
            
            localStorage.setItem("cor_poste");
        }
        
        if(localStorage.getItem("status_implementacao_poste") == null){
            
            localStorage.setItem("status_implementacao_poste");
        }
        
        
        if(localStorage.getItem("status_licenciamento_poste") == null){
            
            localStorage.setItem("status_licenciamento_poste");
        } 
        
        if(localStorage.getItem("observacao_poste") == null){
            
            localStorage.setItem("observacao_poste");
        } 
            
        if(localStorage.getItem("escala_poste") == null){
            
            localStorage.setItem("escala_poste")
          } 
        
        
        
        let id_tabela = document.querySelectorAll(".id-tabela")
            
           let checkbox_poste_em_uso = document.querySelectorAll(".checkbox-poste-em-uso")
            
            for(let i = 0; i < checkbox_poste_em_uso.length; i++){
                
                if(id_tabela[i].innerText == localStorage.getItem("id_poste")){
                
                checkbox_poste_em_uso[i].checked = true
                
                }
                
            }
            
        }
  

  </script>

</body>

</html>
