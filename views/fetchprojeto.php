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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tela de Inserção de projecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="insertprojeto.php" method="POST">
      <div class="row">
      <div class="col-md-4">
     
      </div>
      <div class="col-md-8 ml-auto">
          <div class="form-group col-md-12">
          <label for="inputnome">Nome</label>
          <input type="text" class="form-control" id="inputnome" placeholder="Nome">
        </div>
        <div class="form-group col-md-12">
          <label for="inputid">Identificador</label>
          <input type="text" class="form-control" id="inputid" placeholder="identificador">
        </div>
      </div>
    </div>

  <div class="form-group">
    <label for="inputUsuarios">Usuarios</label>
    <input type="text" class="form-control" id="inputUsuarios" placeholder="Usuarios">
  </div>
  <div class="form-group">
    <label for="inputProjeto">Projeto Pai</label>
    <input type="text" class="form-control" id="inputProjeto" placeholder="Projeto Pai">
  </div>

</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" name="insertprojecto" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>


      <div class="container-fluid">
           <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            + Criar Projecto
            </button>
         
        </div>

      </div>
      <!-- /.container-fluid -->

      

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
