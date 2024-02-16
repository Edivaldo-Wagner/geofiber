 <link rel="stylesheet" href="css/estilo.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/index.js"></script>
<script src="https://cdn.rawgit.com/hayeswise/Leaflet.PointInPolygon/v1.0.0/wise-leaflet-pip.js"></script>
<script src="municipalities.js" type="text/javascript"></script>


<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<style type="text/css">

  #full-embed{
    display: none;
    position: fixed;
  }

  .dataTable-dropdown{
    display: none;
  }

  .leaflet-popup-close-button{
    display: none;
  }
      
    .leaflet-edit-resize{
      diplay: none;
    }

    .leaflet-touch .leaflet-draw-toolbar .leaflet-draw-edit-edit, .leaflet-touch .leaflet-draw-toolbar .leaflet-draw-edit-remove {
      diplay: none;
    }

    

  </style>


<?php

date_default_timezone_set("Asia/Kolkata");

error_reporting(0);
session_start();

if (!isset($_SESSION['adm_Id'])) {
//  header('Location: login.php');
}
include 'header.php';



include 'includes/caixa-mapa.php';

include 'includes/caixa-nivel-2-mapa.php';

include 'includes/poste-mapa.php';

include 'includes/concentrador-mapa.php';

include 'includes/cabo-nivel-1-mapa.php';

include 'includes/cabo-nivel-2-mapa.php';

include 'includes/cabo-drop-mapa.php';

include 'includes/poligono-mapa.php';

include 'includes/diagrama.php';

?>

<body id="page-top">

  <div class="form_select_nivel_cabo" id="form_select_nivel_cabo">
    
    <div class="container-modal container-modal-cabo-mapa" style="height: 270px; overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b style="position: relative; top: -17px;">Selecione o Nível do Cabo</b></div>
        
       
        
        
        

        <div id="main-form-cabo-mapa">

        <div class="modal-body">

      <div class="form-group">
        <label>Nível do Cabo</label>
        <select class="form-control" id="select_nivel_cabo" required style='cursor:default'>
            
          <option></option>

        <option>Cabo nível 1</option>
            
        <option>Cabo nível 2</option>

        <option>Cabo drop</option>
        
        </select>
        
      </div>

      

    <div class="modal-footer">
        
      <button type="button" class="btn btn-secondary" id="btn_close_select_nivel_cabo" data-dismiss="modal">Fechar</button>
      <button type="submit" id="btn_salvar_select_nivel_cabo" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->

</div> <!--.modal-->


  <div class="modal-form-mapa form_select_nivel_caixa_1_2" id="form_select_nivel_caixa_1_2" style="z-index:2600;">
    
    <div class="container-modal container-modal-cabo-mapa" style="height: 270px; overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b style="position: relative; top: -17px;">Selecione o Nível da Caixa</b></div>
        
       
        
        
        

        <div id="main-form-cabo-mapa">

        <div class="modal-body">

      <div class="form-group">
        <label>Nível da Caixa</label>
        <select class="form-control" id="select_nivel_caixa_1_2" required style='cursor:default'>
            
          <option></option>

        <option>Caixa Nível 1</option>
            
            <option>Caixa Nível 2</option>

            
        
        </select>
        
      </div>

      

    <div class="modal-footer">
        
      <button type="button" class="btn btn-secondary" id="btn_close_select_nivel_caixa_1_2" data-dismiss="modal">Fechar</button>
      <button type="submit" id="btn_salvar_select_nivel_caixa_1_2" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->

</div> <!--.modal-->



  <?php include 'navbar.php';?>

  <div id="wrapper">

  <?php include 'sidebar.php';?>

    <div id="content-wrapper" class="container-mapa">
      <div class="col-12 d-flex justify-content-center align-items-center p-2">
        <div class="col-12 col-md-10 bg-white map" id="map">



          <div class="msg_trasejado_cabo_desenhos_mapa" id="cancelar-popup-cabo-mapa" style="position: relative; width:100px; top: -50000000%; z-index: 1001; height:30px; background: rgba(0, 0, 0, 0.6); margin: 85px 28px; color: #fff; padding-top: 5px; text-align: center; border:1px solid rgba(0, 0, 0, 0.2); box-shadw: 1px 1px 1px 1px rgba(0, 0, 0, 0.2); border-radius:2px; cursor: pointer;"> Cancelar </div>

          <div class="msg_trasejado_cabo_desenhos_mapa" id="msg_trasejado_cabo_desenhos_mapa" style="position: relative; width:160px; z-index: -33000; height:30px; background: #919187; margin: -115px 30px; color: #fff; padding-top: 5px; text-align: center; border:1px solid rgba(0, 0, 0, 0.2); box-shadw: 1px 1px 1px 1px rgba(0, 0, 0, 0.2); border-radius:2px; cursor: pointer;"> Selecione os Equipamentos </div>

          

          <div class="adicionar_concentrador_mapa" style="position: relative; width:32px; z-index: 1001; height:30px; background: #fff; margin: 146px -4px; border:1px solid rgba(0, 0, 0, 0.3); box-shdow: 1px 1px 1px 1px rgba(0, 0, 0, 0.2); border-radius:2px; cursor: pointer;"> <label class="material-icons" style="font-size:18px; padding:5px; color: rgba(0, 0, 0, 0.6)">house_app_logo</label> </div>

          <div id="cancelar-popup-concentrador-mapa" style="position: relative; top: -50000000%; width:100px; z-index: 1001; height:30px; background: pink; margin: 309px 28px; color: #fff; padding-top: 5px; text-align: center; border:1px solid rgba(0, 0, 0, 0.1); border-radius:2px; cursor: pointer;"> Cancelar </div>





          <div class="adicionar_poste_mapa" style="position: relative; width:32px; z-index: 1001; height:30px; background: #fff; margin: -618px -4px; border:1px solid rgba(0, 0, 0, 0.3); box-shaow: 1px 1px 1px 1px rgba(0, 0, 0, 0.2); border-radius:2px; cursor: pointer;"> <label class="material-icons" style="font-size:18px; padding:5px; color: rgba(0, 0, 0, 0.6)">push_pin</label> </div>

          <div id="cancelar-popup-poste-mapa" style="position: relative; top: -50000000%; width:100px; z-index: 1001; height:30px; background: #f00; margin: 275px 28px; color: #fff; padding-top: 5px; text-align: center; border:1px solid rgba(0, 0, 0, 0.1); border-radius:2px; cursor: pointer;"> Cancelar </div>






          <div class="adicionar_caixa_mapa" style="position: relative; width:32px; z-index: 1001; height:30px; background: #fff; margin: -22px -4px; border:1px solid rgba(0, 0, 0, 0.3); box-shaow: 1px 1px 1px 1px rgba(0, 0, 0, 0.2); border-radius:2px; cursor: pointer;"> <label class="material-icons" style="font-size:14px; padding:8px; color: rgba(0, 0, 0, 0.6)">circle</label> </div>

          <div id="cancelar-popup-caixa-mapa" style="position: relative; top: -50000000%; width:100px; z-index: 1001; height:30px; background: blue; margin: 309px 28px; color: #fff; padding-top: 5px; text-align: center; border:1px solid rgba(0, 0, 0, 0.1); border-radius:2px; cursor: pointer;"> Cancelar </div>

          <!---

          <div class="deletar_desenhos_mapa" style="position: relative; z-index: 1001; width:32px; z-index: 1001; height:30px; background: #fff; margin: 235px -4px; border:1px solid rgba(0, 0, 0, 0.3); box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.2); border-radius:2px; cursor: pointer;"> <label class="material-icons" style="font-size:18px; padding:5px; color: rgba(0, 0, 0, 0.6)">delete</label> </div>---->

          <div class="trasejado_cabo_desenhos_mapa" id="adicionar_cabo_mapa" style="position: relative; width:32px; z-index: 1001; height:30px; background: #fff; margin: -747px -4px; border:1px solid rgba(0, 0, 0, 0.2); box-shadw: 1px 1px 1px 1px rgba(0, 0, 0, 0.2); border-radius:2px; cursor: default;"> <label class="material-icons" style="font-size:18px; padding:5px; color: rgba(0, 0, 0, 0.6)">timeline</label> </div>


          <div class="msg_trasejado_cabo_desenhos_mapa" id="cancelar-popup-deletar-desenhos-mapa" style="position: relative; top: -50000000%; width:100px; z-index: 33000; height:30px; background: rgba(0, 0, 0, 0.6); margin: 913px 28px; color: #fff; padding-top: 5px; text-align: center; border:1px solid rgba(0, 0, 0, 0.2); box-shadw: 1px 1px 1px 1px rgba(0, 0, 0, 0.2); border-radius:2px; cursor: pointer;"> Cancelar </div>

          <div class="editar_desenhos_mapa" style="position: relative; z-index: 1001; width:32px; z-index: 1001; height:30px; background: #fff; margin: -973px -4px; border:1px solid rgba(0, 0, 0, 0.3); box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1); border-radius:2px; cursor: pointer;"> <label class="material-icons" style="font-size:18px; padding:5px; color: rgba(0, 0, 0, 0.6)">edit</label> </div>

          <div class="msg_trasejado_cabo_desenhos_mapa" id="cancelar-popup-editar-desenhos-mapa" style="position: relative; top: -50000000%; width:100px; z-index: 33000; height:30px; background: rgba(0, 0, 0, 0.6); margin: 945px 28px; color: #fff; padding-top: 5px; text-align: center; border:1px solid rgba(0, 0, 0, 0.2); box-shadw: 1px 1px 1px 1px rgba(0, 0, 0, 0.2); border-radius:2px; cursor: pointer;"> Concluir </div>

          <div class="deletar_desenhos_mapa" style="position: relative; tp: -50000000%; width:32px; z-index: 1001; height:30px; background: #fff; margin: -946px -4px; border:1px solid rgba(0, 0, 0, 0.2); box-shadw: 1px 1px 1px 1px rgba(0, 0, 0, 0.1); border-radius:2px; cursor: default;"> <label class="material-icons" style="font-size:18px; padding:5px; color: rgba(0, 0, 0, 0.6)">delete</label> </div>

        


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


    <script>


      localStorage.removeItem("array_caixas_selecionadas")

      localStorage.removeItem("array_postes_selecionados")

      sessionStorage.setItem("novo_cabo_mapa", 0)

      localStorage.removeItem("array_cabos_selecionados")

        
      localStorage.setItem("novo-concentrador", 0)

      sessionStorage.setItem("deletar_elementos_mapa", 0)

      sessionStorage.setItem("editar_elementos_mapa", 0)

      if(localStorage.getItem("array_concentrador_mapa") == null){

        localStorage.setItem("array_concentrador_mapa", "[]")
 
      }

      let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))




      localStorage.setItem("novo-post", 0)
 

      if(localStorage.getItem("array_post_mapa") == null){

        localStorage.setItem("array_post_mapa", "[]")

      }

      let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))





      localStorage.setItem("nova-caix", 0)
 

      if(localStorage.getItem("array_caix_mapa") == null){

        localStorage.setItem("array_caix_mapa", "[]")

      }

      let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))




      localStorage.removeItem("equipamentos_do_mapa")

      if(localStorage.getItem("equipamentos_do_mapa") == null){

        localStorage.setItem("equipamentos_do_mapa", "[]")

      }

      let equipamentos_do_mapa = JSON.parse(localStorage.getItem("equipamentos_do_mapa"))


      localStorage.removeItem("equipamentos_selecionados_cabo")

      localStorage.removeItem("primeiro_equip_cabo")

      localStorage.removeItem("segundo_equip_cabo")

      if(localStorage.getItem("equipamentos_selecionados_cabo") == null){

        localStorage.setItem("equipamentos_selecionados_cabo", "[]")

      }

      let equipamentos_selecionados_cabo = JSON.parse(localStorage.getItem("equipamentos_selecionados_cabo"))



    if(localStorage.getItem("array_cabo_mapa") == null){

  localStorage.setItem("array_cabo_mapa", "[]")

} 

let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))



      if(localStorage.getItem("array_caixa_mapa") == null){

  localStorage.setItem("array_caixa_mapa", "[]")

} 

let string_array_caixa_mapa = JSON.parse(localStorage.getItem("array_caixa_mapa"))


  if(localStorage.getItem("array_poste_mapa") == null){

  localStorage.setItem("array_poste_mapa", "[]")

} 

let string_array_poste_mapa = JSON.parse(localStorage.getItem("array_poste_mapa"))

  
  

  if(localStorage.getItem("array_coordenadas_caix") == null){

  localStorage.setItem("array_coordenadas_caix", "[]")

} 

let string_array_coordenadas_caix = JSON.parse(localStorage.getItem("array_coordenadas_caix"))


      <?php
        //Resgatar figuras da base de dados
        $query = mysqli_query($conn, "SELECT * FROM `posicao_actual_mapa`");

        while($lat_lng = mysqli_fetch_array($query)) {
          ?>
            var lat_lng = JSON.parse(`<?php echo $lat_lng['lat_lng']; ?>`);
            var loc = lat_lng;
          <?php
        }
      ?>

//var loc = [51.505, -0.09];

      
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(pos) {
          loc = [pos.coords.latitude, pos.coords.longitude];
        });
      }

      <?php
        //Resgatar figuras da base de dados
        $query = mysqli_query($conn, "SELECT * FROM `posicao_actual_mapa`");

        while($zoom = mysqli_fetch_array($query)) {
          ?>
            var zoom = JSON.parse(`<?php echo $zoom['zoom']; ?>`);
            var map = L.map('map', {
              closePopupOnClick:false


            }).setView(loc, zoom);
          <?php
        }
      ?>

      
      L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3'],
      }).addTo(map);

      var drawnItems = new L.FeatureGroup();
      map.addLayer(drawnItems);
      var drawControl = new L.Control.Draw({
        draw:{
          //tudo habilitado
        },
        edit: {
          featureGroup: drawnItems,
        }
      });
      map.addControl(drawControl);

      

      map.on("mousemove", function(e){

        

        let array_lat_lng = [e.latlng.lat, e.latlng.lng]

       // console.log(array_lat_lng)

        $.post('mapAPI/positicao_actual_mapa.php', {
        
          array_lat_lng: array_lat_lng,
        
      })

      })

      map.on('zoomend', onZoomend)
    function onZoomend(feature){

      let mainZoom = map.getZoom()

      //console.log(mainZoom)

      $.post('mapAPI/positicao_actual_zoom_mapa.php', {
        
              zoom: mainZoom,
              
            })

    
      }


      /*for(let i = 0; i < string_array_concentrador_mapa.length; i++){

                  if(greenIcon.options.uniqueid == string_array_concentrador_mapa[i].uniqueid){

                      console.log(string_array_concentrador_mapa[i].uniqueid)

                      openEditModalConcentradorMapa()

                      document.getElementById("edit_nome_concentrador").value = string_array_concentrador_mapa[i].nome_concentrador

                      document.getElementById("edit_status_implementacao_concentrador").value = string_array_concentrador_mapa[i].status_implementacao_concentrador

                      document.getElementById("edit_observacao_concentrador").value = string_array_concentrador_mapa[i].observacao_concentrador

                      document.getElementById("edit_escala_concentrador").value = string_array_concentrador_mapa[i].escala_concentrador

                  }


                }*/



/*=======================DESENHO DE EQUIPAMENTOS AO CLICAR NO MAPA============================*/

 var latlngs = []; // Cria uma matriz vazia para armazenar as coordenadas do polyline

      var polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);


      document.getElementById("msg_trasejado_cabo_desenhos_mapa").addEventListener("click", ()=>{

        document.getElementById("cancelar-popup-desenhos-mapa").style.cssText 


      })

      var nome_cabo = ""

      map.on('dblclick', function(e) {



        if(sessionStorage.getItem("novo_cabo_mapa") == 1){

           var unique = new Date().valueOf();
            let id = unique;
             //enviar figura a base de dados

             

              


             let equipamentos_selecionados_caboo = JSON.parse(localStorage.getItem("equipamentos_selecionados_cabo"))

              equipamentos_selecionados_caboo.forEach((i)=>{

                nome_cabo = `${i.primeiro} - ${i.segundo}`

              })

              

              var array_coordenadas_cabo = []


            if(localStorage.getItem("cabo_atual") == "Cabo drop"){

              
          let mini_array_coordenadas_cabo =  []

          let objeto_array_coordenadas_cabo = ""

            for(let d = 0; d < latlngs.length; d++){

               mini_array_coordenadas_cabo.push(`${latlngs[d].lng},${latlngs[d].lat},0`)

                


                

              }

              objeto_array_coordenadas_cabo = {

                  name: nome_cabo,
                  color: localStorage.getItem("cor_cabo_nivel_1"),
                  coordinates: mini_array_coordenadas_cabo

               }


              
              

            var toJson = {
          '_latlngs': latlngs,
          '_latlngs_coordenadas': objeto_array_coordenadas_cabo,
          'lat_lng': latlngs[0],
          'layerType': 'polyline',
          'uniqueid': id,
          "id_cabo": 0,
          "nivel_cabo": localStorage.getItem("cabo_atual"),
          "nome_cabo": nome_cabo,
          "cor": localStorage.getItem("cor_cabo_drop"),
          "observacao_cabo": localStorage.getItem("observacao_cabo_drop"),
          "escala_cabo": localStorage.getItem("escala_cabo_drop")
          
        }

          let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))

      string_array_cabo_mapa.push(toJson)

      localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))
       
     // console.log(string_array_cabo_mapa)
        

      localStorage.removeItem("equipamentos_selecionados_cabo")


        if(localStorage.getItem("equipamentos_selecionados_cabo") == null){

        localStorage.setItem("equipamentos_selecionados_cabo", "[]")

      }

      localStorage.removeItem("primeiro_equip_cabo")

      localStorage.removeItem("segundo_equip_cabo")

      sessionStorage.setItem("novo_cabo_mapa", 0)

     document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

     polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);


    let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa")) 

      string_array_caix_mapa.forEach((j)=>{

           desenhar(j, false);


        })


      let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))


      string_array_post_mapa.forEach((l)=>{

           desenhar(l, false);


        })
        

        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((mn)=>{

           desenhar(mn, false);


        })


        //let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((op)=>{

           desenhar(op, false);


        })

        document.getElementById("cancelar-popup-cabo-mapa").style.top = "-50000000%"

      return  


      }


        if(localStorage.getItem("cabo_atual") == "Cabo nível 2"){

          

           
          let mini_array_coordenadas_cabo =  []

          let objeto_array_coordenadas_cabo = ""

            for(let d = 0; d < latlngs.length; d++){

               mini_array_coordenadas_cabo.push(`${latlngs[d].lng},${latlngs[d].lat},0`)

                


                

              }

              objeto_array_coordenadas_cabo = {

                  name: nome_cabo,
                  color: localStorage.getItem("cor_cabo_nivel_1"),
                  coordinates: mini_array_coordenadas_cabo

               }


              
              

            var toJson = {
          '_latlngs': latlngs,
          '_latlngs_coordenadas': objeto_array_coordenadas_cabo,
          'lat_lng': latlngs[0],
          'layerType': 'polyline',
          'uniqueid': id,
          "id_cabo": 2,
          "nivel_cabo": localStorage.getItem("cabo_atual"),
          "nome_cabo": nome_cabo,
          "quantidade_fibras_cabo": localStorage.getItem("quantidade_fibras_cabo_nivel_2"),
          "quantidade_tubo_looses_cabo": localStorage.getItem("quantidade_tubo_looses_cabo_nivel_2"),
          "alto_sustentavel_cabo": localStorage.getItem("alto_sustentavel_cabo_nivel_2"),
          "status_implementacao_cabo": localStorage.getItem("status_implementacao_cabo_nivel_2"),
          "cor": localStorage.getItem("cor_cabo_nivel_2"),
          "observacao_cabo": localStorage.getItem("observacao_cabo_nivel_2"),
          "escala_cabo": localStorage.getItem("escala_cabo_nivel_2")
          
          }

          let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))

      string_array_cabo_mapa.push(toJson)

      localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))
       
      console.log(string_array_cabo_mapa)
        

         localStorage.removeItem("equipamentos_selecionados_cabo")


        if(localStorage.getItem("equipamentos_selecionados_cabo") == null){

        localStorage.setItem("equipamentos_selecionados_cabo", "[]")

      }




      localStorage.removeItem("primeiro_equip_cabo")

      localStorage.removeItem("segundo_equip_cabo")

      sessionStorage.setItem("novo_cabo_mapa", 0)

      document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

      polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);

    let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa")) 

      string_array_caix_mapa.forEach((j)=>{

           desenhar(j, false);


        })


      let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))


      string_array_post_mapa.forEach((l)=>{

           desenhar(l, false);


        })
        

        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((mn)=>{

           desenhar(mn, false);


        })


        //let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((op)=>{

           desenhar(op, false);


        })

        document.getElementById("cancelar-popup-cabo-mapa").style.top = "-50000000%"

      return  


        }

        if(localStorage.getItem("cabo_atual") == "Cabo nível 1"){

          let mini_array_coordenadas_cabo =  []

          let objeto_array_coordenadas_cabo = ""

            for(let d = 0; d < latlngs.length; d++){

               mini_array_coordenadas_cabo.push(`${latlngs[d].lng},${latlngs[d].lat},0`)

                


                

              }

              objeto_array_coordenadas_cabo = {

                  name: nome_cabo,
                  color: localStorage.getItem("cor_cabo_nivel_1"),
                  coordinates: mini_array_coordenadas_cabo

               }


              
              

            var toJson = {
          '_latlngs': latlngs,
          '_latlngs_coordenadas': objeto_array_coordenadas_cabo,
          'lat_lng': latlngs[0],
          'layerType': 'polyline',
          'uniqueid': id,
          "id_cabo": 1,
          "nivel_cabo": localStorage.getItem("cabo_atual"),
          "nome_cabo": nome_cabo,
          "quantidade_fibras_cabo": localStorage.getItem("quantidade_fibras_cabo_nivel_1"),
          "quantidade_tubo_looses_cabo": localStorage.getItem("quantidade_tubo_looses_cabo_nivel_1"),
          "alto_sustentavel_cabo": localStorage.getItem("alto_sustentavel_cabo_nivel_1"),
          "status_implementacao_cabo": localStorage.getItem("status_implementacao_cabo_nivel_1"),
          "cor": localStorage.getItem("cor_cabo_nivel_1"),
          "observacao_cabo": localStorage.getItem("observacao_cabo_nivel_1"),
          "escala_cabo": localStorage.getItem("escala_cabo_nivel_1")
          
        }

          let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))

      string_array_cabo_mapa.push(toJson)

      localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))
       
     // console.log(string_array_cabo_mapa)
        

         localStorage.removeItem("equipamentos_selecionados_cabo")


        if(localStorage.getItem("equipamentos_selecionados_cabo") == null){

        localStorage.setItem("equipamentos_selecionados_cabo", "[]")

      }

      localStorage.removeItem("primeiro_equip_cabo")

      localStorage.removeItem("segundo_equip_cabo")

      sessionStorage.setItem("novo_cabo_mapa", 0)

      document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

      polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);


    let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa")) 

      string_array_caix_mapa.forEach((j)=>{

           desenhar(j, false);


        })


      let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))


      string_array_post_mapa.forEach((l)=>{

           desenhar(l, false);


        })
        

        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((mn)=>{

           desenhar(mn, false);


        })


        //let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((op)=>{

           desenhar(op, false);


        })

        document.getElementById("cancelar-popup-cabo-mapa").style.top = "-50000000%"

      return  

 
           }

         }           

     }) 



map.on('click', function(e) {

  if(sessionStorage.getItem("novo_cabo_mapa") == 1){


      


    document.querySelectorAll(".modal-form-mapa").forEach((i)=>{

      i.style.display = "none"

    })

    polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);


    latlngs.push(e.latlng); 
        polyline.setLatLngs(latlngs);

      //console.log(latlngs)

    }else{

      latlngs = []

    }
  

  var array_lat_lng_poste = []
   

  if(localStorage.getItem("escala_poste") == 10){

             array_lat_lng_poste = [[e.latlng.lat, e.latlng.lng], [e.latlng.lat-0.000169989262364, e.latlng.lng-0.000169989262364], [e.latlng.lat-0.000169989262364, e.latlng.lng], [e.latlng.lat, e.latlng.lng-0.000169989262364]]

          }

          if(localStorage.getItem("escala_poste") == 9){

             array_lat_lng_poste = [[e.latlng.lat, e.latlng.lng], [e.latlng.lat-0.000129989262364, e.latlng.lng-0.000129989262364], [e.latlng.lat-0.000129989262364, e.latlng.lng], [e.latlng.lat, e.latlng.lng-0.000129989262364]]

          }

           if(localStorage.getItem("escala_poste") == 8){

             array_lat_lng_poste = [[e.latlng.lat, e.latlng.lng], [e.latlng.lat-0.00009089262364, e.latlng.lng-0.00009089262364], [e.latlng.lat-0.00009089262364, e.latlng.lng], [e.latlng.lat, e.latlng.lng-0.00009089262364]]

          }

          if(localStorage.getItem("escala_poste") == 7){

             array_lat_lng_poste = [[e.latlng.lat, e.latlng.lng], [e.latlng.lat-0.00008089262364, e.latlng.lng-0.00008089262364], [e.latlng.lat-0.00008089262364, e.latlng.lng], [e.latlng.lat, e.latlng.lng-0.00008089262364]]

          }

          if(localStorage.getItem("escala_poste") == 6){

             array_lat_lng_poste = [[e.latlng.lat, e.latlng.lng], [e.latlng.lat-0.00007089262364, e.latlng.lng-0.00007089262364], [e.latlng.lat-0.00007089262364, e.latlng.lng], [e.latlng.lat, e.latlng.lng-0.00007089262364]]

          }

          if(localStorage.getItem("escala_poste") == 5){

             array_lat_lng_poste = [[e.latlng.lat, e.latlng.lng], [e.latlng.lat-0.00006089262364, e.latlng.lng-0.00006089262364], [e.latlng.lat-0.00006089262364, e.latlng.lng], [e.latlng.lat, e.latlng.lng-0.00006089262364]]


          }

          if(localStorage.getItem("escala_poste") == 4){

             array_lat_lng_poste = [[e.latlng.lat, e.latlng.lng], [e.latlng.lat-0.00005089262364, e.latlng.lng-0.00005089262364], [e.latlng.lat-0.00005089262364, e.latlng.lng], [e.latlng.lat, e.latlng.lng-0.00005089262364]]

          }

          if(localStorage.getItem("escala_poste") == 3){

             array_lat_lng_poste = [[e.latlng.lat, e.latlng.lng], [e.latlng.lat-0.00004089262364, e.latlng.lng-0.00004089262364], [e.latlng.lat-0.00004089262364, e.latlng.lng], [e.latlng.lat, e.latlng.lng-0.00004089262364]]

          }

          if(localStorage.getItem("escala_poste") == 2){

             array_lat_lng_poste = [[e.latlng.lat, e.latlng.lng], [e.latlng.lat-0.00003089262364, e.latlng.lng-0.00003089262364], [e.latlng.lat-0.00003089262364, e.latlng.lng], [e.latlng.lat, e.latlng.lng-0.00003089262364]]

          }

          if(localStorage.getItem("escala_poste") == 1){

             array_lat_lng_poste = [[e.latlng.lat, e.latlng.lng], [e.latlng.lat-0.00001689262364, e.latlng.lng-0.00001689262364], [e.latlng.lat-0.00001689262364, e.latlng.lng], [e.latlng.lat, e.latlng.lng-0.00001689262364]]

          }




    var unique = new Date().valueOf();
    

    if(localStorage.getItem("novo-post") == 1){
 
      


      var toJson = {
            '_lat': e.latlng.lat, 
            '_lng': e.latlng.lng,
            '_latlngs': array_lat_lng_poste,
            'layerType': 'rectangle',
            'uniqueid': unique, 
            'nome_poste': localStorage.getItem("nome_poste"), 
            'tipo_rede_poste': localStorage.getItem("tipo_rede_poste"), 
             'cor': localStorage.getItem("cor_poste"),
             'status_implementacao_poste': localStorage.getItem("status_implementacao_poste"), 
             'status_licenciamento_poste': localStorage.getItem("status_licenciamento_poste"),
             'observacao': localStorage.getItem("observacao_poste"),
             'escala_poste': localStorage.getItem("escala_poste"),

        } 

          let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))

      string_array_post_mapa.push(toJson)

      localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa))



      var json_poste = { 
         color: toJson.cor,
         radius:10,
            weight: 1,
            keepAspectRatio:true,
            
};

      //console.log(toJson)

//L.marker(array_lat_lng_poste, {icon: greenIcon}).addTo(map);



  document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

  polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);


        string_array_post_mapa.forEach((l)=>{

           desenhar(l, false);


        })


        let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))

        string_array_caix_mapa.forEach((j)=>{

           desenhar(j, false);


        })

        

        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((mn)=>{

           desenhar(mn, false);


        })


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((op)=>{

           desenhar(op, false);


        })



     // localStorage.setItem("novo-post", 0)

    }






 





if(localStorage.getItem("nova-caix") == 1){

    


    let objeto_array_coordenadas_caix = { uniqueid: unique, lat: e.latlng.lat, lng: e.latlng.lng, radius: 1, color: localStorage.getItem("cor_caixa_main"), caixa_selecionada: "" }

    string_array_coordenadas_caix.push(objeto_array_coordenadas_caix)

    localStorage.setItem("array_coordenadas_caix", JSON.stringify(string_array_coordenadas_caix))

 
      var toJson = {
            '_latlng': e.latlng, 
           'layerType': 'circle',
           '_mRadius': localStorage.getItem("escala_caixa_main"),
           'uniqueid': unique,
           'latlng_coordenadas': { lat: e.latlng.lat, lng: e.latlng.lng, radius: 1, color: localStorage.getItem("cor_caixa_main") },
           'fillColor_caixa': localStorage.getItem("fillColor_caixa_main"),
           'fillOpacity_caixa': localStorage.getItem("fillOpacity_caixa_main"), 
           'opacity_caixa': localStorage.getItem("opacity_caixa_main"),
           'id': localStorage.getItem("id_caixa_main"), 
           'nivel_caixa':localStorage.getItem("titulo-caixa-form_main"),
           'nome_caixa': localStorage.getItem("nome_caixa_main"), 
           'splitter_caixa': localStorage.getItem("splitter_caixa_main"),
           'status_implementacao_caixa': localStorage.getItem("status_implementacao_caixa_main"), 
           'tipo_splitter_caixa': localStorage.getItem("tipo_splitter_caixa_main"),
           'cor': localStorage.getItem("cor_caixa_main"),
           'observacao': localStorage.getItem("observacao_caixa_main"),
           'escala_caixa': localStorage.getItem("escala_caixa_main"),

        } 



         












          let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))

      string_array_caix_mapa.push(toJson)

      localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa))



    

  document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

  polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);

    let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))


        string_array_post_mapa.forEach((f)=>{

           desenhar(f, false);


        })


        

        string_array_caix_mapa.forEach((j)=>{

           desenhar(j, false);


        })


        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((nm)=>{

           desenhar(nm, false);


        })

        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((tr)=>{

           desenhar(tr, false);


        })



     // localStorage.setItem("novo-post", 0)

    }





if(localStorage.getItem("novo-concentrador") == 1){

 

  var array_scala_concentrador = []

          if(localStorage.getItem("escala_concentrador") == 10){

             array_scala_concentrador.push(60) 

             array_scala_concentrador.push(60) 

          }

          if(localStorage.getItem("escala_concentrador") == 9){

             array_scala_concentrador.push(55) 

             array_scala_concentrador.push(55) 

          }

           if(localStorage.getItem("escala_concentrador") == 8){

             array_scala_concentrador.push(50) 

             array_scala_concentrador.push(50) 

          }

          if(localStorage.getItem("escala_concentrador") == 7){

             array_scala_concentrador.push(45) 

             array_scala_concentrador.push(45) 

          }

          if(localStorage.getItem("escala_concentrador") == 6){

             array_scala_concentrador.push(40) 

             array_scala_concentrador.push(40) 

          }

          if(localStorage.getItem("escala_concentrador") == 5){

             array_scala_concentrador.push(35) 

             array_scala_concentrador.push(35) 

          }

          if(localStorage.getItem("escala_concentrador") == 4){

             array_scala_concentrador.push(30) 

             array_scala_concentrador.push(30) 

          }

          if(localStorage.getItem("escala_concentrador") == 3){

             array_scala_concentrador.push(25) 

             array_scala_concentrador.push(25) 

          }

          if(localStorage.getItem("escala_concentrador") == 2){

             array_scala_concentrador.push(20) 

             array_scala_concentrador.push(20) 

          }

          if(localStorage.getItem("escala_concentrador") == 1){

             array_scala_concentrador.push(17) 

             array_scala_concentrador.push(17) 

          }


var jsonConcentrador = L.icon({
    iconUrl: 'img/home.png',
    shadowUrl: 'https://unpkg.com/leaflet@1.8.0/dist/images/marker-shadow.png',

    iconSize: array_scala_concentrador, // size of the icon
    draggable: true,
    shadowSize:   [5, 5], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});


var objetoConcentrador = {
  '_latlng': e.latlng,
  'layerType': 'marker',
  'uniqueid': unique,
  'concentrador_selecionado': "",
  'nome_concentrador': localStorage.getItem("nome_concentrador"),
  'status_implementacao_concentrador': localStorage.getItem("status_implementacao_concentrador"),
  'observacao_concentrador': localStorage.getItem("observacao_concentrador"),
  'escala_concentrador_main': array_scala_concentrador,
  'escala_concentrador': localStorage.getItem("escala_concentrador")
}




string_array_concentrador_mapa.push(objetoConcentrador)

 localStorage.setItem('array_concentrador_mapa', JSON.stringify(string_array_concentrador_mapa))

 

//L.marker(e.latlng, {icon: jsonConcentrador}).addTo(map);

desenhar(objetoConcentrador, false)

localStorage.setItem("novo-concentrador", 0) 

document.getElementById("cancelar-popup-concentrador-mapa").style.top = "-50000000%" 


}





});


/*=======================EXIBICAO DO CONCENTRADOR AO CARREGAR A PAGINA============================*/



string_array_concentrador_mapa.forEach((as)=>{

  var jsonConcentradorr = L.icon({
    iconUrl: 'img/home.png',
    shadowUrl: 'https://unpkg.com/leaflet@1.8.0/dist/images/marker-shadow.png',

    iconSize: as.escala_concentrador_main, // size of the icon
    draggable: true,
    shadowSize:   [5, 5], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});


var toJson = {
  '_latlng': as._latlng,
  'layerType': 'marker',
  'uniqueid': as.uniqueid,
  'nome_concentrador': as.nome_concentrador,
  'status_implementacao_concentrador': as.status_implementacao_concentrador,
  'observacao_concentrador': as.observacao_concentrador,
  'escala_concentrador_main': as.escala_concentrador_main,
  'escala_concentrador': as.escala_concentrador
}

  desenhar(toJson, false)

  //L.marker(as._latlng, {icon: jsonConcentradorr}).addTo(map).on('click', function(d) {

   //console.log(d)


  //})

})
 


/*=======================/EXIBICAO DO CONCENTRADOR AO CARREGAR A PAGINA============================*/



/*=======================EXIBICAO DO POSTE AO CARREGAR A PAGINA============================*/



string_array_post_mapa.forEach((i)=>{

          var array_scala_post = [] 



          if(i.escala_poste == 10){

             array_scala_post = [[i._lat, i._lng], [i._lat-0.000169989262364, i._lng-0.000169989262364], [i._lat-0.000169989262364, i._lng], [i._lat, i._lng-0.000169989262364]]

          }

          if(i.escala_poste == 9){

             array_scala_post = [[i._lat, i._lng], [i._lat-0.000129989262364, i._lng-0.000129989262364], [i._lat-0.000129989262364, i._lng], [i._lat, i._lng-0.000129989262364]]

          }

           if(i.escala_poste == 8){

             array_scala_post = [[i._lat, i._lng], [i._lat-0.00009089262364, i._lng-0.00009089262364], [i._lat-0.00009089262364, i._lng], [i._lat, i._lng-0.00009089262364]] 

          }

          if(i.escala_poste == 7){

             array_scala_post = [[i._lat, i._lng], [i._lat-0.00008089262364, i._lng-0.00008089262364], [i._lat-0.00008089262364, i._lng], [i._lat, i._lng-0.00008089262364]] 

          }

          if(i.escala_poste == 6){

             array_scala_post = [[i._lat, i._lng], [i._lat-0.00007089262364, i._lng-0.00007089262364], [i._lat-0.00007089262364, i._lng], [i._lat, i._lng-0.00007089262364]] 

          }

          if(i.escala_poste == 5){

             array_scala_post = [[i._lat, i._lng], [i._lat-0.00006089262364, i._lng-0.00006089262364], [i._lat-0.00006089262364, i._lng], [i._lat, i._lng-0.00006089262364]] 

          }

          if(i.escala_poste == 4){

             array_scala_post = [[i._lat, i._lng], [i._lat-0.00005089262364, i._lng-0.00005089262364], [i._lat-0.00005089262364, i._lng], [i._lat, i._lng-0.00005089262364]]

          }

          if(i.escala_poste == 3){

             array_scala_post = [[i._lat, i._lng], [i._lat-0.00004089262364, i._lng-0.00004089262364], [i._lat-0.00004089262364, i._lng], [i._lat, i._lng-0.00004089262364]] 

          }

          if(i.escala_poste == 2){

             array_scala_post = [[i._lat, i._lng], [i._lat-0.00003089262364, i._lng-0.00003089262364], [i._lat-0.00003089262364, i._lng], [i._lat, i._lng-0.00003089262364]]

          }

          if(i.escala_poste == 1){

             array_scala_post = [[i._lat, i._lng], [i._lat-0.00001689262364, i._lng-0.00001689262364], [i._lat-0.00001689262364, i._lng], [i._lat, i._lng-0.00001689262364]]

          }

          /*var toJson = {
            '_lat': e.latlng.lat, 
            '_lng': e.latlng.lng,
            '_latlngs': array_lat_lng_poste,
            'layerType': 'rectangle',
            'uniqueid': unique, 
            'tipo_rede_poste': localStorage.getItem("tipo_rede_poste"), 
             'cor': localStorage.getItem("cor_poste"),
             'status_implementacao_poste': localStorage.getItem("status_implementacao_poste"), 
             'status_licenciamento_poste': localStorage.getItem("status_licenciamento_poste"),
             'observacao': localStorage.getItem("observacao_poste"),
             'escala_poste': localStorage.getItem("escala_poste"),

        } */

       // console.log(i)


         

            var json_poste = { 
         color: i.cor,
         radius:10,
            weight: 1,
            keepAspectRatio:true,
            
        };



     

    L.rectangle(array_scala_post, json_poste).addTo(map)

    desenhar(i, false)


 
           /* let concentradores_mapa = document.querySelectorAll(".leaflet-marker-icon")


            for(let i = 0; i < concentradores_mapa.length; i++){

                concentradores_mapa[i].addEventListener("click", (event)=>{

                  if(greenIcon.options.uniqueid == string_array_concentrador_mapa[i].uniqueid){

                    
                      openEditModalConcentradorMapa()

                      document.getElementById("edit_id_concentrador").value = string_array_concentrador_mapa[i].uniqueid

                      document.getElementById("edit_nome_concentrador").value = string_array_concentrador_mapa[i].nome_concentrador

                      document.getElementById("edit_status_implementacao_concentrador").value = string_array_concentrador_mapa[i].status_implementacao_concentrador

                      document.getElementById("edit_observacao_concentrador").value = string_array_concentrador_mapa[i].observacao_concentrador

                      document.getElementById("edit_escala_concentrador").value = string_array_concentrador_mapa[i].escala_concentrador

                  }







              //console.log(greenIcon.options.uniqueid)

          })

            } */
 
            

      })

      document.querySelector(".adicionar_poste_mapa").addEventListener("click", ()=>{

        setTimeout(()=>{

          localStorage.setItem("novo-post", 1)

        }, 10)

        document.getElementById("cancelar-popup-poste-mapa").style.top = "314px"


      })

      document.getElementById("cancelar-popup-poste-mapa").addEventListener("click", ()=>{

        localStorage.setItem("novo-post", 0)

        document.getElementById("cancelar-popup-poste-mapa").style.top = "-50000000%"


      })


      document.getElementById("edit_btn_salvar_poste_mapa").addEventListener("click", ()=>{




        let edit_uniquid_poste = document.getElementById("edit_uniquid_poste")

        let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))



        string_array_post_mapa.forEach((i, indice)=>{

          



          if(edit_uniquid_poste.value == i.uniqueid){




            document.querySelectorAll(".leaflet-interactive")[indice].style.display = "none"

             
 

            var unique = new Date().valueOf();

            var array_edit_lat_lng_poste = []


            if(document.getElementById("edit_escala_poste").value == 10){

             array_edit_lat_lng_poste = [[i._lat, i._lng], [i._lat-0.000169989262364, i._lng-0.000169989262364], [i._lat-0.000169989262364, i._lng], [i._lat, i._lng-0.000169989262364]]

          }

          if(document.getElementById("edit_escala_poste").value == 9){

             array_edit_lat_lng_poste = [[i._lat, i._lng], [i._lat-0.000129989262364, i._lng-0.000129989262364], [i._lat-0.000129989262364, i._lng], [i._lat, i._lng-0.000129989262364]]

          }

           if(document.getElementById("edit_escala_poste").value == 8){

             array_edit_lat_lng_poste = [[i._lat, i._lng], [i._lat-0.00009089262364, i._lng-0.00009089262364], [i._lat-0.00009089262364, i._lng], [i._lat, i._lng-0.00009089262364]] 

          }

          if(document.getElementById("edit_escala_poste").value == 7){

             array_edit_lat_lng_poste = [[i._lat, i._lng], [i._lat-0.00008089262364, i._lng-0.00008089262364], [i._lat-0.00008089262364, i._lng], [i._lat, i._lng-0.00008089262364]] 

          }

          if(document.getElementById("edit_escala_poste").value == 6){

             array_edit_lat_lng_poste = [[i._lat, i._lng], [i._lat-0.00007089262364, i._lng-0.00007089262364], [i._lat-0.00007089262364, i._lng], [i._lat, i._lng-0.00007089262364]] 

          }

          if(document.getElementById("edit_escala_poste").value == 5){

             array_edit_lat_lng_poste = [[i._lat, i._lng], [i._lat-0.00006089262364, i._lng-0.00006089262364], [i._lat-0.00006089262364, i._lng], [i._lat, i._lng-0.00006089262364]] 

          }

          if(document.getElementById("edit_escala_poste").value == 4){

             array_edit_lat_lng_poste = [[i._lat, i._lng], [i._lat-0.00005089262364, i._lng-0.00005089262364], [i._lat-0.00005089262364, i._lng], [i._lat, i._lng-0.00005089262364]]

          }

          if(document.getElementById("edit_escala_poste").value == 3){

             array_edit_lat_lng_poste = [[i._lat, i._lng], [i._lat-0.00004089262364, i._lng-0.00004089262364], [i._lat-0.00004089262364, i._lng], [i._lat, i._lng-0.00004089262364]] 

          }

          if(document.getElementById("edit_escala_poste").value == 2){

             array_edit_lat_lng_poste = [[i._lat, i._lng], [i._lat-0.00003089262364, i._lng-0.00003089262364], [i._lat-0.00003089262364, i._lng], [i._lat, i._lng-0.00003089262364]]

          }

          if(document.getElementById("edit_escala_poste").value == 1){

             array_edit_lat_lng_poste = [[i._lat, i._lng], [i._lat-0.00001689262364, i._lng-0.00001689262364], [i._lat-0.00001689262364, i._lng], [i._lat, i._lng-0.00001689262364]]

          }




            var toJson = {
            '_lat': i._lat, 
            '_lng': i._lng, 
            '_latlngs': array_edit_lat_lng_poste,
            'layerType': 'rectangle',
            'uniqueid': unique, 
            'nome_poste': document.getElementById("edit_nome_poste").value, 
            'tipo_rede_poste': document.getElementById("edit_tipo_rede_poste").value, 
             'cor': document.getElementById("edit_cor_poste").value,
             'status_implementacao_poste': document.getElementById("edit_status_implementacao_poste").value, 
             'status_licenciamento_poste': document.getElementById("edit_status_licenciamento_poste").value,
             'observacao': document.getElementById("edit_observacao_poste").value,
             'escala_poste': document.getElementById("edit_escala_poste").value,

        } 



           
        string_array_post_mapa.splice(indice, 1)

        string_array_post_mapa.push(toJson)

       localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa))

        var json_poste = { 
         color: document.getElementById("edit_cor_poste").value,
         radius:10,
            weight: 1,
            keepAspectRatio:true,
            
        }; 


        document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

        polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);


        string_array_post_mapa.forEach((j)=>{



          desenhar(j, false);


        })

        let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))

        string_array_caix_mapa.forEach((v)=>{



          desenhar(v, false);


        })

        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((qw)=>{

           desenhar(qw, false);


        })


        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((po)=>{

           desenhar(po, false);


        })

           // L.rectangle(array_edit_lat_lng_poste, json_poste).addTo(map);

            //desenhar(i, false)

            
          }

          

        })

      })


 


    document.querySelector(".leaflet-draw-edit-edit").addEventListener("click", ()=>{

                document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

                polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);


              let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))


            string_array_post_mapa.forEach((j)=>{



          desenhar(j, false);


        })

            let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa")) 

             string_array_caix_mapa.forEach((a)=>{



          desenhar(a, false);


        })


             let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((bn)=>{

           desenhar(bn, false);


        })


             let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((mn)=>{

           desenhar(mn, false);


        })



       // let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((fd)=>{

           desenhar(fd, false);


        })




        })
 


    document.getElementById("edit_btn_salvar_poste_mapa").addEventListener("click", ()=>{




        let edit_uniquid_poste = document.getElementById("edit_uniquid_poste")

        let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))



        string_array_post_mapa.forEach((i, indice)=>{

          



          if(edit_uniquid_poste.value == i.uniqueid){




            document.querySelectorAll(".leaflet-interactive")[indice].style.display = "none"

             
 

            var unique = new Date().valueOf();





            var toJson = {
            '_lat': i._lat, 
            '_lng': i._lng, 
            '_latlngs': array_edit_lat_lng_poste,
            'layerType': 'rectangle',
            'uniqueid': unique, 
            'nome_poste': document.getElementById("edit_nome_poste").value, 
            'tipo_rede_poste': document.getElementById("edit_tipo_rede_poste").value, 
             'cor': document.getElementById("edit_cor_poste").value,
             'status_implementacao_poste': document.getElementById("edit_status_implementacao_poste").value, 
             'status_licenciamento_poste': document.getElementById("edit_status_licenciamento_poste").value,
             'observacao': document.getElementById("edit_observacao_poste").value,
             'escala_poste': document.getElementById("edit_escala_poste").value,

        } 



           
        string_array_post_mapa.splice(indice, 1)

        string_array_post_mapa.push(toJson)

       localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa))

        var json_poste = { 
         color: document.getElementById("edit_cor_poste").value,
         radius:10,
            weight: 1,
            keepAspectRatio:true,
            
        }; 


        document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

        polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);


        string_array_post_mapa.forEach((j)=>{



          desenhar(j, false);


        })

           // L.rectangle(array_edit_lat_lng_poste, json_poste).addTo(map);

            //desenhar(i, false)

            
          }

          

        })

      })


  


    document.querySelector(".leaflet-draw-edit-edit").addEventListener("click", ()=>{

                document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

                polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);


            string_array_post_mapa.forEach((j)=>{



          desenhar(j, false);


        })



          let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((vc)=>{

           desenhar(vc, false);


        })



        })

  


    /*=======================EXIBICAO DO CAIXA AO CARREGAR A PAGINA============================*/



string_array_caix_mapa.forEach((i)=>{

          

          /*var toJson = {
            '_lat': e.latlng.lat, 
            '_lng': e.latlng.lng,
            '_latlngs': array_lat_lng_poste,
            'layerType': 'rectangle',
            'uniqueid': unique, 
            'tipo_rede_poste': localStorage.getItem("tipo_rede_poste"), 
             'cor': localStorage.getItem("cor_poste"),
             'status_implementacao_poste': localStorage.getItem("status_implementacao_poste"), 
             'status_licenciamento_poste': localStorage.getItem("status_licenciamento_poste"),
             'observacao': localStorage.getItem("observacao_poste"),
             'escala_poste': localStorage.getItem("escala_poste"),

        } */

       // console.log(i)


         

            var json_caixa = { 
         radius: i._mRadius,
             color: i.cor,
             opacity: i.opacity_caixa,  
           // fillOpacity: e.fillOpacity_caixa,
            fillColor:i.fillColor_caixa,
            draggable: true
            
        };

 

     

   // L.circle(i._latlng, json_caixa).addTo(map)

    desenhar(i, false)


 
           /* let concentradores_mapa = document.querySelectorAll(".leaflet-marker-icon")


            for(let i = 0; i < concentradores_mapa.length; i++){

                concentradores_mapa[i].addEventListener("click", (event)=>{

                  if(greenIcon.options.uniqueid == string_array_concentrador_mapa[i].uniqueid){

                    
                      openEditModalConcentradorMapa()

                      document.getElementById("edit_id_concentrador").value = string_array_concentrador_mapa[i].uniqueid

                      document.getElementById("edit_nome_concentrador").value = string_array_concentrador_mapa[i].nome_concentrador

                      document.getElementById("edit_status_implementacao_concentrador").value = string_array_concentrador_mapa[i].status_implementacao_concentrador

                      document.getElementById("edit_observacao_concentrador").value = string_array_concentrador_mapa[i].observacao_concentrador

                      document.getElementById("edit_escala_concentrador").value = string_array_concentrador_mapa[i].escala_concentrador

                  }







              //console.log(greenIcon.options.uniqueid)

          })

            } */
 
            

      })

      document.querySelector(".adicionar_caixa_mapa").addEventListener("click", ()=>{

        setTimeout(()=>{

          localStorage.setItem("nova-caix", 1)

        }, 10)
 
        document.getElementById("cancelar-popup-caixa-mapa").style.top = "-316px"

  
      })

      document.getElementById("cancelar-popup-caixa-mapa").addEventListener("click", ()=>{

        localStorage.setItem("nova-caix", 0)

        document.getElementById("cancelar-popup-caixa-mapa").style.top = "-50000000%"


      })



  document.getElementById("edit_btn_salvar_caixa_mapa").addEventListener("click", ()=>{




        let edit_uniquid_caixa = document.getElementById("edit_id_caixa")

        let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))



        string_array_caix_mapa.forEach((i, indice)=>{

          



          if(edit_uniquid_caixa.value == i.uniqueid){




           // document.querySelectorAll(".leaflet-interactive")[indice].style.display = "none"

             
 

            var unique = new Date().valueOf();


           

            var nivel_caix = ""

            var fillColor_caixa = ""

            var fillOpacity_caixa = ""

            var opacity_caixa_main = ""

            if(document.getElementById("edit-titulo-caixa-form").innerText == "Editar Caixa Nível 1"){

              nivel_caix = "Caixa Nível 1"

              fillColor_caixa = "#0011ff"

              fillOpacity_caixa = 1

              opacity_caixa_main = 1

            }else{


              nivel_caix = "Caixa Nível 2"

              fillColor_caixa = "#ff001e"

              fillOpacity_caixa = 1

              opacity_caixa_main = 1


            }





            var toJson = {
           '_latlng': i._latlng, 
          'layerType': 'circle',
          '_mRadius': document.getElementById("edit_escala_caixa").value,
          'uniqueid': document.getElementById("edit_id_caixa").value, 
          'id':document.getElementById("edit_id_primary_caixa").value,
          'nome_caixa':document.getElementById("edit_nome_caixa").value,
          'nivel_caixa': nivel_caix,
          'fillColor_caixa': fillColor_caixa,
          'fillOpacity_caixa': fillOpacity_caixa, 
          'opacity_caixa': opacity_caixa_main,
          'splitter_caixa':document.getElementById("edit_splitter_caixa").value,
          'tipo_splitter_caixa':document.getElementById("edit_tipo_splitter_caixa").value,
          'status_implementacao_caixa':document.getElementById("edit_status_implementacao_caixa").value,
          'cor':document.getElementById("edit_cor_caixa").value,
          'observacao':document.getElementById("edit_observacao_caixa").value,
          'escala_caixa':document.getElementById("edit_escala_caixa").value,


        } 

        



           
        string_array_caix_mapa.splice(indice, 1)

        string_array_caix_mapa.push(toJson)

       localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa))

        var json_poste = { 
         color: document.getElementById("edit_cor_poste").value,
         radius:10,
            weight: 1,
            keepAspectRatio:true,
            
        }; 


        document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

        polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);



        string_array_caix_mapa.forEach((t)=>{



          desenhar(t, false);


        })


        let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))


        string_array_post_mapa.forEach((j)=>{



          desenhar(j, false);


        })

        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((sa)=>{

           desenhar(sa, false);


        })


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((kj)=>{

           desenhar(kj, false);


        })

           // L.rectangle(array_edit_lat_lng_poste, json_poste).addTo(map);

            //desenhar(i, false)

            
          }

          

        })

      })


  


    document.querySelector(".leaflet-draw-edit-edit").addEventListener("click", ()=>{

                document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

                polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);

         string_array_caix_mapa.forEach((w)=>{



          desenhar(w, false);


        })

         let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))


            string_array_post_mapa.forEach((j)=>{



          desenhar(j, false);


        })


            let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((xc)=>{

           desenhar(xc, false);


        })



        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((hg)=>{

           desenhar(hg, false);


        })

        })












      //Funcao Desenhar
      function desenhar(e, enviar = true) {  

       if(e.layerType == "rectangle"){ 

           // alert("vagner")

            //console.log(e)



            var unique = new Date().valueOf();
            let id = unique;
            //enviar figura a base de dados

          // console.log(e._latlngs)

         

         // desenhar(e, false) 

           

          }


          


        //e e' um bojecto json com layerType|_latlngs|_latlng|_mRadius|cor
        type = e.layerType;
        if (e.cor == undefined) {
          e.cor = 'blue';
        }

        
        if (type == 'circle') {

          

           
            
          var circle = new L.circle(e._latlng,
          { 
            radius: e._mRadius,
             color: e.cor,
            // opacity: 1, 
           // fillOpacity: e.fillOpacity_caixa,
           // fillColor:1,
            draggable: true
          }).addTo(drawnItems).on('mouseover', function() {

            if(sessionStorage.getItem("editar_elementos_mapa") == 1){



              let string_array_caix_mapa_editar = JSON.parse(localStorage.getItem("array_caix_mapa"))

              console.log(string_array_caix_mapa_editar)

                string_array_caix_mapa_editar.forEach((i, indice)=>{

                  if(e.uniqueid == i.uniqueid){


                    let latLng = circle.getLatLng();

                    i._latlng = latLng

                      

                  }
 

                })


            localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa_editar))

            

            return


           }



         
          }).on('click', function() {

           

              if(sessionStorage.getItem("deletar_elementos_mapa") == 1){

                let string_array_caix_mapa_deletar = JSON.parse(localStorage.getItem("array_caix_mapa"))

                string_array_caix_mapa_deletar.forEach((i, indice)=>{

                  if(e.uniqueid == i.uniqueid){

                      string_array_caix_mapa_deletar.splice(indice, 1)

                      localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa_deletar))

                  }


                })

                document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


                i.style.display = "none"

              }) 

                let string_array_post_mapa_deletar_caixa = JSON.parse(localStorage.getItem("array_post_mapa"))

                string_array_post_mapa_deletar_caixa.forEach((xsj)=>{



          desenhar(xsj, false);


        })

        let string_array_caix_mapa_deletar_caixa = JSON.parse(localStorage.getItem("array_caix_mapa"))

        string_array_caix_mapa_deletar_caixa.forEach((vsw)=>{



          desenhar(vsw, false);


        })

        let string_array_cabo_mapa_deletar_caixa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa_deletar_caixa.forEach((qwax)=>{

           desenhar(qwax, false);


        })


        let string_array_concentrador_mapa_deletar_caixa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa_deletar_caixa.forEach((espo)=>{

           desenhar(espo, false);


        })

                exit();

              }


            if(sessionStorage.getItem("novo_cabo_mapa") == 1){

            let equipamentos_selecionados_cabo = JSON.parse(localStorage.getItem("equipamentos_selecionados_cabo"))


            if(localStorage.getItem("segundo_equip_cabo") == 1){

                      window.alert("Ja foram Selecionados os dois Equipamentos")

                      return

                    }


                    if(localStorage.getItem("primeiro_equip_cabo") == null){

                      localStorage.setItem("primeiro_equip_cabo", 1)

                      let objeto_equipamentos_selecionados_cabo = {

                    "primeiro": e.nome_caixa,

                    "segundo":""
 
                  }

                  equipamentos_selecionados_cabo.push(objeto_equipamentos_selecionados_cabo)

                    localStorage.setItem("equipamentos_selecionados_cabo", JSON.stringify(equipamentos_selecionados_cabo)) 

                    return

                } 


                   if(localStorage.getItem("primeiro_equip_cabo") == 1){

                      //localStorage.setItem("segundo_equip_cabo", 1)

                      //console.log(equipamentos_selecionados_cabo)

                      equipamentos_selecionados_cabo.forEach((i)=>{

                        i.segundo = e.nome_caixa

                      }) 

                      localStorage.setItem("equipamentos_selecionados_cabo", JSON.stringify(equipamentos_selecionados_cabo)) 

                    }





                  }   
                    

            document.getElementById("edit-titulo-caixa-form").innerHTML = ""

            document.getElementById("edit-titulo-caixa-form").innerHTML += `Editar ${e.nivel_caixa}`

            openEditModalCaixaMapa()

            

            document.getElementById("edit_id_primary_caixa").value = e.id
 
          document.getElementById("edit_id_caixa").value = e.uniqueid
           
          document.getElementById("edit_nome_caixa").value = e.nome_caixa

           document.getElementById("edit_splitter_caixa").value = e.splitter_caixa
           
           document.getElementById("edit_tipo_splitter_caixa").value = e.tipo_splitter_caixa 
           
           document.getElementById("edit_cor_caixa").value = e.cor
           
           document.getElementById("edit_status_implementacao_caixa").value = e.status_implementacao_caixa 
           
           document.getElementById("edit_latitude_caixa").value = e._latlng.lat + ", " + e._latlng.lng
           
           document.getElementById("edit_observacao_caixa").value = e.observacao

           document.getElementById("edit_escala_caixa").value = e.escala_caixa

           document.getElementById("edit_btn_salvar_caixa_mapa").addEventListener("click", ()=>{ 



  let latitude_longitude = document.getElementById("edit_latitude_caixa").value

  let latitude_longitude_retificado = latitude_longitude.split(",")

  

 const objeto_lat_lng = {
     
     "lat":latitude_longitude_retificado[0],
     
     "lng":latitude_longitude_retificado[1]
 }  




/*=--------------------------------------*/



console.log(objeto_lat_lng)



string_array_caix_mapa.forEach((i)=>{


  if(document.getElementById("edit_id_caixa").value == i.uniqueid){

// ESSA PARTE N ESTA FUNCIONAL

return
     
    var toJso = {
'_latlng': objeto_lat_lng, 
'layerType': e.layerType,
'_mRadius': e._mRadius,
'uniqueid': document.getElementById("edit_id_caixa").value, 
'id':document.getElementById("edit_id_primary_caixa").value,
'nome_caixa':document.getElementById("edit_nome_caixa").value, 
'splitter_caixa':document.getElementById("edit_splitter_caixa").value,
'tipo_splitter_caixa':document.getElementById("edit_tipo_splitter_caixa").value,
'status_implementacao_caixa':document.getElementById("edit_status_implementacao_caixa").value,
'cor':document.getElementById("edit_cor_caixa").value,
'observacao':document.getElementById("edit_observacao_caixa").value,
'escala_caixa':document.getElementById("edit_escala_caixa").value,

} 
      

   



    i.nome_caixa = document.getElementById("edit_nome_caixa").value

    i.splitter_caixa = document.getElementById("edit_splitter_caixa").value

    i.tipo_splitter_caixa = document.getElementById("edit_tipo_splitter_caixa").value
 
    i.status_implementacao_caixa = document.getElementById("edit_status_implementacao_caixa").value



    i.cor = document.getElementById("edit_cor_caixa").value

    i.observacao = document.getElementById("edit_observacao_caixa").value

    i.escala_caixa = document.getElementById("edit_escala_caixa").value

    i._mRadius = document.getElementById("edit_escala_caixa").value

   localStorage.setItem("array_caixa_mapa", JSON.stringify(string_array_caixa_mapa))

   console.log(toJso)

   
  
    



 // e = ""

  

  //string_array_caixa_mapa = ""

  document.getElementById("edit_form-caixa-mapa").style.display = "none"
 
  }

  

})

 


document.getElementById("edit_form-caixa-mapa").style.display = "none"


})
 
 
            })

           /* circle.bindPopup(`<p style='text-align:center; margin-top:5px'>${e.nome_caixa}</p>`,{autoClose:false}).addTo(map).openPopup(); */

       /* circle.on("click", function(evt) {


                     circle.bindPopup(`<p style='text-align:center; margin-top:5px; background:#047504; color:#fff; border-radius:20px; box-shadow:2px 2px 2px 2px rgba(0, 0, 0, 0.2)'>${e.nome_caixa} Selecionado</p>`,{autoClose:false}).addTo(map).openPopup();
           
        });*/


     

          


          document.querySelector(".leaflet-draw-draw-polyline").addEventListener("click", ()=>{

              circle.bindPopup(`<p class='container-equipamento' style='width:40px; text-align:center; margin:5px 10px; background:#808080; color:#fff; border-radius:20px; box-shadow:2px 2px 2px 2px rgba(0, 0, 0, 0.2)'> <input type='hidden' id='uniqueid-equipamento' value='${e.uniqueid}'> <input type='hidden' id='nome-equipamento' value='${e.nome_caixa}'> <label class='material-icons arrow-selected' style='font-size:32px; cursor:pointer;'>keyboard_double_arrow_down</label></p>`,{autoClose:false}).addTo(map).openPopup();


 
                let objeto_equipamentos_do_mapa = {
                  "nome": e.nome_caixa,
                  "uniqueid":e.uniqueid
                }

                equipamentos_do_mapa.push(objeto_equipamentos_do_mapa)

                localStorage.setItem("equipamentos_do_mapa", JSON.stringify(equipamentos_do_mapa))


              /* document.querySelectorAll(".leaflet-popup-content-wrapper").forEach((i)=>{

              i.addEventListener("click", (event)=>{

                  console.log(event.target.parentElement)

              })

       })*/


        
              

       })

         

        } 



      else if(type == 'rectangle') {

            
          //desenhar marcador
          var rectangle = new L.rectangle(e._latlngs, {
            color: e.cor,
            weight: 1,
    keepAspectRatio:true,
            draggable: true 
          }).addTo(drawnItems).on('mouseover', function() {

            if(sessionStorage.getItem("editar_elementos_mapa") == 1){


              let string_array_post_mapa_editar = JSON.parse(localStorage.getItem("array_post_mapa"))

                string_array_post_mapa_editar.forEach((i, indice)=>{

                  if(e.uniqueid == i.uniqueid){


                    const bounds = rectangle.getBounds();
                    const southWest = bounds.getSouthWest(); // latitude e longitude do canto inferior esquerdo
                    const northEast = bounds.getNorthEast(); //

                    var array_editar_lat_lng_poste = []
   

  if(i.escala_poste == 10){

             array_editar_lat_lng_post = [[southWest.lat, e.latlng.lng], [southWest.lat-0.000169989262364, southWest.lng-0.000169989262364], [southWest.lat-0.000169989262364, southWest.lng], [southWest.lat, southWest.lng-0.000169989262364]]

          }

          if(i.escala_poste == 9){

             array_editar_lat_lng_post = [[southWest.lat, southWest.lng], [southWest.lat-0.000129989262364, southWest.lng-0.000129989262364], [southWest.lat-0.000129989262364, southWest.lng], [southWest.lat, southWest.lng-0.000129989262364]]

          }

           if(i.escala_poste == 8){

             array_editar_lat_lng_post = [[southWest.lat, southWest.lng], [southWest.lat-0.00009089262364, southWest.lng-0.00009089262364], [southWest.lat-0.00009089262364, southWest.lng], [southWest.lat, southWest.lng-0.00009089262364]]

          }

          if(i.escala_poste == 7){

             array_editar_lat_lng_post = [[southWest.lat, southWest.lng], [southWest.lat-0.00008089262364, southWest.lng-0.00008089262364], [southWest.lat-0.00008089262364, southWest.lng], [southWest.lat, southWest.lng-0.00008089262364]]

          }

          if(i.escala_poste == 6){

             array_editar_lat_lng_post = [[southWest.lat, southWest.lng], [southWest.lat-0.00007089262364, southWest.lng-0.00007089262364], [southWest.lat-0.00007089262364, southWest.lng], [southWest.lat, southWest.lng-0.00007089262364]]

          }

          if(i.escala_poste == 5){

             array_editar_lat_lng_post = [[southWest.lat, southWest.lng], [southWest.lat-0.00006089262364, southWest.lng-0.00006089262364], [southWest.lat-0.00006089262364, southWest.lng], [southWest.lat, southWest.lng-0.00006089262364]]


          }

          if(i.escala_poste == 4){

             array_editar_lat_lng_post = [[southWest.lat, southWest.lng], [southWest.lat-0.00005089262364, southWest.lng-0.00005089262364], [southWest.lat-0.00005089262364, southWest.lng], [southWest.lat, southWest.lng-0.00005089262364]]

          }

          if(i.escala_poste == 3){

             array_editar_lat_lng_post = [[southWest.lat, southWest.lng], [southWest.lat-0.00004089262364, southWest.lng-0.00004089262364], [southWest.lat-0.00004089262364, southWest.lng], [southWest.lat, southWest.lng-0.00004089262364]]

          }

          if(i.escala_poste == 2){

             array_editar_lat_lng_post = [[southWest.lat, southWest.lng], [southWest.lat-0.00003089262364, southWest.lng-0.00003089262364], [southWest.lat-0.00003089262364, southWest.lng], [southWest.lat, southWest.lng-0.00003089262364]]

          }

          if(i.escala_poste == 1){

             array_editar_lat_lng_post = [[southWest.lat, southWest.lng], [southWest.lat-0.00001689262364, e.latlng.lng-0.00001689262364], [southWest.lat-0.00001689262364, southWest.lng], [southWest.lat, southWest.lng-0.00001689262364]]

          }

                   

                      i._latlngs = array_editar_lat_lng_post

                      

                  }
 

                })


            localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa_editar))

            




           }

          }).on('click', function() {

           


            /*

          AINDA A TRABALHAR NO EDITAR DOS POSTE

             console.info(e.uniqueid);

             map.on('draw:edited', function (r) {
    var layers = r.layers;
    //console.log(layers)
    layers.eachLayer(function (layer) {
      // console.log(layer._latlngs)

     
         if (layer instanceof L.Rectangle){
            console.log(r)
        }


    });
});
*/

  

        if(sessionStorage.getItem("deletar_elementos_mapa") == 1){

                let string_array_post_mapa_deletar = JSON.parse(localStorage.getItem("array_post_mapa"))

                string_array_post_mapa_deletar.forEach((i, indice)=>{

                  if(e.uniqueid == i.uniqueid){

                      string_array_post_mapa_deletar.splice(indice, 1)

                      localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa_deletar))

                  }


                })

                document.querySelectorAll(".leaflet-interactive").forEach((y)=>{


                y.style.display = "none"

              }) 

                let string_array_post_mapa_deletar_poste = JSON.parse(localStorage.getItem("array_post_mapa"))

                string_array_post_mapa_deletar_poste.forEach((xsj)=>{



          desenhar(xsj, false);


        })

        let string_array_caix_mapa_deletar_poste = JSON.parse(localStorage.getItem("array_caix_mapa"))

        string_array_caix_mapa_deletar_poste.forEach((vsw)=>{



          desenhar(vsw, false);


        })

        let string_array_cabo_mapa_deletar_poste = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa_deletar_poste.forEach((qwax)=>{

           desenhar(qwax, false);


        })


        let string_array_concentrador_mapa_deletar_poste = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa_deletar_poste.forEach((espo)=>{

           desenhar(espo, false);


        })

                exit();

              }






        if(sessionStorage.getItem("novo_cabo_mapa") == 1){

            let equipamentos_selecionados_cabo = JSON.parse(localStorage.getItem("equipamentos_selecionados_cabo"))


            if(localStorage.getItem("segundo_equip_cabo") == 1){

                      window.alert("Ja foram Selecionados os dois Equipamentos")

                      return

                    }


                    if(localStorage.getItem("primeiro_equip_cabo") == null){

                      localStorage.setItem("primeiro_equip_cabo", 1)

                      let objeto_equipamentos_selecionados_cabo = {

                    "primeiro": e.nome_poste,

                    "segundo":""
 
                  }

                  equipamentos_selecionados_cabo.push(objeto_equipamentos_selecionados_cabo)

                    localStorage.setItem("equipamentos_selecionados_cabo", JSON.stringify(equipamentos_selecionados_cabo)) 

                    return

                }


                   if(localStorage.getItem("primeiro_equip_cabo") == 1){

                      //localStorage.setItem("segundo_equip_cabo", 1)

                      //console.log(equipamentos_selecionados_cabo)

                      equipamentos_selecionados_cabo.forEach((i)=>{

                        i.segundo = e.nome_poste

                      }) 

                      localStorage.setItem("equipamentos_selecionados_cabo", JSON.stringify(equipamentos_selecionados_cabo)) 

                    }





                  }

            

            if(sessionStorage.getItem("deletar_poste")){

              document.getElementById("edit_form-poste-mapa").style.display = "none"

              document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


                i.style.display = "none"

              }) 

              polyline = L.polyline(latlngs, {color: localStorage.getItem("cor_cabo_drop")}).addTo(map);
 
              let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))


              string_array_post_mapa.forEach((i, indice)=>{

                //alert(indice)

                string_array_post_mapa.splice(indice, 1)

                

              })



              string_array_post_mapa.forEach((i, indice)=>{

                //string_array_post_mapa.splice(indice, 1)

                desenhar(i, false)

              })

              return

            }

              


                 document.getElementById("edit_uniquid_poste").value = e.uniqueid

                  document.getElementById("edit_nome_poste").value = e.nome_poste

                  document.getElementById("edit_tipo_rede_poste").value = e.tipo_rede_poste

                  document.getElementById("edit_cor_poste").value = e.cor

                  document.getElementById("edit_status_implementacao_poste").value = e.status_implementacao_poste

                  document.getElementById("edit_status_licenciamento_poste").value = e.status_licenciamento_poste

                  document.getElementById("edit_latitude_poste").value = `${e._lat},${e._lng}`

                  document.getElementById("edit_observacao_poste").value = e.observacao

                  document.getElementById("edit_escala_poste").value = e.escala_poste

                //  openEditModalPosteMapa()

                  document.getElementById("edit_form-poste-mapa").style.display = "block"

                

             

          })

          
          document.querySelector(".leaflet-draw-draw-polyline").addEventListener("click", ()=>{

              rectangle.bindPopup(`<p class='container-equipamento' style='width:40px; text-align:center; margin:5px 10px; background:#808080; color:#fff; border-radius:20px; box-shadow:2px 2px 2px 2px rgba(0, 0, 0, 0.2)'> <input type='hidden' id='uniqueid-equipamento' value='${e.uniqueid}'> <input type='hidden' id='nome-equipamento' value='${e.nome_poste}'> <label class='material-icons arrow-selected' style='font-size:32px; cursor:pointer;'>keyboard_double_arrow_down</label></p>`,{autoClose:false}).addTo(map).openPopup();



                let objeto_equipamentos_do_mapa = {
                  "nome": e.nome_poste,
                  "uniqueid":e.uniqueid
                }

                equipamentos_do_mapa.push(objeto_equipamentos_do_mapa)
 
                localStorage.setItem("equipamentos_do_mapa", JSON.stringify(equipamentos_do_mapa))


              /* document.querySelectorAll(".leaflet-popup-content-wrapper").forEach((i)=>{

              i.addEventListener("click", (event)=>{

                  console.log(event.target.parentElement)

              })

       })*/


        
              

       })


         // console.log(marker)

        }

       // console.log(marker)

        else if(type == 'marker') {

         
          

          var iconConcentrador = L.icon({ 
          iconUrl: 'img/home.png',
         // shadowUrl: 'https://unpkg.com/leaflet@1.8.0/dist/images/marker-shadow.png',
          uniqueid: e.uniqueid,
          iconSize: e.escala_concentrador_main, // size of the icon
          draggable: true,
          shadowSize:   [10, 24], // size of the shadow
          iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
          shadowAnchor: [4, 62],  // the same for the shadow
          popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
      });

         



          //desenhar marcador
          var marker = new L.marker(e._latlng, {icon: iconConcentrador}, {
            color: e.cor,
             draggable: true
          }).addTo(drawnItems).on('mouseover', function() {

            if(sessionStorage.getItem("editar_elementos_mapa") == 1){


              let string_array_concentrador_mapa_editar = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

                string_array_concentrador_mapa_editar.forEach((i, indice)=>{

                  if(e.uniqueid == i.uniqueid){

                    let latlng = marker.getLatLng();
   
                      i._latlng = latlng



                      
 
                  }
 

                })


            localStorage.setItem("array_concentrador_mapa", JSON.stringify(string_array_concentrador_mapa_editar))

            




           }

          }).on('click', function() {

            if(sessionStorage.getItem("deletar_elementos_mapa") == 1){

                let string_array_concentrador_mapa_deletar = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

                string_array_concentrador_mapa_deletar.forEach((i, indice)=>{

                  if(e.uniqueid == i.uniqueid){

                      string_array_concentrador_mapa_deletar.splice(indice, 1)

                      localStorage.setItem("array_concentrador_mapa", JSON.stringify(string_array_concentrador_mapa_deletar))

                  }


                })

                document.querySelectorAll(".leaflet-interactive").forEach((y)=>{


                y.style.display = "none"

              }) 

                let string_array_post_mapa_deletar_concentrador = JSON.parse(localStorage.getItem("array_post_mapa"))

                string_array_post_mapa_deletar_concentrador.forEach((xsj)=>{



          desenhar(xsj, false);


        })

        let string_array_caix_mapa_deletar_concentrador = JSON.parse(localStorage.getItem("array_caix_mapa"))

        string_array_caix_mapa_deletar_concentrador.forEach((vsw)=>{



          desenhar(vsw, false);


        })

        let string_array_cabo_mapa_deletar_concentrador = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa_deletar_concentrador.forEach((qwax)=>{

           desenhar(qwax, false);


        })


        let string_array_concentrador_mapa_deletar_concentrador = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa_deletar_concentrador.forEach((espo)=>{

           desenhar(espo, false);


        })

                exit();

              }




 
          if(sessionStorage.getItem("novo_cabo_mapa") == 1){

            let equipamentos_selecionados_cabo = JSON.parse(localStorage.getItem("equipamentos_selecionados_cabo"))


            if(localStorage.getItem("segundo_equip_cabo") == 1){

                      window.alert("Ja foram Selecionados os dois Equipamentos")

                      return

                    }


                    if(localStorage.getItem("primeiro_equip_cabo") == null){

                      localStorage.setItem("primeiro_equip_cabo", 1)

                      let objeto_equipamentos_selecionados_cabo = {

                    "primeiro": e.nome_concentrador,

                    "segundo":""
 
                  }

                  equipamentos_selecionados_cabo.push(objeto_equipamentos_selecionados_cabo)

                    localStorage.setItem("equipamentos_selecionados_cabo", JSON.stringify(equipamentos_selecionados_cabo)) 

                    return

                }


                   if(localStorage.getItem("primeiro_equip_cabo") == 1){

                      //localStorage.setItem("segundo_equip_cabo", 1)

                      //console.log(equipamentos_selecionados_cabo)

                      equipamentos_selecionados_cabo.forEach((i)=>{

                        i.segundo = e.nome_concentrador

                      }) 

                      localStorage.setItem("equipamentos_selecionados_cabo", JSON.stringify(equipamentos_selecionados_cabo)) 

                    }





                  }
         

            openEditModalConcentradorMapa()

            

      document.getElementById("edit_latlng_concentrador").value = JSON.stringify(e._latlng)  

        document.getElementById("edit_uniquid_concentrador").value = e.uniqueid

        document.getElementById("edit_nome_concentrador").value = e.nome_concentrador
        
        document.getElementById("edit_status_implementacao_concentrador").value = e.status_implementacao_concentrador

        document.getElementById("edit_observacao_concentrador").value = e.observacao_concentrador
        
        document.getElementById("edit_escala_concentrador").value = e.escala_concentrador
        

        document.getElementById("edit_btn_salvar_concentrador_mapa").addEventListener("click", ()=>{ 

                  var array_scala_concentrador = []

          if(document.getElementById("edit_escala_concentrador").value == 10){

             array_scala_concentrador.push(60) 

             array_scala_concentrador.push(60) 

          }

          if(document.getElementById("edit_escala_concentrador").value == 9){

             array_scala_concentrador.push(55) 

             array_scala_concentrador.push(55) 

          }

           if(document.getElementById("edit_escala_concentrador").value == 8){

             array_scala_concentrador.push(50) 

             array_scala_concentrador.push(50) 

          }

          if(document.getElementById("edit_escala_concentrador").value == 7){

             array_scala_concentrador.push(45) 

             array_scala_concentrador.push(45) 

          }

          if(document.getElementById("edit_escala_concentrador").value == 6){

             array_scala_concentrador.push(40) 

             array_scala_concentrador.push(40) 

          }

          if(document.getElementById("edit_escala_concentrador").value == 5){

             array_scala_concentrador.push(35) 

             array_scala_concentrador.push(35) 

          }

          if(document.getElementById("edit_escala_concentrador").value == 4){

             array_scala_concentrador.push(30) 

             array_scala_concentrador.push(30) 

          }

          if(document.getElementById("edit_escala_concentrador").value == 3){

             array_scala_concentrador.push(25) 

             array_scala_concentrador.push(25) 

          }

          if(document.getElementById("edit_escala_concentrador").value == 2){

             array_scala_concentrador.push(20) 

             array_scala_concentrador.push(20) 

          }

          if(document.getElementById("edit_escala_concentrador").value == 1){

             array_scala_concentrador.push(17) 

             array_scala_concentrador.push(17) 

          }


          var unique = new Date().valueOf();




        var toJson = { 
        '_latlng': JSON.parse(document.getElementById("edit_latlng_concentrador").value),
          'layerType': 'marker',
          'uniqueid': unique,
          'nome_concentrador': document.getElementById("edit_nome_concentrador").value,
          'status_implementacao_concentrador': document.getElementById("edit_status_implementacao_concentrador").value,
          'observacao_concentrador': document.getElementById("edit_observacao_concentrador").value,
          'escala_concentrador_main': array_scala_concentrador,
          'escala_concentrador': document.getElementById("edit_escala_concentrador").value
        } 






string_array_concentrador_mapa.forEach((i, indice)=>{
 
  
  if(document.getElementById("edit_uniquid_concentrador").value == i.uniqueid){

    document.querySelectorAll(".leaflet-marker-icon").forEach((y)=>{

      y.style.display = "none"

    })




     string_array_concentrador_mapa.splice(indice, 1)

     string_array_concentrador_mapa.push(toJson);



   localStorage.setItem("array_concentrador_mapa", JSON.stringify(string_array_concentrador_mapa))

   string_array_concentrador_mapa.forEach((w)=>{

      desenhar(w, false)


    })
 
  document.querySelector("#edit-form-concentrador-mapa").style.display = "none"

}

})








return









})


}).on('mousemove', ()=>{

 //dsdsdfgg

               marker.on('dragend', function () {

                

                //console.log(e._latlng) 
   
               //console.log(marker.getLatLng().lat)

               let lat = marker.getLatLng().lat

               let lng = marker.getLatLng().lng;

               //console.log(toJson)
 

              // marker.getLatLng().lng;

              let jsonLtnLng = {lat, lng}

              var toJsonHover = { 
            '_latlng': jsonLtnLng, 
            'layerType': e.layerType,
            'uniqueid': e.uniqueid, 
            'id':e.id,
            'tipo_rede_poste':e.tipo_rede_poste, 
             'cor':e.cor,
             'status_implementacao_poste':e.status_implementacao_poste, 
             'status_licenciamento_poste':e.status_licenciamento_poste,
             'observacao':e.observacao,
             'escala_poste':e.escala_poste,

            } 


            let string_array_poste_mapa = JSON.parse(localStorage.getItem("array_poste_mapa")) 

              for(var y = 0; y < string_array_poste_mapa.length; y++){

                if(string_array_poste_mapa[y].uniqueid == toJsonHover.uniqueid){


                  string_array_poste_mapa[y]._latlng = jsonLtnLng

                 // console.log(jsonLtnLng)

                  document.querySelector("#edit_form-poste-mapa").style.display = "none"

                  localStorage.setItem("array_poste_mapa", JSON.stringify(string_array_poste_mapa))


                }

              }


           /* fetch("mapAPI/editar-poste-mapa.php", {

            "method": "POST",

            "headers": {

            "Content-Type":"application/json"

            },


            "body":JSON.stringify({

            "json": toJsonHover,
             
            "id": e.id,

            "uniqueid": e.uniqueid,

            })

            }).then(pDados=>pDados.text()).then(resultado=>{

            console.log(resultado);

            }).catch(erro=>console.error(erro))*/







            });


          
          })

  

  



           // document.querySelectorAll(".leaflet-popup-content-wrapper")[0].style.cssText = "background:red"

          


          let poste_mapa = document.querySelectorAll(".leaflet-marker-icon")


           /* for(var b = 0; b < poste_mapa.length; b++){

                poste_mapa[b].addEventListener("click", (event)=>{

                  if(event.target.src == "https://iconarchive.com/download/i57832/icons-land/vista-map-markers/Map-Marker-Marker-Inside-Pink.ico"){ 

                    let string_array_poste_mapa = JSON.parse(localStorage.getItem("array_poste_mapa"))

                    for(var c = 0; c < string_array_poste_mapa.length; c++){

                      //console.log(string_array_poste_mapa[c])

                      if(iconPost.options.uniqueid == string_array_poste_mapa[c].uniqueid){

                        console.log(string_array_poste_mapa[0].uniqueid)

                        break


                      }

                    


                    }


                    /*string_array_poste_mapa.forEach((d)=>{

                      if(iconPost.options.uniqueid == d.uniqueid){

                       console.log(event.target)

                   // return

                     

                      /*

                      document.getElementById("edit_id_concentrador").value = string_array_concentrador_mapa[i].uniqueid

                      document.getElementById("edit_nome_concentrador").value = string_array_concentrador_mapa[i].nome_concentrador

                      document.getElementById("edit_status_implementacao_concentrador").value = string_array_concentrador_mapa[i].status_implementacao_concentrador

                      document.getElementById("edit_observacao_concentrador").value = string_array_concentrador_mapa[i].observacao_concentrador

                      document.getElementById("edit_escala_concentrador").value = string_array_concentrador_mapa[i].escala_concentrador


                    }

                    })

                  }
                

                })
         }*/




      }
        
        else if(type == 'polyline') {
          //desenhar marcador
          var p = new L.polyline(e._latlngs, {
            color: e.cor
          }).addTo(drawnItems).on('mouseover', function() {

            if(sessionStorage.getItem("editar_elementos_mapa") == 1){



              let string_array_cabo_mapa_editar = JSON.parse(localStorage.getItem("array_cabo_mapa"))

              console.log(string_array_cabo_mapa_editar)

                string_array_cabo_mapa_editar.forEach((i, indice)=>{

                  if(e.uniqueid == i.uniqueid){


                    var latlngs = p.getLatLngs();

                   

                      i._latlngs = latlngs

                      

                  }
 

                })


            localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa_editar))

            

            return


           }



         
          }).on('click', function() {


            if(sessionStorage.getItem("deletar_elementos_mapa") == 1){

                let string_array_cabo_mapa_deletar = JSON.parse(localStorage.getItem("array_cabo_mapa"))

                string_array_cabo_mapa_deletar.forEach((i, indice)=>{

                  if(e.uniqueid == i.uniqueid){

                      string_array_cabo_mapa_deletar.splice(indice, 1)

                      localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa_deletar))

                  } 


                })

                document.querySelectorAll(".leaflet-interactive").forEach((y)=>{


                y.style.display = "none"

              }) 

                let string_array_post_mapa_deletar_cabo = JSON.parse(localStorage.getItem("array_post_mapa"))

                string_array_post_mapa_deletar_cabo.forEach((xsj)=>{



          desenhar(xsj, false);


        })

        let string_array_caix_mapa_deletar_cabo = JSON.parse(localStorage.getItem("array_caix_mapa"))

        string_array_caix_mapa_deletar_cabo.forEach((vsw)=>{



          desenhar(vsw, false);


        })

        let string_array_cabo_mapa_deletar_cabo = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa_deletar_cabo.forEach((qwax)=>{

           desenhar(qwax, false);


        })


        let string_array_concentrador_mapa_deletar_cabo = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa_deletar_cabo.forEach((espo)=>{

           desenhar(espo, false);


        })

                exit();

              }


            

            if(e.nivel_cabo == "Cabo nível 1"){

            openEditModalCaboNivel1Mapa()
//dgnhuy
           // console.log(e.idd)

        document.getElementById("edit_id_primary_cabo_nivel_1").value = e.uniqueid
        
        document.getElementById("edit_id_cabo_nivel_1").value = e.id_cabo

        document.getElementById("edit_nome_cabo_nivel_1").value = e.nome_cabo

        document.getElementById("edit_quantidade_fibras_cabo_nivel_1").value = e.quantidade_fibras_cabo

        document.getElementById("edit_quantidade_tubo_looses_cabo_nivel_1").value = e.quantidade_tubo_looses_cabo

        document.getElementById("edit_cor_cabo_nivel_1").value = e.cor

        document.getElementById("edit_alto_sustentavel_cabo_nivel_1").value = e.alto_sustentavel_cabo

        document.getElementById("edit_status_implementacao_cabo_nivel_1").value = e.status_implementacao_cabo

        document.getElementById("edit_observacao_cabo_nivel_1").value = e.observacao_cabo

        document.getElementById("edit_escala_cabo_nivel_1").value = e.escala_cabo


      

  document.getElementById("edit_btn_salvar_cabo_nivel_1_mapa").addEventListener("click", ()=>{

        

      let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))

        string_array_cabo_mapa.forEach((i)=>{


  if(document.getElementById("edit_id_primary_cabo_nivel_1").value == i.uniqueid){




    i.nome_cabo = document.getElementById("edit_nome_cabo_nivel_1").value

    i.quantidade_fibras_cabo = document.getElementById("edit_quantidade_fibras_cabo_nivel_1").value

    i.quantidade_tubo_looses_cabo = document.getElementById("edit_quantidade_tubo_looses_cabo_nivel_1").value

    i.cor = document.getElementById("edit_cor_cabo_nivel_1").value 

    i.alto_sustentavel_cabo = document.getElementById("edit_alto_sustentavel_cabo_nivel_1").value

    i.status_implementacao_cabo = document.getElementById("edit_status_implementacao_cabo_nivel_1").value

    i.observacao_cabo = document.getElementById("edit_observacao_cabo_nivel_1").value

    i.escala_cabo = document.getElementById("edit_escala_cabo_nivel_1").value


     var toJson = {
          '_latlngs': e._latlngs,
          'layerType': 'polyline',
          'uniqueid': document.getElementById("edit_id_primary_cabo_nivel_1").value,
          "id_cabo": document.getElementById("edit_id_cabo_nivel_1").value,
          "nivel_cabo": "Cabo nível 1",
          "nome_cabo": document.getElementById("edit_nome_cabo_nivel_1").value,
          "quantidade_fibras_cabo": document.getElementById("edit_quantidade_fibras_cabo_nivel_1").value,
          "quantidade_tubo_looses_cabo": document.getElementById("edit_quantidade_tubo_looses_cabo_nivel_1").value,
          "alto_sustentavel_cabo": document.getElementById("edit_alto_sustentavel_cabo_nivel_1").value,
          "status_implementacao_cabo": document.getElementById("edit_status_implementacao_cabo_nivel_1").value,
          "cor": document.getElementById("edit_cor_cabo_nivel_1").value,
          "observacao_cabo": document.getElementById("edit_observacao_cabo_nivel_1").value,
          "escala_cabo": document.getElementById("edit_escala_cabo_nivel_1").value
          
          }

          desenhar(toJson, false)


    localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))

    document.getElementById("edit-form-cabo-nivel-1-mapa").style.display = "none"

}


  })






      })

return


      }



      if(e.nivel_cabo == "Cabo nível 2"){

            openEditModalCaboNivel2Mapa()
//dgnhuy
          //  console.log(e.quantidade_fibras_cabo)

        document.getElementById("edit_id_primary_cabo_nivel_2").value = e.uniqueid
        
        document.getElementById("edit_id_cabo_nivel_2").value = e.id_cabo

        document.getElementById("edit_nome_cabo_nivel_2").value = e.nome_cabo

        document.getElementById("edit_quantidade_fibras_cabo_nivel_2").value = e.quantidade_fibras_cabo

        document.getElementById("edit_quantidade_tubo_looses_cabo_nivel_2").value = e.quantidade_tubo_looses_cabo

        document.getElementById("edit_cor_cabo_nivel_2").value = e.cor

        document.getElementById("edit_alto_sustentavel_cabo_nivel_2").value = e.alto_sustentavel_cabo

        document.getElementById("edit_status_implementacao_cabo_nivel_2").value = e.status_implementacao_cabo

        document.getElementById("edit_observacao_cabo_nivel_2").value = e.observacao_cabo

        document.getElementById("edit_escala_cabo_nivel_2").value = e.escala_cabo


      
        document.getElementById("edit_btn_salvar_cabo_nivel_2_mapa").addEventListener("click", ()=>{

        

      let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))

        string_array_cabo_mapa.forEach((i)=>{


  if(document.getElementById("edit_id_primary_cabo_nivel_2").value == i.uniqueid){


    

    i.nome_cabo = document.getElementById("edit_nome_cabo_nivel_2").value

    i.quantidade_fibras_cabo = document.getElementById("edit_quantidade_fibras_cabo_nivel_2").value

    i.quantidade_tubo_looses_cabo = document.getElementById("edit_quantidade_tubo_looses_cabo_nivel_2").value

    i.cor = document.getElementById("edit_cor_cabo_nivel_2").value 

    i.alto_sustentavel_cabo = document.getElementById("edit_alto_sustentavel_cabo_nivel_2").value

    i.status_implementacao_cabo = document.getElementById("edit_status_implementacao_cabo_nivel_2").value

    i.observacao_cabo = document.getElementById("edit_observacao_cabo_nivel_2").value

    i.escala_cabo = document.getElementById("edit_escala_cabo_nivel_2").value


     var toJson = {
          '_latlngs': e._latlngs,
          'layerType': 'polyline',
          'uniqueid': document.getElementById("edit_id_primary_cabo_nivel_2").value,
          "id_cabo": document.getElementById("edit_id_cabo_nivel_2").value,
          "nivel_cabo": "Cabo nível 2",
          "nome_cabo": document.getElementById("edit_nome_cabo_nivel_2").value,
          "quantidade_fibras_cabo": document.getElementById("edit_quantidade_fibras_cabo_nivel_2").value,
          "quantidade_tubo_looses_cabo": document.getElementById("edit_quantidade_tubo_looses_cabo_nivel_2").value,
          "alto_sustentavel_cabo": document.getElementById("edit_alto_sustentavel_cabo_nivel_2").value,
          "status_implementacao_cabo": document.getElementById("edit_status_implementacao_cabo_nivel_2").value,
          "cor": document.getElementById("edit_cor_cabo_nivel_2").value,
          "observacao_cabo": document.getElementById("edit_observacao_cabo_nivel_2").value,
          "escala_cabo": document.getElementById("edit_escala_cabo_nivel_2").value
          
          }

          desenhar(toJson, false)


    localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))

    document.getElementById("edit-form-cabo-nivel-2").style.display = "none"

}


  })






      })
 

return


      }

      if(e.nivel_cabo == "Cabo drop"){

        openEditModalCaboDropMapa()
//dgnhuy
            console.log(e.quantidade_fibras_cabo)

        document.getElementById("edit_id_cabo_drop").value = e.uniqueid
        
        document.getElementById("edit_nome_cabo_drop").value = e.nome_cabo

        document.getElementById("edit_cor_cabo_drop").value = e.cor

        document.getElementById("edit_observacao_cabo_drop").value = e.observacao_cabo

        document.getElementById("edit_escala_cabo_drop").value = e.escala_cabo

 
        
        document.getElementById("edit_btn_salvar_cabo_drop_mapa").addEventListener("click", ()=>{

        

      let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))

        string_array_cabo_mapa.forEach((i)=>{


  if(document.getElementById("edit_id_cabo_drop").value == i.uniqueid){


    

    i.nome_cabo = document.getElementById("edit_nome_cabo_drop").value

    i.cor = document.getElementById("edit_cor_cabo_drop").value 

    i.observacao_cabo = document.getElementById("edit_observacao_cabo_drop").value

    i.escala_cabo = document.getElementById("edit_escala_cabo_drop").value


     var toJson = {
          '_latlngs': e._latlngs,
          'layerType': "polyline",
          'uniqueid': document.getElementById("edit_id_cabo_drop").value,
          "nivel_cabo": 'Cabo drop',
          "nome_cabo": document.getElementById("edit_nome_cabo_drop").value,
          "cor": document.getElementById("edit_cor_cabo_drop").value,
          "observacao_cabo": document.getElementById("edit_observacao_cabo_drop").value,
          "escala_cabo": document.getElementById("edit_escala_cabo_drop").value
          
          }

          desenhar(toJson, false)


    localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))

    document.getElementById("edit-form-cabo-drop").style.display = "none"

}


  })






      })
 

return

      }






          }) 




        } else {
          //desenhar poligono ou rectangulo
          var polygon = new L.polygon(e._latlngs, {color: e.cor}).addTo(drawnItems).on('click', function() {

           // if(polygon.contains(e.latlng))

          });

            let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))

            array_quantify_caixa = []

            document.getElementById("tabela-caixa").innerHTML = ""

            string_array_caix_mapa.forEach((i)=>{

              if(polygon.contains(i._latlng)){
               // alert("ok") menu-caixas
                console.log(i.nivel_caixa)

                array_quantify_caixa.push(i)

              //  alert(array_quantify_caixa.length)

                document.getElementById("menu-caixas").innerText = `Caixas (${array_quantify_caixa.length})`

                if(i.nivel_caixa == "Caixa Nível 1"){
                  nivel_caixa = "Nível 1"
                }else{

                  nivel_caixa = "Nível 2"
                }

                if(localStorage.getItem("array_caixas_selecionadas") == null){

                    localStorage.setItem("array_caixas_selecionadas", "[]")

                }

                let objeto_caixas_selecionadas = {
                  'id_auto_increment': array_quantify_caixa.length,
                  '_latlng': i._latlng, 
                   'layerType': i.layerType,
                   '_mRadius': i._mRadius,
                   'uniqueid': i.uniqueid,
                   'fillColor_caixa': i.fillColor_caixa,
                   'fillOpacity_caixa': i.fillOpacity_caixa, 
                   'opacity_caixa': i.opacity_caixa,
                   'id': i.id, 
                   'nivel_caixa':i.nivel_caixa,
                   'nome_caixa': i.nome_caixa, 
                   'splitter_caixa': i.splitter_caixa,
                   'status_implementacao_caixa': i.status_implementacao_caixa, 
                   'tipo_splitter_caixa': i.tipo_splitter_caixa,
                   'cor': i.cor,
                   'observacao': i.observacao,
                   'escala_caixa': i.escala_caixa,
                }


                let string_array_caixas_selecionadas = JSON.parse(localStorage.getItem("array_caixas_selecionadas"))

                string_array_caixas_selecionadas.push(objeto_caixas_selecionadas)

                localStorage.setItem("array_caixas_selecionadas", JSON.stringify(string_array_caixas_selecionadas))


                document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${array_quantify_caixa.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${i.uniqueid}' class='checkbox-caixa'></td>
                        <td>${i.nome_caixa}</td>
                        <td>${i.splitter_caixa}</td>
                        <td>${i.tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${i.cor}; width:15px; height:15px'></div></td>
                        <td>${i.status_implementacao_caixa}</td>
                        <td>${i._latlng.lat},${i._latlng.lng}</td>
                        <td>${i.observacao}</td>
                        <td>${nivel_caixa}</td>
                        <td>${i.escala_caixa}</td>
                      </tr>


                `

               


              }
            })


  

     
            document.getElementById("tabela-poste").innerHTML = ""

            let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))

            array_quantify_poste = []

            string_array_post_mapa.forEach((y)=>{

              

              var objeto_lat_lng_poste = {'lat': y._lat, 'lng': y._lng};
 
              

              if(polygon.contains(objeto_lat_lng_poste)){


                 array_quantify_poste.push(y)
               
              document.getElementById("menu-postes").innerText = `Postes (${array_quantify_poste.length})`




              if(localStorage.getItem("array_postes_selecionados") == null){

                    localStorage.setItem("array_postes_selecionados", "[]")

                }



                let objeto_postes_selecionados = {
                  'id_auto_increment': array_quantify_poste.length, 
                  '_latlngs': objeto_lat_lng_poste, 
                   'layerType': y.layerType,
                   'uniqueid': y.uniqueid,
                   'id': y.id, 
                   'nome_poste':y.nome_poste, 
                   'tipo_rede_poste': y.tipo_rede_poste, 
                   'cor': y.cor,
                   'status_implementacao_poste': y.status_implementacao_poste, 
                   'status_licenciamento_poste': y.status_licenciamento_poste,
                   'observacao': y.observacao,
                   'escala_poste': y.escala_poste,
                }


                let string_array_postes_selecionados = JSON.parse(localStorage.getItem("array_postes_selecionados"))

                string_array_postes_selecionados.push(objeto_postes_selecionados)

                localStorage.setItem("array_postes_selecionados", JSON.stringify(string_array_postes_selecionados))


               document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${array_quantify_poste.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${y.uniqueid}'></td>
                        <td>${y.nome_poste}</td>
                        <td>${y.tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${y.cor}; width:15px; height:15px'></div></td>
                        <td>${y.status_implementacao_poste}</td>
                        <td>${y.status_licenciamento_poste}</td>
                        <td>${y._lat},${y._lng}</td>
                        <td>${y.observacao}</td>
                        <td>${y.escala_poste}</td>
                      </tr>

 
                `





              }

            }) 

            

            let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))

            array_quantify_cabo = []

            document.getElementById("tabela-cabo").innerHTML = ""

            string_array_cabo_mapa.forEach((z)=>{

             // var sd = {lat: 56.22162229481927, lng: -5.508449524972058};

              if(polygon.contains(z.lat_lng)){
              
              array_quantify_cabo.push(z)

              if(z.quantidade_fibras_cabo == null){

                var quantidade_fibras_cabo = "-"

              }else{

                var quantidade_fibras_cabo = z.quantidade_fibras_cabo

              }


              if(z.status_implementacao_cabo == null){

                var status_implementacao_cabo = "-"

              }else{

                var status_implementacao_cabo = z.status_implementacao_cabo

              }



              if(z.quantidade_tubo_looses_cabo == null){

                var quantidade_tubo_looses_cabo = "-"

              }else{

                var quantidade_tubo_looses_cabo = z.quantidade_tubo_looses_cabo

              }


              if(z.alto_sustentavel_cabo == null){

                var alto_sustentavel_cabo = "-"

              }else{

                var alto_sustentavel_cabo = z.alto_sustentavel_cabo

              }


              if(z.nivel_cabo == "Cabo nível 1"){

                var nivel_cabo = "Nível 1"
 
              }

              if(z.nivel_cabo == "Cabo nível 2"){

                var nivel_cabo = "Nível 2"

              }

              if(z.nivel_cabo == "Cabo drop"){

                var nivel_cabo = "Drop"

              }

                 
              document.getElementById("menu-cabos").innerText = `Cabos (${array_quantify_cabo.length})`



              if(localStorage.getItem("array_cabos_selecionados") == null){

                    localStorage.setItem("array_cabos_selecionados", "[]")
 
                }



                let objeto_cabos_selecionados = {
                  '_latlngs': `${z.lat_lng.lat},${z.lat_lng.lng}`,
                  'layerType': z.layerType,
                  'uniqueid': z.uniqueid, 
                  "id_cabo": z.id_cabo,
                  "nivel_cabo": `${nivel_cabo}`,
                  "nome_cabo": z.nome_cabo,
                  "quantidade_fibras_cabo": `${quantidade_fibras_cabo}`,
                  "quantidade_tubo_looses_cabo": `${quantidade_tubo_looses_cabo}`,
                  "alto_sustentavel_cabo": `${alto_sustentavel_cabo}`,
                  "status_implementacao_cabo": `${status_implementacao_cabo}`,
                  "cor": `${z.cor}`,
                  "observacao_cabo": `${z.observacao_cabo}`,
                  "escala_cabo": `${z.escala_cabo}`
                }


                let string_array_cabos_selecionados = JSON.parse(localStorage.getItem("array_cabos_selecionados"))

                string_array_cabos_selecionados.push(objeto_cabos_selecionados)

                localStorage.setItem("array_cabos_selecionados", JSON.stringify(string_array_cabos_selecionados))



                document.getElementById("tabela-cabo").innerHTML += `

                  <tr> 
                        <th scope="row"><a href="#">${array_quantify_cabo.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${z.uniqueid}'></td>
                        <td>${z.nome_cabo}</td>
                        <td>${quantidade_fibras_cabo}</td> 
                        <td>${quantidade_tubo_looses_cabo}</td>
                        <td>${status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${z.cor}; width:15px; height:15px'></div></td>
                        <td>${alto_sustentavel_cabo}</td>
                        <td>${z.lat_lng.lat},${z.lat_lng.lng}</td>
                        <td>${z.observacao_cabo}</td>
                        <td>${nivel_cabo}</td>
                        <td>${z.escala_cabo}</td>
                      </tr>


                `

              }

            })



            let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

            array_quantify_concentrador = []

            document.getElementById("tabela-concentrador").innerHTML = ""

            string_array_concentrador_mapa.forEach((i)=>{

              if(polygon.contains(i._latlng)){
               
                array_quantify_concentrador.push(i)

             

                document.getElementById("menu-concentradores").innerText = `Concentradores (${array_quantify_concentrador.length})`

                document.getElementById("tabela-concentrador").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${array_quantify_concentrador.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox'></td>
                        <td>${i.nome_concentrador}</td>
                        <td>${i.status_implementacao_concentrador}</td>
                        <td>${i._latlng.lat},${i._latlng.lng}</td>
                        <td>${i.observacao_concentrador}</td>
                        <td>${i.escala_concentrador}</td>
                      </tr>


                `

                document.querySelector("#form-poligono-mapa").style.display = "block"


              }
            })





            document.querySelector("#form-poligono-mapa").style.display = "block"


        }

        if (enviar) {
          //gerar id unico
          var unique = new Date().valueOf();
          e.id = unique;






          if(e.layerType == "circle"){ 

        

var unique = new Date().valueOf();
let id = unique;
 //enviar figura a base de dados

  
       

    toJson = { 
 '_latlng': e._latlng, 
 'layerType': e.layerType,
 '_mRadius': e._mRadius,
 'uniqueid': id,
 'fillColor_caixa': localStorage.getItem("fillColor_caixa_main"),
 'fillOpacity_caixa': localStorage.getItem("fillOpacity_caixa_main"), 
 'opacity_caixa': localStorage.getItem("opacity_caixa_main"),
 'id': localStorage.getItem("id_caixa_main"), 
 'nivel_caixa':localStorage.getItem("titulo-caixa-form_main"),
 'nome_caixa': localStorage.getItem("nome_caixa_main"), 
 'splitter_caixa': localStorage.getItem("splitter_caixa_main"),
 'status_implementacao_caixa': localStorage.getItem("status_implementacao_caixa_main"), 
 'tipo_splitter_caixa': localStorage.getItem("tipo_splitter_caixa_main"),
 'cor': localStorage.getItem("cor_caixa_main"),
 'observacao': localStorage.getItem("observacao_caixa_main"),
 'escala_caixa': localStorage.getItem("escala_caixa_main"),

}




let string_array_caixa_mapa = JSON.parse(localStorage.getItem("array_caixa_mapa"))

string_array_caixa_mapa.push(toJson)

localStorage.setItem("array_caixa_mapa", JSON.stringify(string_array_caixa_mapa))

   //desenhar(toJson, false);    

    localStorage.setItem("nova_caixa_temp", 1);

    

     console.log(toJson)

    //document.querySelector(".leaflet-draw-draw-circle").click()

   // window.location.reload();

   //document.getElementById("btn-salvar-alteracoes-mapa").style.display = "block" 



 /*$.post('mapAPI/insert-caixa-mapa.php', {
   json: JSON.stringify(toJson),
   id: id,
   id_caixa: document.getElementById("id_caixa").value
 })*/
 


 setTimeout(()=>{



  document.querySelector(".adicionar_caixa_mapa").click()

document.querySelector("#form_select_nivel_caixa_1_2").style.display = "none"



 }, 1000)

 //toJson = ""
 
  
circle.bindPopup(`<p style='text-align:center; margin-top:5px'>${toJson.nome_caixa}</p>`,{autoClose:false}).addTo(map).openPopup();

}


if(e.layerType == "marker"){ 


  var unique = new Date().valueOf();
let id = unique; 



var toJson = {
 '_latlng': e._latlng, 
 'layerType': e.layerType,
 'uniqueid': id,
 'id':document.getElementById("id_poste").value, 
 'nome_poste':document.getElementById("nome_poste").value, 
 'tipo_rede_poste':document.getElementById("tipo_rede_poste").value, 
 'cor':document.getElementById("cor_poste").value,
 'status_implementacao_poste':document.getElementById("status_implementacao_poste").value, 
 'status_licenciamento_poste':document.getElementById("status_licenciamento_poste").value,
 'observacao':document.getElementById("observacao_poste").value,
 'escala_poste':document.getElementById("escala_poste").value,

}


  return

 

  /*$.post('mapAPI/insert-poste-mapa.php', {
            json: JSON.stringify(toJson),
            id: id,
            id_poste: document.getElementById("id_poste").value
      
          }, function(data,status) {
            if(status == 'success') {
              if (!data.sucesso) {
                alert("Ocorreu um erro:\n\n"+data.msg);
              } else {
                //figura inserida
              }
            } else {
              alert("Ocorreu um erro na chamada");
            }
          });*/


          let string_array_poste_mapa = JSON.parse(localStorage.getItem("array_poste_mapa"))

string_array_poste_mapa.push(toJson)

localStorage.setItem("array_poste_mapa", JSON.stringify(string_array_poste_mapa))
 
    

   localStorage.setItem("nova_poste_temp", 1); 

  

   //document.getElementById("btn-salvar-alteracoes-mapa").style.display = "block" 

 


 setTimeout(()=>{
 
  document.querySelector(".leaflet-draw-draw-marker").click()

document.querySelector("#form-poste-mapa").style.display = "none"

 }, 1000)
 
}


 


if(e.layerType == "polyline"){ 

            

       
      


     

       for(var i = 0; i < equipamentos_do_mapa.length; i++){



        document.querySelectorAll(".container-equipamento")[i].innerHTML = equipamentos_do_mapa[i].nome

        document.querySelectorAll(".container-equipamento")[i].style.cssText = "box-shadow:none; background:transparent; color:#353738; text-align:center;"

       }



              

      }
 



          //enviar figura a base de dados
          
        }


      }


      


      map.on(L.Draw.Event.CREATED, function (e) {
 /* let layer = e.layer;
  drawnItems.addLayer(layer);
  let polygon = layer.getLatLngs();
  //console.log(polygon);

  let markers = [];

  map.eachLayer((layer) => {
    if(layer instanceof L.Marker && map.getBounds().contains(polygon)) {
        markers.push(layer.feature);

        console.log(layer.feature)
    }
  });


  

       return*/
        

          if(localStorage.getItem("titulo-caixa-form_main") == "Caixa Nível 1"){

            var toJson = {

          '_latlng': e.layer._latlng,
          '_latlngs': e.layer._latlngs,
          'layerType': e.layerType,
          '_mRadius': e.layer._mRadius,
          'fillOpacity_caixa':1,
          'opacity_caixa':1,
          'fillColor_caixa':'#0011ff',
          'cor': document.querySelector(".cor_caixa_nivel_1").value,
        }

      }


      if(localStorage.getItem("titulo-caixa-form_main") == "Caixa Nível 2"){

            var toJson = {

          '_latlng': e.layer._latlng,
          '_latlngs': e.layer._latlngs,
          'layerType': e.layerType,
          '_mRadius': e.layer._mRadius,
          'fillOpacity_caixa':1,
          'opacity_caixa':1,
          'fillColor_caixa':'#ff001e',
          'cor': document.querySelector(".cor_caixa_nivel_1").value,
        }

      }

        desenhar(toJson, true);


      });

      map.on(L.Draw.Event.DELETED, function(e) {
        
        console.log(e)


      })


      


       document.querySelector(".adicionar_caixa_mapa").addEventListener("click", ()=>{



document.getElementById("form_select_nivel_caixa_1_2").style.display = "block"



})


document.getElementById("btn_close_select_nivel_caixa_1_2").addEventListener("click", ()=>{

    document.getElementById("form_select_nivel_caixa_1_2").style.display = "none"

    document.getElementById("cancelar-popup-caixa-mapa").style.top = "-50000000%"

    localStorage.setItem("nova-caix", 0)
 


})

document.querySelector(".form_select_nivel_caixa_1_2").addEventListener("click", ()=>{

    if(event.target.classList == "modal-form-mapa form_select_nivel_caixa_1_2"){

        event.target.style.display = "none"

        document.getElementById("cancelar-popup-caixa-mapa").style.top = "-50000000%"

       localStorage.setItem("nova-caix", 0)

    }
 
})


document.getElementById("btn_salvar_select_nivel_caixa_1_2").addEventListener("click", ()=>{

    if(document.getElementById("select_nivel_caixa_1_2").value == "Caixa Nível 1"){

      document.getElementById("selected_caixa_nivel_1").value = "Caixa Nível 1"

      document.getElementById("fillColor_caixa").value = "#0011ff"

      document.getElementById("fillOpacity_caixa").value = 1

      document.getElementById("opacity_caixa").value = 1


        document.getElementById("id_caixa").value = localStorage.getItem("id_caixa")

        document.getElementById("nome_caixa").value = localStorage.getItem("nome_caixa")

        document.getElementById("splitter_caixa").options[document.getElementById("splitter_caixa").options.length] = new Option(localStorage.getItem("splitter_caixa"));

        document.getElementById("tipo_splitter_caixa").options[document.getElementById("tipo_splitter_caixa").options.length] = new Option(localStorage.getItem("tipo_splitter_caixa"));

        document.getElementById("cor_caixa").value = localStorage.getItem("cor_caixa")

        document.getElementById("status_implementacao_caixa").options[document.getElementById("status_implementacao_caixa").options.length] = new Option(localStorage.getItem("status_implementacao_caixa"));

        document.getElementById("observacao_caixa").value = localStorage.getItem("observacao_caixa") 

        document.getElementById("escala_caixa").options[document.getElementById("escala_caixa").options.length] = new Option(localStorage.getItem("escala_caixa"));

        document.getElementById("mini-container-form-caixa").style.display = "block"

        document.getElementById("msg-sem-opcao-caixa").style.display = "none"

          document.querySelector("#titulo-caixa-form").innerHTML = "Nova Caixa Nível 1"

          


        openModalCaixaMapa() 

        document.getElementById("form_select_nivel_caixa_1_2").style.display = "none"

    }

    if(document.getElementById("select_nivel_caixa_1_2").value == "Caixa Nível 2"){

      document.getElementById("fillColor_caixa").value = "#ff001e"

      document.getElementById("fillOpacity_caixa").value = 1

      document.getElementById("opacity_caixa").value = 1

      document.getElementById("selected_caixa_nivel_1").value = "Caixa Nível 2"

      document.getElementById("id_caixa").value = localStorage.getItem("id_caixa_nivel_2")

      document.getElementById("nome_caixa").value = localStorage.getItem("nome_caixa_nivel_2")

      document.getElementById("splitter_caixa").options[document.getElementById("splitter_caixa").options.length] = new Option(localStorage.getItem("splitter_caixa_nivel_2"));

      document.getElementById("tipo_splitter_caixa").options[document.getElementById("tipo_splitter_caixa").options.length] = new Option(localStorage.getItem("tipo_splitter_caixa_nivel_2"));

      document.getElementById("cor_caixa").value = localStorage.getItem("cor_caixa_nivel_2")

      document.getElementById("status_implementacao_caixa").options[document.getElementById("status_implementacao_caixa").options.length] = new Option(localStorage.getItem("status_implementacao_caixa_nivel_2"));

      document.getElementById("observacao_caixa").value = localStorage.getItem("observacao_caixa_nivel_2") 

      document.getElementById("escala_caixa").options[document.getElementById("escala_caixa").options.length] = new Option(localStorage.getItem("escala_caixa_nivel_2"));

      document.getElementById("mini-container-form-caixa").style.display = "block"

      document.getElementById("msg-sem-opcao-caixa").style.display = "none"

      document.querySelector("#titulo-caixa-form").innerHTML = "Nova Caixa Nível 2"


          

        openModalCaixaMapa()

        document.getElementById("form_select_nivel_caixa_1_2").style.display = "none"

    }

   

})


document.getElementById("btn_salvar_caixa_mapa").addEventListener("click", ()=>{

    if(document.getElementById("selected_caixa_nivel_1").value == "Caixa Nível 1"){

       
        localStorage.setItem("titulo-caixa-form_main", "Caixa Nível 1")

          localStorage.setItem("fillColor_caixa_main", "#0011ff")

          localStorage.setItem("fillOpacity_caixa_main", 1)

          localStorage.setItem("opacity_caixa_main", 1)

             localStorage.setItem("id_caixa_main", localStorage.getItem("id_caixa"))
             
            localStorage.setItem("nome_caixa_main", localStorage.getItem("nome_caixa"))
            
            localStorage.setItem("splitter_caixa_main", localStorage.getItem("splitter_caixa"))
            
            localStorage.setItem("tipo_splitter_caixa_main", localStorage.getItem("tipo_splitter_caixa"))
            
            localStorage.setItem("cor_caixa_main", localStorage.getItem("cor_caixa"))
            
            localStorage.setItem("status_implementacao_caixa_main", localStorage.getItem("status_implementacao_caixa"))
            
            localStorage.setItem("observacao_caixa_main", localStorage.getItem("observacao_caixa"))

            localStorage.setItem("escala_caixa_main", localStorage.getItem("escala_caixa"))




    }

    if(document.getElementById("selected_caixa_nivel_1").value == "Caixa Nível 2"){

             localStorage.setItem("titulo-caixa-form_main", "Caixa Nível 2")

          localStorage.setItem("fillColor_caixa_main", "#ff001e")

          localStorage.setItem("fillOpacity_caixa_main", 1)

          localStorage.setItem("opacity_caixa_main", 1)

             localStorage.setItem("id_caixa_main", localStorage.getItem("id_caixa_nivel_2"))
            
            localStorage.setItem("nome_caixa_main", localStorage.getItem("nome_caixa_nivel_2"))
            
            localStorage.setItem("splitter_caixa_main", localStorage.getItem("splitter_caixa_nivel_2"))
            
            localStorage.setItem("tipo_splitter_caixa_main", localStorage.getItem("tipo_splitter_caixa_nivel_2"))
            
            localStorage.setItem("cor_caixa_main", localStorage.getItem("cor_caixa_nivel_2"))
            
            localStorage.setItem("status_implementacao_caixa_main", localStorage.getItem("status_implementacao_caixa_nivel_2"))
            
            localStorage.setItem("observacao_caixa_main", localStorage.getItem("observacao_caixa"))

            localStorage.setItem("escala_caixa_main", localStorage.getItem("escala_caixa_nivel_2"))

    }

})



 

 /*------------------poste Mapa----------*/
       
       
       document.querySelector(".leaflet-draw-draw-marker").addEventListener("click", ()=>{

document.querySelector("#form-poste-mapa").style.display = "block"

})
       
      
      string_array_poste_mapa.forEach((p)=>{

 

  desenhar(p, false);


})
      
    
      
      
       
      window.addEventListener("load", ()=>{

        
         
         if(localStorage.getItem("id_poste") == null){
             
             localStorage.setItem("id_poste", "0");
         }

         if(localStorage.getItem("nome_poste") == null){
             
             localStorage.setItem("nome_poste", "0");
         }
         
         if(localStorage.getItem("tipo_rede_poste") == null){
             
             localStorage.setItem("tipo_rede_poste", "0");
         }
         
         if(localStorage.getItem("cor_poste") == null){
             
             localStorage.setItem("cor_poste", "0");
         }
         
         if(localStorage.getItem("status_implementacao_poste") == null){
             
             localStorage.setItem("status_implementacao_poste", "0");
         }
         
         
         if(localStorage.getItem("status_licenciamento_poste") == null){
             
             localStorage.setItem("status_licenciamento_poste", "0");
         } 
         
         if(localStorage.getItem("observacao_poste") == null){
             
             localStorage.setItem("observacao_poste", "0");
         } 
       
         if(localStorage.getItem("escala_poste") == null){
  
          localStorage.setItem("escala_poste", "0");
        }


        if(localStorage.getItem("id_poste") == null | localStorage.getItem("id_poste") == "0"){

      document.getElementById("mini-container-form-poste").style.display = "none"

      document.getElementById("msg-sem-opcao-poste").style.display = "block"

      document.getElementById("container-poste-mapa").style.height = "250px"


}else{
       
       
       document.getElementById("id_poste").value = localStorage.getItem("id_poste") 

        document.getElementById("nome_poste").value = localStorage.getItem("nome_poste") 
       
       document.getElementById("tipo_rede_poste").options[document.getElementById("tipo_rede_poste").options.length] = new Option(localStorage.getItem("tipo_rede_poste"));
       
       document.getElementById("cor_poste").value = localStorage.getItem("cor_poste") 
        
       document.getElementById("status_implementacao_poste").options[document.getElementById("status_implementacao_poste").options.length] = new Option(localStorage.getItem("status_implementacao_poste"));
       
       document.getElementById("status_licenciamento_poste").options[document.getElementById("status_licenciamento_poste").options.length] = new Option(localStorage.getItem("status_licenciamento_poste"));
       
       document.getElementById("observacao_poste").value = localStorage.getItem("observacao_poste") 
          
       document.getElementById("escala_poste").options[document.getElementById("escala_poste").options.length] = new Option(localStorage.getItem("escala_poste"));
        
}      
          
          
      })
      
 
 
       /*------------------/poste Mapa----------*/
 


       

/*------------------Cabo Mapa----------*/

document.getElementById("btn_close_select_nivel_cabo").addEventListener("click", ()=>{

  sessionStorage.setItem("novo_cabo_mapa", 0)

  document.getElementById("cancelar-popup-cabo-mapa").style.top = "-50000000%"

  document.getElementById("form_select_nivel_cabo").style.display = "none" 

  


  


})


 document.querySelector(".leaflet-draw-draw-polyline").addEventListener("click", ()=>{

        map.on(L.Draw.Event.CREATED, function(e) {

          

        var toJson = {
          '_latlngs': e.layer._latlngs,
          'layerType': e.layerType,
          'cor': 'red',

        }

          if(localStorage.getItem("primeiro_equip_cabo") == null){

                     

                      return

              }else{

                desenhar(toJson, true);

              }

        

      })

      
      });




string_array_cabo_mapa.forEach((cb)=>{

 

  desenhar(cb, false);


}) 


//leaflet-draw-draw-polyline    

document.querySelector("#adicionar_cabo_mapa").addEventListener("click", ()=>{

  setTimeout(()=>{

    sessionStorage.setItem("novo_cabo_mapa", 1)

  }, 2000)



document.getElementById("form_select_nivel_cabo").style.display = "block"


document.getElementById("cancelar-popup-cabo-mapa").style.top = "0px"

//saa



})


document.querySelector("#cancelar-popup-cabo-mapa").addEventListener("click", ()=>{

sessionStorage.setItem("novo_cabo_mapa", 0)
 
document.getElementById("cancelar-popup-cabo-mapa").style.top = "-50000000%"

//saa



})


document.getElementById("form_select_nivel_cabo").addEventListener("click", (event)=>{

  if(event.target.classList == "form_select_nivel_cabo"){

    sessionStorage.setItem("novo_cabo_mapa", 0)
 
    document.getElementById("cancelar-popup-cabo-mapa").style.top = "-50000000%"

    document.getElementById("form_select_nivel_cabo").style.display = "none"

  }

  

})



        document.getElementById("btn_salvar_select_nivel_cabo").addEventListener("click", ()=>{

    if(document.getElementById("select_nivel_cabo").value == "Cabo nível 1"){

        localStorage.setItem("cabo_atual", "Cabo nível 1")

        document.getElementById("form_select_nivel_cabo").style.display = "none"



    }

   if(document.getElementById("select_nivel_cabo").value == "Cabo nível 2"){


        localStorage.setItem("cabo_atual", "Cabo nível 2")

        document.getElementById("form_select_nivel_cabo").style.display = "none"

    }


    if(document.getElementById("select_nivel_cabo").value == "Cabo drop"){


        localStorage.setItem("cabo_atual", "Cabo drop")

        document.getElementById("form_select_nivel_cabo").style.display = "none"

    }





})







       /*------------------/Cabo Mapa----------*/

 
       /*------------------Concentrador----------*/

        document.querySelector(".adicionar_concentrador_mapa").addEventListener("click", ()=>{ 

          document.getElementById("form-concentrador-mapa").style.display = "block"
 
          

           document.getElementById("nome_concentrador").value = localStorage.getItem("nome_concentrador")

           document.getElementById("status_implementacao_concentrador").options[document.getElementById("status_implementacao_concentrador").options.length] = new Option(localStorage.getItem("status_implementacao_concentrador"));


           document.getElementById("observacao_concentrador").value = localStorage.getItem("observacao_concentrador")

           document.getElementById("escala_concentrador").options[document.getElementById("escala_concentrador").options.length] = new Option(localStorage.getItem("escala_concentrador"));


           setTimeout(()=>{

            localStorage.setItem("novo-concentrador", 1)

            document.getElementById("cancelar-popup-concentrador-mapa").style.top = "-339px" 

           }, 10)

           

        })


        document.getElementById("btn_salvar_concentrador_mapa").addEventListener("click", ()=>{

          localStorage.setItem("novo-concentrador", 1)



          document.getElementById("form-concentrador-mapa").style.display = "none"

        })



       /*------------------/Concentrador----------*/



       document.getElementById("cancelar-popup-deletar-desenhos-mapa").addEventListener("click", ()=>{

          sessionStorage.setItem("deletar_elementos_mapa", 0)

          document.getElementById("cancelar-popup-deletar-desenhos-mapa").style.top = "-50000000%"
 
 
       })

       document.querySelector(".deletar_desenhos_mapa").addEventListener("click", ()=>{


          sessionStorage.setItem("deletar_elementos_mapa", 1)

          document.getElementById("cancelar-popup-deletar-desenhos-mapa").style.top = "0px"

       })


       document.querySelector(".leaflet-draw-draw-polygon").addEventListener("click", ()=>{

        document.querySelectorAll(".leaflet-touch .leaflet-draw-actions").forEach((f)=>{

      f.style.marginLeft = "0px"

    })

       })



       document.getElementById("cancelar-popup-editar-desenhos-mapa").addEventListener("click", ()=>{

        

          sessionStorage.setItem("editar_elementos_mapa", 0)

          document.getElementById("cancelar-popup-editar-desenhos-mapa").style.top = "-50000000%"

          document.querySelector(".leaflet-draw-actions li a").click()



          document.querySelectorAll(".leaflet-interactive").forEach((t)=>{


                t.style.display = "none"

              }) 

                let string_array_post_mapa_ao_btn = JSON.parse(localStorage.getItem("array_post_mapa"))

                string_array_post_mapa_ao_btn.forEach((xsj)=>{



          desenhar(xsj, false);


        })

        let string_array_caix_mapa_ao_btn = JSON.parse(localStorage.getItem("array_caix_mapa"))

        string_array_caix_mapa_ao_btn.forEach((vsw)=>{



          desenhar(vsw, false);


        })

        let string_array_cabo_mapa_ao_btn = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa_ao_btn.forEach((qwax)=>{

           desenhar(qwax, false);


        })


        let string_array_concentrador_ao_btn = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_ao_btn.forEach((espo)=>{

           desenhar(espo, false);


        })
 
 
       })

       document.querySelector(".editar_desenhos_mapa").addEventListener("click", ()=>{


          sessionStorage.setItem("editar_elementos_mapa", 1)

          document.getElementById("cancelar-popup-editar-desenhos-mapa").style.top = "0px"

          document.querySelector(".leaflet-draw-edit-edit").click()

          

    document.querySelectorAll(".leaflet-touch .leaflet-draw-actions").forEach((f)=>{

      f.style.marginLeft = "-5000000%"

    })

       })







       document.querySelectorAll(".leaflet-interactive").forEach((r)=>{


                r.style.display = "none"

              }) 

                let string_array_post_mapa_update = JSON.parse(localStorage.getItem("array_post_mapa"))

                string_array_post_mapa_update.forEach((updatexsj)=>{



          desenhar(updatexsj, false);


        })

        let string_array_caix_mapa_update = JSON.parse(localStorage.getItem("array_caix_mapa"))

        string_array_caix_mapa_update.forEach((updatevsw)=>{



          desenhar(updatevsw, false);


        })

        let string_array_cabo_mapa_update = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa_update.forEach((updateqwax)=>{

           desenhar(updateqwax, false);


        })


        let string_array_concentrador_mapa_update = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa_update.forEach((updateespo)=>{

           desenhar(updateespo, false);


        })
       


      
    </script>

    <script src="https://cdn.rawgit.com/hayeswise/Leaflet.PointInPolygon/v1.0.0/wise-leaflet-pip.js"></script>

<script src="https://rawgit.com/hayeswise/Leaflet.PointInPolygon/master/wise-leaflet-pip.js"></script>

<script async src="//jsfiddle.net/hayeswise/bh2wuve8/"></script>


<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>

</html>
