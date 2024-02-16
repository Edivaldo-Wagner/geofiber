<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.6.0/jszip.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/xmlbuilder/15.0.1/xmlbuilder.min.js"></script>

 

  <script type="text/javascript">

    
    var markers = [
  {lat: 37.4232, lng: -122.0853},
  {lat: 37.4223, lng: -122.084},
  {lat: 37.4219, lng: -122.0845}
];

  function createKMZ(markers) {
  var kmz = [
    '<?xml version="1.0" encoding="UTF-8"?>',
    '<kml xmlns="http://www.opengis.net/kml/2.2">',
    '<Document>',
    '<name>Markers.kmz</name>',
    '<Style id="markerStyle">',
    '<IconStyle>',
    '<Icon>',
    '<href>https://cdn-icons-png.flaticon.com/128/2776/2776000.png</href>',
    '</Icon>',
    '</IconStyle>',
    '</Style>'
  ];
  
  markers.forEach(function(marker) {
    kmz.push('<Placemark>');
    kmz.push('<name>Marker</name>');
    kmz.push('<styleUrl>#markerStyle</styleUrl>');
    kmz.push('<Point>');
    kmz.push('<coordinates>' + marker.lng + ',' + marker.lat + ',0</coordinates>');
    kmz.push('</Point>');
    kmz.push('</Placemark>');
  });
  
  kmz.push('</Document>');
  kmz.push('</kml>');
  
  var blob = new Blob(kmz, {type: 'application/vnd.google-earth.kmz'});
  
  var link = document.createElement('a');
  link.href = window.URL.createObjectURL(blob);
  link.download = 'Markers.kmz';
  document.body.appendChild(link);
  
  //link.click();
 // document.body.removeChild(link);
}

//createKMZ(markers);





  </script>
  

<style type="text/css">

    .container-alterar-elemento-mapa{
      position: relative;
        width: 320px;
        height: 300px;
        left: 50%;
        top: 50%;
        background: #fff;
        transform: translate(-50%, -50%);
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);
    }
    
    .container-poligono-mapa{
        position: relative;
        width: 90%;
        height: 90%;
        left: 50%;
        top: 50%;
        background: #fff;
        transform: translate(-50%, -50%);
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);
    }

    .container-poligono-mapa-scroll{
        position: relative;
        overflow-y: scroll;
        height: 90%;
        top: 0px;
       
    }

    .table{
        ovrflow-y: scroll;
        
    }


</style>



<!-----------------FORM ALTERAR CAIXAS SELECIONADAS---------->

<div class="modal-form-mapa" id="modal-alterar-caixas-selecionadas" style="z-index: 5000;">

   <div class="container-modal container-modal-cabo-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b id="edit-titulo-caixa-form" style="position: relative; top: -17px;">Alterar Caixas Selecionadas</b></div>

        <div id="main-form-cabo-mapa">

                  <div class="modal-body">

        

        <input type='hidden'  id="edit_id_caixa"> 
        
        <input type='hidden' id="edit_id_primary_caixa"> 

       
          
                     
      <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' name='nome' id='alterar_nome_caixa' style='cursor:default'>
      </div>

      <div class='form-group'>
        <label>Splitter</label>
        <select class='form-control' name='splitter' id='alterar_splitter_caixa' style='cursor:default'>
            
           <option></option>

          <option>SPL1-2</option>

          <option>SPL1-4</option>
          
          <option>SPL1-8</option>
          
          <option>SPL1-16</option>
          
          <option>SPL1-32</option>
          
          <option>SPL1-64</option>

        </select>
      </div>
     <div class='form-group'>
        <label>Tipo de splitter</label>
        <select class='form-control' name='tipo_splitter' id='alterar_tipo_splitter_caixa' style='cursor:default'>

          <option></option>
            
           <option>Balanceado</option>

          <option>Desbalanceado</option>

           
          
        </select>
      </div>
      <div class='form-group'>
        <label>Cor</label>
        <input type='color' class='form-control' id='alterar_cor_caixa' style='cursor:default'>
      </div>
      
      <div class='form-group'>
        <label>Status de implementação</label>
        <select class='form-control' id='alterar_status_implementacao_caixa' style='cursor:default'>
            
              <option></option>

             <option>Implantada</option>
          
          <option>Não implantada</option>
        
        </select>
      </div>
      
     <div class='form-group'>
        <label>Observação</label>
        
        <textarea class='form-control' id='alterar_observacao_caixa' style='cursor:default'></textarea>
      </div>

      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' id='alterar_escala_caixa' style='cursor:default'>
            
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

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Fechar</button>
      <button type="submit" id="btn_alterar_salvar_caixa_mapa" class="btn btn-primary">Alterar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->
  
</div> <!---.modal-form-mapa--->







<!-----------------FORM ALTERAR POSTES SELECIONADOS---------->

<div class="modal-form-mapa" id="modal-alterar-postes-selecionados" style="z-index: 5000;">

    <div class="container-modal container-modal-cabo-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b style="position: relative; top: -17px;">Alterar Postes Selecionados</b></div>
        
       
        
        
        

        <div id="main-form-cabo-mapa">

        <div class="modal-body">

        <input type='hidden' id="edit_uniquid_poste"> 

       

        <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' id="alterar_nome_poste">
      </div>

      <div class="form-group">
        <label>Tipo de Rede</label>
        <select class="form-control" id="alterar_tipo_rede_poste" style='cursor:default'>
            
            <option></option>

        <option>Alta</option>
            
            <option>Baixa</option>
        
        </select>
        
      </div>

      <div class="form-group">
        <label>Escolhe uma cor</label>
        <input type="color" class="form-control" id="alterar_cor_poste" style='cursor:default'>
      </div>
      <p> 
       <div class="form-group">
        <label>Status de implementação</label>
        <select class="form-control" id="alterar_status_implementacao_poste" style='cursor:default'>

            <option></option>
            
            <option>Implantado</option>
            
            <option>Não implantado</option>
            
        </select>
        
      </div>
    </p>
     <p> 
       <div class="form-group">
        <label>Status de licenciamento</label>
        <select class="form-control" id="alterar_status_licenciamento_poste" style='cursor:default'>
            
            <option></option>

            <option>Licenciado</option>
            
            <option>Não licenciado</option>
        
        </select>
        
      </div>
    </p>

     <div class="form-group">
        <label>Observação</label>
        
        <textarea class="form-control" id="alterar_observacao_poste" style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' id='alterar_escala_poste' style='cursor:default'>
            
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
    

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Fechar</button>
      <button type="submit" id="btn_alterar_poste_caixa_mapa" class="btn btn-primary">Alterar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->
  
</div> <!---.modal-form-mapa--->


<!-----------------FORM ALTERAR CABOS SELECIONADAS---------->

<div class="modal-form-mapa" id="modal-alterar-cabos-selecionados" style="z-index: 5000;">

    <div class="container-modal container-modal-cabo-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b id="edit-titulo-caixa-form" style="position: relative; top: -17px;">Alterar Cabos Selecionados</b></div>

        <div id="main-form-cabo-mapa">

                  <div class="modal-body">

        

        <input type='hidden'  id="edit_id_cabo_nivel_1"> 
        
        <input type='hidden' id="edit_id_primary_cabo_nivel_1"> 


      <div class='form-group'>
        <label>Quantidade de fibras</label>
        <select class='form-control' id='alterar_quantidade_fibras_cabo_nivel'style='cursor:default'>
            
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
     <div class='form-group'>
        <label>Quantidade de tubo looses</label>
        <select class='form-control' id='alterar_quantidade_tubo_looses_cabo_nivel' style='cursor:default'>
            
            <option></option>
           
           <option>1</option>

            <option>2</option>

            <option>4</option>

            <option>6</option>
          
          
        </select>
      </div>
      <div class='form-group'>
        <label>Cor</label>
        <input type='color' class='form-control' id='alterar_cor_cabo_nivel' style='cursor:default'>
      </div>
      
      <div class='form-group'>
        <label>Alto sustentável do cabo</label>
        <select class='form-control' id='alterar_alto_sustentavel_cabo_nivel' style='cursor:default'>

            <option></option>
            
              <option>Asu 80</option>

            <option>Asu 120</option>
        
        </select>
      </div>

      <div class='form-group'>
        <label>Status de implementação</label>
        <select class='form-control' id='alterar_status_implementacao_cabo_nivel' style='cursor:default'>
            
              <option></option>

              <option>Implantado</option>

            <option>Não implantado</option>
        
        </select>
      </div>

     <div class='form-group'>
        <label>Observação</label>
        
        <textarea class='form-control' id='alterar_observacao_cabo_nivel' style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' id='alterar_escala_cabo_nivel' style='cursor:default'>

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

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Fechar</button>
      <button type="submit" id="edit_btn_salvar_cabo_nivel_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->
  
</div> <!---.modal-form-mapa--->





<!-----------------FORM ALTERAR CONCENTRADORES SELECIONADOS---------->

<div class="modal-form-mapa" id="modal-alterar-concentradores-selecionados" style="z-index: 5000;">

    <div class="container-modal container-modal-cabo-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b style="position: relative; top: -17px;">Alterar Concentradores Selecionados</b></div>
        
       
       <input type='hidden'  id="edit_uniquid_concentrador"> 

       <input type='hidden'  id="edit_latlng_concentrador" style="width: 480px;"> 
        
         

        <div id="main-form-cabo-mapa">

        <div class="modal-body">

       <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' id="alterar_nome_concentrador">
      </div>

      <p> 
       <div class="form-group">
        <label>Status de implementação</label>
        <select class="form-control" id="alterar_status_implementacao_concentrador" style='cursor:default'>
            
            <option></option>

            <option>Implantada</option>
            
            <option>Não implantada</option>
            
        </select>
        
      </div>
    </p>
     
     <div class="form-group">
        <label>Observação</label>
        
        <textarea class="form-control" id="alterar_observacao_concentrador" style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' id='alterar_escala_concentrador' style='cursor:default'>
            
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
    

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Fechar</button>
      <button type="submit" id="btn_alterar_concentrador_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div> 
  </div>


    </div> <!---.container-modal--->

</div> <!---.modal-form-mapa--->









 
<!-----------------TABELAS RELATORIOS MAPA---------->

<div class="modal-form-mapa" id="form-poligono-mapa" style="display:none">
    
   <div class="container-poligono-mapa">

        <table class="table align-middle mb-0 bg-white">
             <thead class="bg-light">
   
      <th onclick="closeModalConcentradorMapa()" style="position: relative; left: 50%; transform: translateX(-50%); cursor: pointer;"><label class="material-icons" style="position: relative; font-size: 34px; cursor: pointer; text-align: center; width: 100%;">cancel</label></th>
     

  </thead>


  <thead class="bg-light">
    <tr style="text-align: center;">
      <th id="menu-caixas" style="border-right: 1px solid rgba(0, 0, 0, 0.2);  cursor: pointer;">Caixas</th>
      <th id="menu-postes" style="border-right: 1px solid rgba(0, 0, 0, 0.2); cursor: pointer;">Postes</th>
      <th id="menu-cabos" style="border-right: 1px solid rgba(0, 0, 0, 0.2); cursor: pointer;">Cabos</th>
      <th id="menu-concentradores" style="border-right: 1px solid rgba(0, 0, 0, 0.2); cursor: pointer;">Concentradores</th>
     
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
             

    <div class="container-poligono-mapa-scroll">

        <div class="col-12">
              <div class="card recent-sales overflow-auto">

                
                <div class="card-body" id="container-tabela-caixa" style="display:none">

                   <button type="button" class="btn btn-secondary btn-lg" id="btn-marcar-todos-caixa" style="position: relative; top: 35px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0);">Marcar Todos <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">done_all</label> </button>

                   <button type="button" class="btn btn-secondary btn-lg" id="btn-desmmarcar-todos-caixa" style="position: absolute; top: 35px; left: -50000000%; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0);">Desmarcar Todos <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">done_all</label> </button>

                    <select class="btn btn-secondary btn-lg" id="select-filtro-todos-splitters-caixa" style="position: relative; height:43px; top: 35px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">
                    <option>Todos splitters</option>
                     <option>SPL1-2</option>

                    <option>SPL1-4</option>
                    
                    <option>SPL1-8</option>
                    
                    <option>SPL1-16</option>
                    
                    <option>SPL1-32</option>
                    
                    <option>SPL1-64</option>
                   </select>


                   <select class="btn btn-secondary btn-lg" id="select-filtro-todos-tipos-splitters-caixa" style="position: relative; height:43px; top: 35px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">
                    <option>Todos tipos de splitters</option>
                     <option>Balanceado</option>
                     <option>Desbalanceado</option>
                   </select>

                   <select class="btn btn-secondary btn-lg" id="select-filtro-todos-niveis-caixa" style="position: relative; height:43px; top: 35px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">
                    <option>Todos níveis</option>
                     <option>Caixa Nível 1</option>
                     <option>Caixa Nível 2</option>
                   </select>

                  <select class="btn btn-secondary btn-lg" id="select-filtro-todos-status-implementacao" style="position: relative; top: 35px; height: 43px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">
                    <option>Todos status de implementação</option>
                    <option>Implantada</option>
                    <option>Não implantada</option>
                  </select>


                  <table class="table table-borderless datatable" id="table-box">
                    <thead>
                      <tr style="text-align: center;">
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>#</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Em uso</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Nome</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Splitter</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Tipo de splitter</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Cor</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Status de implementação</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Latitude e Longitude</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Observação</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Nível</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Escala</th>
                      </tr>
                    </thead>
                    <tbody id="tabela-caixa">
                     
                        
                    </tbody>
                  </table>

                  <button type="button" id="btn-deletar-tabela-caixa" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px; background: #f00;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Excluir <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">delete</label> </button>

                  <button type="button" onclick="alterarCaixasSelecionadas()" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Alterações <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">alt_route</label> </button>

                  <select class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">
                    <option>Projeto: Gustavo</option>
                    <option>Projeto: Edivaldo</option>
                  </select>

                  <button type="button" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Ferramentas <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">build</label> </button>

                   <button type="button" class="btn btn-secondary btn-lg" id="btn-exportar-kml-tabela-caixa" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para KML <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">explore</label> </button>

                  <button type="button" id="btn-exportar-png-tabela-caixa" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para PNG <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">image</label> </button>

                  <button type="button" id="btn-exportar-pdf-tabela-caixa" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para PDF <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">picture_as_pdf</label> </button>   

                </div>







                <div class="card-body" id="container-tabela-poste" style="display:none">

                  <button type="button" class="btn btn-secondary btn-lg" id="btn-marcar-todos-poste" style="position: relative; top: 35px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0);">Marcar Todos <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">done_all</label> </button>

                   <button type="button" class="btn btn-secondary btn-lg" id="btn-desmmarcar-todos-poste" style="position: absolute; top: 35px; left: -50000000%; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0);">Desmarcar Todos <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">done_all</label> </button>

                  <select class="btn btn-secondary btn-lg" id="select-filtro-todos-tipos-rede-poste" style="position: relative; top: 35px; height: 43px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">
                    <option>Todos tipos de rede</option>
                    <option>Alta</option>
                     <option>Baixa</option>
                  </select>

                 
                   <select class="btn btn-secondary btn-lg" id="select-filtro-todos-status-implementacao-poste" style="position: relative; top: 35px; height: 43px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">
                    <option>Todos status de implementação</option>
                    <option>Implantado</option>
                    <option>Não implantado</option>
                  </select>


                  <select class="btn btn-secondary btn-lg" id="select-filtro-todos-status-licenciamento-poste" style="position: relative; top: 35px; height: 43px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">
                    <option>Todos status de licenciamento</option>
                    <option>Licenciado</option>
                    <option>Não licenciado</option>
                  </select>
                   
                  <table class="table table-borderless datatable" id="table-post">
                    <thead>
                      <tr style="text-align: center;">
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>#</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Em uso</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Nome</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Tipo de Rede</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Cor</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Status de implementação</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Status de licenciamento</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Latitude e Longitude</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Observação</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Escala</th>
                    </thead>
                    <tbody id="tabela-poste"> 
                     
                        
                    </tbody>
                  </table>

                  <button type="button" id="btn-deletar-tabela-poste" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px; background: #f00;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Excluir <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">delete</label> </button>

                  <button type="button" onclick="alterarPostesSelecionados()" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Alterações <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">alt_route</label> </button>

                  <select class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">
                    <option>Projeto: Gustavo</option>
                    <option>Projeto: Edivaldo</option>
                  </select>

                  <button type="button" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Ferramentas <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">build</label> </button>

                   <button type="button" class="btn btn-secondary btn-lg" id="btn-exportar-kml-tabela-poste" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para KML <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">explore</label> </button>

                  <button type="button" id="btn-exportar-png-tabela-poste" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para PNG <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">image</label> </button>

                  <button type="button" id="btn-exportar-pdf-tabela-poste" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para PDF <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">picture_as_pdf</label> </button>

                </div>


 



                <div class='card-body' id='container-tabela-cabo' style='display: none;'>

                  <button type="button" class="btn btn-secondary btn-lg" id="btn-marcar-todos-cabo" style="position: relative; top: 35px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0);">Marcar Todos <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">done_all</label> </button>

                   <button type="button" class="btn btn-secondary btn-lg" id="btn-desmmarcar-todos-cabo" style="position: absolute; top: 35px; left: -50000000%; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0);">Desmarcar Todos <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">done_all</label> </button>

                   <select id="select-filtro-todos-niveis-cabo" class="btn btn-secondary btn-lg" style="position: relative; height:43px; top: 35px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">
                    <option>Todos níveis</option>
                     <option>Nível 1</option>
                     <option>Nível 2</option>
                     <option>Drop</option>
                   </select>


                   <select id="select-filtro-todos-quantidade-fibras-cabo" class="btn btn-secondary btn-lg" style="position: relative; height:43px; top: 35px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">
                    <option>Todas quantidades de fibras</option>
                     <option>2</option>

                    <option>4</option>

                    <option>6</option>

                    <option>12</option>

                    <option>24</option>

                    <option>36</option>

                    <option>48</option>

                    <option>72</option>
                   </select>


                   <select id="select-filtro-todos-alto-sustentavel-cabo" class="btn btn-secondary btn-lg" style="position: relative; height:43px; top: 35px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">
                    <option>Todos alto sustentáveis</option>
                     <option>Asu 80</option>

                    <option>Asu 120</option>
                   </select>

                   

                  <select id="select-filtro-todos-status-implementacao-cabo" class="btn btn-secondary btn-lg" style="position: relative; top: 35px; height: 43px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">
                    <option>Todos status de implementação</option>
                    <option>Implantado</option>
                    <option>Não implantado</option>
                  </select>
                   
                  <table class='table table-borderless datatable' id="table-cabo">
                    <thead>
                      <tr style="text-align: center;">
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>#</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Em uso</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Nome</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Quantidade de fibras</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Quantidade de tubo looses</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Status de implementação</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Cor</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Alto sustentável do cabo</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Latitude e Longitude</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Observação</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Nível</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Escala</th>
                    </thead>
                    <tbody id="tabela-cabo">
                      
                         
                    </tbody>
                  </table>


                  <button type="button" id="btn-deletar-tabela-cabo" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px; background: #f00;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Excluir <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">delete</label> </button>

                  <button type="button" onclick="alterarCabosSelecionados()" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Alterações <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">alt_route</label> </button>

                  <select class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">
                    <option>Projeto: Gustavo</option>
                    <option>Projeto: Edivaldo</option>
                  </select>

                  <button type="button" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Ferramentas <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">build</label> </button>

                   <button type="button" class="btn btn-secondary btn-lg" id="btn-exportar-kml-tabela-cabo" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para KML <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">explore</label> </button>

                  <button type="button" id="btn-exportar-png-tabela-cabo" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para PNG <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">image</label> </button>

                  <button type="button" id="btn-exportar-pdf-tabela-cabo" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para PDF <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">picture_as_pdf</label> </button>

                </div>






                <div class="card-body" id="container-tabela-concentrador" style="display:none">
 
                  <button type="button" class="btn btn-secondary btn-lg" id="btn-marcar-todos-concentradores" style="position: relative; top: 35px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0);">Marcar Todos <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">done_all</label> </button>

                   <button type="button" class="btn btn-secondary btn-lg" id="btn-desmmarcar-todos-concentradores" style="position: absolute; top: 35px; left: -50000000%; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0);">Desmarcar Todos <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">done_all</label> </button>

                  <select id="select-filtro-todos-status-implementacao-concentrador" class="btn btn-secondary btn-lg" style="position: relative; top: 35px; height: 43px; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">
                    <option>Todos status de implementação</option>
                    <option>Implantada</option>
                    <option>Não implantada</option>
                  </select>
                   
                  <table class="table table-borderless datatable" id="table-concentrador"> 
                    <thead>
                      <tr style="text-align: center;">
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>#</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Em uso</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Nome</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Status de implementação</th>
                        <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Latitude e Longitude</th> 
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Observação</th>
                         <th scope="col" style='border-right: 1px solid rgba(0, 0, 0, 0.4);'>Escala</th>
                    </thead>
                    <tbody id="tabela-concentrador">
                      
                        
                    </tbody>
                  </table>

                  <button type="button" id="btn-deletar-tabela-concentrador" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px; background: #f00;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Excluir <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">delete</label> </button>

                  <button type="button" onclick="alterarConcentradoresSelecionados()" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Alterações <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">alt_route</label> </button>

                  <select class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">
                    <option>Projeto: Gustavo</option>
                    <option>Projeto: Edivaldo</option>
                  </select>

                  <button type="button" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0); height:43px">Ferramentas <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">build</label> </button>

                   <button type="button" class="btn btn-secondary btn-lg" id="btn-exportar-kml-tabela-concentrador" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para KML <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">explore</label> </button>

                  <button type="button" id="btn-exportar-png-tabela-concentrador" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para PNG <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">image</label> </button>

                  <button type="button" id="btn-exportar-pdf-tabela-concentrador" class="btn btn-secondary btn-lg" style="position: relative; float: right; font-size: 14px;  border: 1px solid rgba(255, 255, 255, 1.0);">Exportar para PDF <label class="material-icons" style="position: relative; top: 4px; font-size: 18px; cursor:pointer;">picture_as_pdf</label> </button>

                </div>



              </div>
            </div><!-- End Recent Sales -->

        </div> <!--.container-poligono-mapa-scroll--->

   </div> <!---.container-poligono-mapa--->

</div> <!--.modal-->

<!-----------------/FORM POSTE MAPA---------->


<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

  <script src="js/html2canvas.min.js"></script>

  <script src="js/pdfGenerator.js"></script>



 

<script>


    function closeModalConcentradorMapa(){

 document.querySelector("#form-poligono-mapa").style.display = "none"




    document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })


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


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((op)=>{

           desenhar(op, false);


        })




         localStorage.removeItem("array_caixas_selecionadas")

      localStorage.removeItem("array_postes_selecionados")

      localStorage.removeItem("array_cabos_selecionados")

      localStorage.removeItem("array_concentradores_selecionados")


}



document.querySelectorAll(".modal-form-mapa").forEach((i)=>{
    
    i.addEventListener("click", (event)=>{
        
        
        if(event.target.classList == "modal-form-mapa"){
            
            event.target.style.display = "none"

           document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })

      

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


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((op)=>{

           desenhar(op, false);


        })



        localStorage.removeItem("array_caixas_selecionadas")

      localStorage.removeItem("array_postes_selecionados")

      localStorage.removeItem("array_cabos_selecionados")

      localStorage.removeItem("array_concentradores_selecionados")

            
        }


         if(event.target.classList == "btn btn-secondary close-modal"){
            
            event.target.parentElement.parentElement.parentElement.parentElement.parentElement.style.display = "none"

            document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })



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


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((op)=>{

           desenhar(op, false);


        })

            
        }
        
    })
     
 })


document.getElementById("menu-caixas").addEventListener("click", (event)=>{

        event.target.style.cssText = "background: #ba8406; color: #fff; cursor:pointer"        

        document.getElementById("container-tabela-caixa").style.display = "block"

        document.getElementById("menu-postes").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 

        document.getElementById("container-tabela-poste").style.display = "none"


        document.getElementById("menu-cabos").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 

        document.getElementById("container-tabela-cabo").style.display = "none"


         document.getElementById("menu-concentradores").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 

        document.getElementById("container-tabela-concentrador").style.display = "none"

})



document.getElementById("menu-postes").addEventListener("click", (event)=>{

        event.target.style.cssText = "background: #ba8406; color: #fff; cursor:pointer"        

        document.getElementById("container-tabela-poste").style.display = "block"

        document.getElementById("menu-caixas").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 

        document.getElementById("container-tabela-caixa").style.display = "none"


        document.getElementById("menu-cabos").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 

        document.getElementById("container-tabela-cabo").style.display = "none"


         document.getElementById("menu-concentradores").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 

        document.getElementById("container-tabela-concentrador").style.display = "none"

})




document.getElementById("menu-cabos").addEventListener("click", (event)=>{

        event.target.style.cssText = "background: #ba8406; color: #fff; cursor:pointer"        

        document.getElementById("container-tabela-cabo").style.display = "block"

        document.getElementById("menu-caixas").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 

        document.getElementById("container-tabela-caixa").style.display = "none"

        document.getElementById("menu-postes").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 
 
        document.getElementById("container-tabela-poste").style.display = "none"

         document.getElementById("menu-concentradores").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 

        document.getElementById("container-tabela-concentrador").style.display = "none"

})



document.getElementById("menu-concentradores").addEventListener("click", (event)=>{

        event.target.style.cssText = "background: #ba8406; color: #fff; cursor:pointer"        

        document.getElementById("container-tabela-concentrador").style.display = "block"

        document.getElementById("menu-caixas").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 

        document.getElementById("container-tabela-caixa").style.display = "none"

        document.getElementById("menu-postes").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 
 
        document.getElementById("container-tabela-poste").style.display = "none"

         document.getElementById("menu-cabos").style.cssText = "background: transparent; color: #353738; border-right: 1px solid rgba(0, 0, 0, 0.2); cursor:pointer" 

        document.getElementById("container-tabela-cabo").style.display = "none"

})









/*=============================AREA SOMENTE DE CAIXAS====================================*/



function alterarCaixasSelecionadas(){


  document.getElementById("modal-alterar-caixas-selecionadas").style.display = "block"



}


document.getElementById("btn-marcar-todos-caixa").addEventListener("click", (event)=>{



  if(event.target.innerText == "Marcar Todos done_all"){

    document.querySelectorAll(".checkbox-caixa").forEach((y)=>{

      y.checked = true

    })


    document.getElementById("btn-marcar-todos-caixa").style.cssText = "position: absolute; left:-50000000%"

    document.getElementById("btn-desmmarcar-todos-caixa").style.cssText = "position: relative; top: 35px; left:0px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0)"

  }


  


})



document.getElementById("btn-desmmarcar-todos-caixa").addEventListener("click", (event)=>{



  if(event.target.innerText == "Desmarcar Todos done_all"){

    document.querySelectorAll(".checkbox-caixa").forEach((y)=>{

      y.checked = false

    })

    document.getElementById("btn-desmmarcar-todos-caixa").style.cssText = "position: absolute; left:-50000000%"

    document.getElementById("btn-marcar-todos-caixa").style.cssText = "position: relative; top: 35px; left:0px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0)"

    


  } 

  


})
 



  document.getElementById("btn-deletar-tabela-caixa").addEventListener("click", ()=>{

  let string_array_caixa_mapa_no_excluir = JSON.parse(localStorage.getItem("array_caix_mapa"))



  let checkbox_caixa_no_excluir = document.querySelectorAll(".checkbox-caixa")

 
      for(let mnb = 0; mnb < checkbox_caixa_no_excluir.length; mnb++){

    if(checkbox_caixa_no_excluir[mnb].checked == true){

      string_array_caixa_mapa_no_excluir[mnb].caixa_selecionada = "sim"

     
      let caixa_selec = string_array_caixa_mapa_no_excluir.filter(g => g.caixa_selecionada != "sim");

       localStorage.setItem("array_caix_mapa", JSON.stringify(caixa_selec))

        document.querySelectorAll(".leaflet-interactive").forEach((bv)=>{


          bv.style.display = "none"

        })



        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((poi)=>{

           desenhar(poi, false);


        })




      let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))

      string_array_post_mapa.forEach((vty)=>{

           desenhar(vty, false);


        })


      let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))


      string_array_caix_mapa.forEach((sfn)=>{

           desenhar(sfn, false);


        })
        

        


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((oit)=>{

           desenhar(oit, false);


        })




        document.querySelector("#modal-alterar-concentradores-selecionados").style.display = "none"

    document.querySelector("#form-poligono-mapa").style.display = "none"
     

    
     }

  }


  

   })




  document.getElementById("btn-exportar-kml-tabela-caixa").addEventListener("click", ()=>{

  let string_array_coordenadas_caix_para_kml = JSON.parse(localStorage.getItem("array_caix_mapa"))



  let all_checkbox_caixa = document.querySelectorAll(".checkbox-caixa")

    var caixa_selecionas_para_kml = ""

 
      for(let cvbs = 0; cvbs < all_checkbox_caixa.length; cvbs++){

    if(all_checkbox_caixa[cvbs].checked == true){

      string_array_coordenadas_caix_para_kml[cvbs].caixa_selecionada = "sim"

     
       caixa_selecionas_para_kml = string_array_coordenadas_caix_para_kml.filter(gcd => gcd.caixa_selecionada == "sim");


}

}



   

  function createKMZ(caixa_selecionas_para_kml) {
  var kmz = [
    '<?xml version="1.0" encoding="UTF-8"?>',
    '<kml xmlns="http://www.opengis.net/kml/2.2">',
    '<Document>',
    '<name>Caixas.kmz</name>',
    
  ];
  
  var tipo_icone_caixa = ""

  caixa_selecionas_para_kml.forEach(function(cs) {

    if(cs.nivel_caixa == "Caixa Nível 1"){

      tipo_icone_caixa = "https://cdn-icons-png.flaticon.com/128/2776/2776000.png"

    }else{

      tipo_icone_caixa = "https://cdn-icons-png.flaticon.com/128/9759/9759266.png"

    }


    kmz.push("<Style id='markerStyle'><IconStyle><Icon><href>" + tipo_icone_caixa + "</href></Icon></IconStyle></Style>")

    kmz.push('<Placemark>');
    kmz.push('<name>' + cs.nome_caixa + '</name>');
    kmz.push('<styleUrl>#markerStyle</styleUrl>');
    kmz.push('<Point>');
    kmz.push('<coordinates>' + cs._latlng.lng + ',' + cs._latlng.lat + ',0</coordinates>');
    kmz.push('</Point>');
    kmz.push('</Placemark>');
  });
  
  kmz.push('</Document>');
  kmz.push('</kml>');
  
  var blob = new Blob(kmz, {type: 'application/vnd.google-earth.kmz'});
  
  var link = document.createElement('a');
  link.href = window.URL.createObjectURL(blob);
  link.download = 'Caixas.kmz';
  document.body.appendChild(link);
  
  link.click();
  document.body.removeChild(link);
}

createKMZ(caixa_selecionas_para_kml);



     })




document.getElementById("btn_alterar_salvar_caixa_mapa").addEventListener("click", ()=>{

  let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))

  let checkbox_caixa = document.querySelectorAll(".checkbox-caixa")

  

  
  for(var v = 0; v < string_array_caix_mapa.length; v++){

   // console.log(string_array_caix_mapa[v].uniqueid)

    //console.log(checkbox_caixa[v].value)

    /*if(checkbox_caixa[v].value == string_array_caix_mapa[v].uniqueid){

        console.log(string_array_caix_mapa[v])


      }*/

      checkbox_caixa.forEach((i)=>{


       if(i.value == string_array_caix_mapa[v].uniqueid){

        if(i.checked == true){

          if(document.getElementById("alterar_nome_caixa").value != ""){


        string_array_caix_mapa[v].nome_caixa = document.getElementById("alterar_nome_caixa").value

        localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa))


         }




         if(document.getElementById("alterar_splitter_caixa").value != ""){


        string_array_caix_mapa[v].splitter_caixa = document.getElementById("alterar_splitter_caixa").value

        localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa))


      }


      if(document.getElementById("alterar_tipo_splitter_caixa").value != ""){


        string_array_caix_mapa[v].tipo_splitter_caixa = document.getElementById("alterar_tipo_splitter_caixa").value

        localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa))


      }


      if(document.getElementById("alterar_cor_caixa").value != "#000000"){


        string_array_caix_mapa[v].cor = document.getElementById("alterar_cor_caixa").value

        localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa))


      }

      if(document.getElementById("alterar_status_implementacao_caixa").value != ""){


        string_array_caix_mapa[v].status_implementacao_caixa = document.getElementById("alterar_status_implementacao_caixa").value

        localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa))


      }

      if(document.getElementById("alterar_observacao_caixa").value != ""){


        string_array_caix_mapa[v].observacao = document.getElementById("alterar_observacao_caixa").value

        localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa))


      }

       
       if(document.getElementById("alterar_escala_caixa").value != ""){


        string_array_caix_mapa[v].escala_caixa = document.getElementById("alterar_escala_caixa").value

        string_array_caix_mapa[v]._mRadius = document.getElementById("alterar_escala_caixa").value

        localStorage.setItem("array_caix_mapa", JSON.stringify(string_array_caix_mapa))


      }


      document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })



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


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((op)=>{

           desenhar(op, false);


        })




      document.querySelector("#modal-alterar-caixas-selecionadas").style.display = "none"

     document.querySelector("#form-poligono-mapa").style.display = "none"


      }


      }

      })

  }


})






let select_filtro_todos_splitters_caixa = document.getElementById("select-filtro-todos-splitters-caixa")

let select_filtro_todos_tipos_splitters_caixa = document.getElementById("select-filtro-todos-tipos-splitters-caixa")

let select_filtro_todos_niveis_caixa = document.getElementById("select-filtro-todos-niveis-caixa")

let select_filtro_todos_status_implementacao = document.getElementById("select-filtro-todos-status-implementacao")


/*=================================SPLITTER PARA CAIXAS====================================*/


select_filtro_todos_splitters_caixa.addEventListener("input", (event)=>{


  document.getElementById("tabela-caixa").innerHTML = ""

  let container_ecra_caixa = event.target.parentElement

  let string_array_caixas_selecionadas = JSON.parse(localStorage.getItem("array_caixas_selecionadas"))

  let checkbox_caixa_selecionado = container_ecra_caixa.querySelectorAll(".checkbox-caixa")


   
       // console.log(checkbox_caixa_selecionado.length)

      




  for(var p = 0; p < string_array_caixas_selecionadas.length; p++){
 
   
      

        
          if(event.target.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == "Todos tipos de splitters" & select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){

          

            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${p + 1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }



          if(event.target.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == "Todos tipos de splitters" & select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){

          

            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${p + 1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa &select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){
 
           console.log(string_array_caixas_selecionadas[p].splitter_caixa)

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }

 

          if(event.target.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa &select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){

           console.log(string_array_caixas_selecionadas[p].splitter_caixa)

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == "Todos tipos de splitters" &select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){
  
           console.log(string_array_caixas_selecionadas[p].splitter_caixa)

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa &select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){
 
           console.log(string_array_caixas_selecionadas[p].splitter_caixa)

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == "Todos tipos de splitters" & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){ 
 
           console.log(string_array_caixas_selecionadas[p].splitter_caixa)

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            

 
          }





          if(event.target.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == "Todos tipos de splitters" & select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){ 
 
          

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            

 
          }



          if(event.target.value == "Todos splitters" & select_filtro_todos_tipos_splitters_caixa.value == "Todos tipos de splitters" & select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){ 
 
          

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            

 
          }



          if(event.target.value == "Todos splitters" & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){ 
 
          

           //console.log(event.target.value) 



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            

 
          }



          if(event.target.value == "Todos splitters" & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){ 
 
           

           //console.log(event.target.value) 



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            

 
          }



          if(event.target.value == "Todos splitters" & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){ 
 
           
 
           //console.log(event.target.value)  



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            

 
          }


        


          if(event.target.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){


            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }


 
          if(event.target.value == "Todos splitters" & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){


            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }

   



      }


     
})






/*=================================TIPO SPLITTER PARA CAIXAS====================================*/

select_filtro_todos_tipos_splitters_caixa.addEventListener("input", (event)=>{


  document.getElementById("tabela-caixa").innerHTML = ""

  let container_ecra_caixa = event.target.parentElement

  let string_array_caixas_selecionadas = JSON.parse(localStorage.getItem("array_caixas_selecionadas"))

  let checkbox_caixa_selecionado = container_ecra_caixa.querySelectorAll(".checkbox-caixa")


   
       // console.log(checkbox_caixa_selecionado.length)

      




  for(var p = 0; p < string_array_caixas_selecionadas.length; p++){
 
   
          




        
          if(event.target.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_splitters_caixa.value == 'Todos splitters' & select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){

          
           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa &select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){
 
        

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }

 

          if(event.target.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa &select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){

            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                ` 

            


          }


          if(event.target.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_splitters_caixa.value == "Todos splitters" & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){
  
           console.log(string_array_caixas_selecionadas[p].splitter_caixa)

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }
 

          if(event.target.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa &select_filtro_todos_niveis_caixa.value == "Todos níveis" & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){
 
          

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_splitters_caixa.value == "Todos splitters" & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){ 
 
           

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            

 
          }





        


          if(event.target.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){

          

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }





   



      }


     
})










/*======================================TODOS NIVEIS PARA CAIXAS=======================================*/

select_filtro_todos_niveis_caixa.addEventListener("input", (event)=>{


  document.getElementById("tabela-caixa").innerHTML = ""

  let container_ecra_caixa = event.target.parentElement

  let string_array_caixas_selecionadas = JSON.parse(localStorage.getItem("array_caixas_selecionadas"))

  let checkbox_caixa_selecionado = container_ecra_caixa.querySelectorAll(".checkbox-caixa")


   
       // console.log(checkbox_caixa_selecionado.length)

      




  for(var p = 0; p < string_array_caixas_selecionadas.length; p++){
 
   
          

 


        
          if(event.target.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_splitters_caixa.value == 'Todos splitters' & select_filtro_todos_tipos_splitters_caixa.value == 'Todos tipos de splitters' & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){

          
           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa & string_array_caixas_selecionadas[p].tipo_splitter_caixa .value == "Todos tipos de splitters" & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){
 
        

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }

 

          if(event.target.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){

            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                ` 

            


          }


          if(event.target.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_splitters_caixa.value == "Todos splitters" & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){
  
          
            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }
 

          if(event.target.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == 'Todos tipos de splitters' & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){
 
          

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_splitters_caixa.value == "Todos splitters" & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_status_implementacao.value == "Todos status de implementação"){ 
 
           

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            

 
          }





        


          if(event.target.value == string_array_caixas_selecionadas[p].nivel_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_status_implementacao.value == string_array_caixas_selecionadas[p].status_implementacao_caixa){

          

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }





   



      }


     
})








/*======================================TODOS STATUS DE IMPLEMENTACAO PARA CAIXAS=====================================*/

select_filtro_todos_status_implementacao.addEventListener("input", (event)=>{


  document.getElementById("tabela-caixa").innerHTML = ""

  let container_ecra_caixa = event.target.parentElement

  let string_array_caixas_selecionadas = JSON.parse(localStorage.getItem("array_caixas_selecionadas"))

  let checkbox_caixa_selecionado = container_ecra_caixa.querySelectorAll(".checkbox-caixa")





  for(var p = 0; p < string_array_caixas_selecionadas.length; p++){
 
   
          

 


        
          if(event.target.value == string_array_caixas_selecionadas[p].status_implementacao_caixa & select_filtro_todos_splitters_caixa.value == 'Todos splitters' & select_filtro_todos_tipos_splitters_caixa.value == 'Todos tipos de splitters' & select_filtro_todos_niveis_caixa.value == 'Todos níveis'){

          
           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_caixas_selecionadas[p].status_implementacao_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa & string_array_caixas_selecionadas[p].tipo_splitter_caixa .value == "Todos tipos de splitters" & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa){
 
        

           //console.log(event.target.value)



            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }

  

          if(event.target.value == string_array_caixas_selecionadas[p].status_implementacao_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa){

            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                ` 

            


          }


          if(event.target.value == string_array_caixas_selecionadas[p].status_implementacao_caixa & select_filtro_todos_splitters_caixa.value == "Todos splitters" & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa){
  
          
            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_caixas_selecionadas[p].status_implementacao_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == string_array_caixas_selecionadas[p].tipo_splitter_caixa & select_filtro_todos_niveis_caixa.value == 'Todos níveis'){
  
           
            

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }
 

          if(event.target.value == string_array_caixas_selecionadas[p].status_implementacao_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa & select_filtro_todos_tipos_splitters_caixa.value == 'Todos tipos de splitters' & select_filtro_todos_niveis_caixa.value == string_array_caixas_selecionadas[p].nivel_caixa){
 
          

            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }



          if(event.target.value == string_array_caixas_selecionadas[p].status_implementacao_caixa & select_filtro_todos_splitters_caixa.value == string_array_caixas_selecionadas[p].splitter_caixa & string_array_caixas_selecionadas[p].tipo_splitter_caixa .value == "Todos tipos de splitters" & select_filtro_todos_niveis_caixa.value == 'Todos níveis'){
 
        
            document.getElementById("tabela-caixa").innerHTML += `

                  <tr>
                        <th scope="row"><a href="#">${string_array_caixas_selecionadas.length}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' value='${string_array_caixas_selecionadas[p].uniqueid}' class='checkbox-caixa'></td>
                        <td>${string_array_caixas_selecionadas[p].nome_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].splitter_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].tipo_splitter_caixa}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_caixas_selecionadas[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_caixas_selecionadas[p].status_implementacao_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p]._latlng.lat},${string_array_caixas_selecionadas[p]._latlng.lng}</td>
                        <td>${string_array_caixas_selecionadas[p].observacao}</td>
                        <td>${string_array_caixas_selecionadas[p].nivel_caixa}</td>
                        <td>${string_array_caixas_selecionadas[p].escala_caixa}</td>
                      </tr>


                `

            


          }
          


          




   



      }


     
})





document.getElementById("btn-exportar-png-tabela-caixa").onclick = function(){

  let screenshotTarget = document.getElementById("table-box")

  html2canvas(screenshotTarget).then((canvas) => {
    const base64image = canvas.toDataURL("image/png")
    var anchor = document.createElement('a')
    anchor.setAttribute("href", base64image)
    anchor.setAttribute("download", "tabela-caixa.png")
    anchor.click();
    anchor.remove();
  })

}

 

document.getElementById("btn-exportar-pdf-tabela-caixa").onclick = function(){

let screenshotTarget = document.getElementById("table-box")

var opt = {
  margin:       1,
  filename:     'tabela-caixa',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 1 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
};

html2pdf().set(opt).from(screenshotTarget).save()


}


/*=============================AREA SOMENTE DE POSTES====================================*/


function alterarPostesSelecionados(){


  document.getElementById("modal-alterar-postes-selecionados").style.display = "block"

}





document.getElementById("btn-marcar-todos-poste").addEventListener("click", (event)=>{



  if(event.target.innerText == "Marcar Todos done_all"){

    document.querySelectorAll(".checkbox-poste").forEach((y)=>{

      y.checked = true

    })


    document.getElementById("btn-marcar-todos-poste").style.cssText = "position: absolute; left:-50000000%"

    document.getElementById("btn-desmmarcar-todos-poste").style.cssText = "position: relative; top: 35px; left:0px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0)"

  }


  


})



document.getElementById("btn-desmmarcar-todos-poste").addEventListener("click", (event)=>{



  if(event.target.innerText == "Desmarcar Todos done_all"){

    document.querySelectorAll(".checkbox-poste").forEach((y)=>{

      y.checked = false

    })

    document.getElementById("btn-desmmarcar-todos-poste").style.cssText = "position: absolute; left:-50000000%"

    document.getElementById("btn-marcar-todos-poste").style.cssText = "position: relative; top: 35px; left:0px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0)"

    


  } 

  


})



 

  document.getElementById("btn-deletar-tabela-poste").addEventListener("click", ()=>{

  let string_array_poste_mapa_no_excluir = JSON.parse(localStorage.getItem("array_post_mapa"))



  let checkbox_poste_no_excluir = document.querySelectorAll(".checkbox-poste")

 
      for(let axz = 0; axz < checkbox_poste_no_excluir.length; axz++){

    if(checkbox_poste_no_excluir[axz].checked == true){

      string_array_poste_mapa_no_excluir[axz].poste_selecionado = "sim"

     
      let poste_selec = string_array_poste_mapa_no_excluir.filter(zi => zi.poste_selecionado != "sim");

       localStorage.setItem("array_post_mapa", JSON.stringify(poste_selec))

        document.querySelectorAll(".leaflet-interactive").forEach((si)=>{


          si.style.display = "none"

        })



        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((sas)=>{

           desenhar(sas, false);


        })




      let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))

      string_array_post_mapa.forEach((khj)=>{

           desenhar(khj, false);


        })


      let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))


      string_array_caix_mapa.forEach((nbg)=>{

           desenhar(nbg, false);


        })
        

        


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((rhd)=>{

           desenhar(rhd, false);


        })




        document.querySelector("#modal-alterar-concentradores-selecionados").style.display = "none"

    document.querySelector("#form-poligono-mapa").style.display = "none"
     

    
     }

  }


  

   })



  document.getElementById("btn-exportar-kml-tabela-poste").addEventListener("click", ()=>{

  let string_array_post_mapa_para_kml = JSON.parse(localStorage.getItem("array_post_mapa"))


 
  let all_checkbox_poste = document.querySelectorAll(".checkbox-poste")


  var poste_selecionado_para_kml
  
      for(let cvbs = 0; cvbs < all_checkbox_poste.length; cvbs++){

    if(all_checkbox_poste[cvbs].checked == true){

      string_array_post_mapa_para_kml[cvbs].poste_selecionado = "sim"

     
       poste_selecionado_para_kml = string_array_post_mapa_para_kml.filter(gcd => gcd.poste_selecionado == "sim");

       var super_array_poste_kml = []

        poste_selecionado_para_kml.forEach((oiu)=>{

          console.log(oiu._latlngs[0][0])

          console.log(oiu._latlngs[0][1])


        })

      
      
      



}

}


  function createKMZ(poste_selecionado_para_kml) {
  var kmz = [
    '<?xml version="1.0" encoding="UTF-8"?>',
    '<kml xmlns="http://www.opengis.net/kml/2.2">',
    '<Document>',
    '<name>Postes.kmz</name>',
    
  ];
  
  var tipo_icone_caixa = ""

  poste_selecionado_para_kml.forEach(function(p) {

    

      tipo_icone_poste = "https://cdn-icons-png.flaticon.com/128/7945/7945007.png"

    


    kmz.push("<Style id='markerStyle'><IconStyle><Icon><href>" + tipo_icone_poste + "</href></Icon></IconStyle></Style>")

    kmz.push('<Placemark>');
    kmz.push('<name>' + p.nome_poste + '</name>');
    kmz.push('<styleUrl>#markerStyle</styleUrl>');
    kmz.push('<Point>');
    kmz.push('<coordinates>' + p._latlngs[0][1] + ',' + p._latlngs[0][0] + ',0</coordinates>');
    kmz.push('</Point>');
    kmz.push('</Placemark>');
  });
  
  kmz.push('</Document>');
  kmz.push('</kml>');
  
  var blob = new Blob(kmz, {type: 'application/vnd.google-earth.kmz'});
  
  var link = document.createElement('a');
  link.href = window.URL.createObjectURL(blob);
  link.download = 'Postes.kmz';
  document.body.appendChild(link);
  
  link.click();
  document.body.removeChild(link);
}

createKMZ(poste_selecionado_para_kml);




     })





document.getElementById("btn_alterar_poste_caixa_mapa").addEventListener("click", ()=>{

  let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))

  let checkbox_poste = document.querySelectorAll(".checkbox-poste")

  

  
  for(var v = 0; v < string_array_post_mapa.length; v++){

   

      checkbox_poste.forEach((i)=>{


       if(i.value == string_array_post_mapa[v].uniqueid){

        if(i.checked == true){

          if(document.getElementById("alterar_nome_poste").value != ""){


        string_array_post_mapa[v].nome_poste = document.getElementById("alterar_nome_poste").value

        localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa))


         }




         if(document.getElementById("alterar_tipo_rede_poste").value != ""){


        string_array_post_mapa[v].tipo_rede_poste = document.getElementById("alterar_tipo_rede_poste").value

        localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa))


         }


     

      if(document.getElementById("alterar_cor_poste").value != "#000000"){


        string_array_post_mapa[v].cor = document.getElementById("alterar_cor_poste").value

        localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa))


      }

      if(document.getElementById("alterar_status_implementacao_poste").value != ""){


        string_array_post_mapa[v].status_implementacao_poste = document.getElementById("alterar_status_implementacao_poste").value

        localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa))


         }

      if(document.getElementById("alterar_status_licenciamento_poste").value != ""){


        string_array_post_mapa[v].status_licenciamento_poste = document.getElementById("alterar_status_licenciamento_poste").value

        localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa))


         }

       
       if(document.getElementById("alterar_observacao_poste").value != ""){


        string_array_post_mapa[v].observacao = document.getElementById("alterar_observacao_poste").value

        localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa))


         }

         if(document.getElementById("alterar_escala_poste").value != ""){

          var array_lat_lng_escala_poste = []

          if(document.getElementById("alterar_escala_poste").value == 10){

             array_lat_lng_escala_poste = [[string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat-0.000169989262364, string_array_post_mapa[v]._lng-0.000169989262364], [string_array_post_mapa[v]._lat-0.000169989262364, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng-0.000169989262364]]

          }

          if(document.getElementById("alterar_escala_poste").value == 9){

             array_lat_lng_escala_poste = [[string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat-0.000129989262364, string_array_post_mapa[v]._lng-0.000129989262364], [string_array_post_mapa[v]._lat-0.000129989262364, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng-0.000129989262364]]

          }

           if(document.getElementById("alterar_escala_poste").value == 8){

             array_lat_lng_escala_poste = [[string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat-0.00009089262364, string_array_post_mapa[v]._lng-0.00009089262364], [string_array_post_mapa[v]._lat-0.00009089262364, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng-0.00009089262364]]

          }

          if(document.getElementById("alterar_escala_poste").value == 7){

             array_lat_lng_escala_poste = [[string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat-0.00008089262364, string_array_post_mapa[v]._lng-0.00008089262364], [string_array_post_mapa[v]._lat-0.00008089262364, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng-0.00008089262364]]

          }

          if(document.getElementById("alterar_escala_poste").value == 6){

             array_lat_lng_escala_poste = [[string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat-0.00007089262364, string_array_post_mapa[v]._lng-0.00007089262364], [string_array_post_mapa[v]._lat-0.00007089262364, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng-0.00007089262364]]

          }

          if(document.getElementById("alterar_escala_poste").value == 5){

             array_lat_lng_escala_poste = [[string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat-0.00006089262364, string_array_post_mapa[v]._lng-0.00006089262364], [string_array_post_mapa[v]._lat-0.00006089262364, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng-0.00006089262364]]


          }

          if(document.getElementById("alterar_escala_poste").value == 4){

             array_lat_lng_escala_poste = [[string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat-0.00005089262364, string_array_post_mapa[v]._lng-0.00005089262364], [string_array_post_mapa[v]._lat-0.00005089262364, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng-0.00005089262364]]

          }

          if(document.getElementById("alterar_escala_poste").value == 3){

             array_lat_lng_escala_poste = [[string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat-0.00004089262364, string_array_post_mapa[v]._lng-0.00004089262364], [string_array_post_mapa[v]._lat-0.00004089262364, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng-0.00004089262364]]

          }

          if(document.getElementById("alterar_escala_poste").value == 2){

             array_lat_lng_escala_poste = [[string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat-0.00003089262364, string_array_post_mapa[v]._lng-0.00003089262364], [string_array_post_mapa[v]._lat-0.00003089262364, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng-0.00003089262364]]

          }

          if(document.getElementById("alterar_escala_poste").value == 1){

             array_lat_lng_escala_poste = [[string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat-0.00001689262364, string_array_post_mapa[v]._lng-0.00001689262364], [string_array_post_mapa[v]._lat-0.00001689262364, string_array_post_mapa[v]._lng], [string_array_post_mapa[v]._lat, string_array_post_mapa[v]._lng-0.00001689262364]]

          }




        string_array_post_mapa[v].escala_poste = document.getElementById("alterar_escala_poste").value

        string_array_post_mapa[v]._latlngs = array_lat_lng_escala_poste

        localStorage.setItem("array_post_mapa", JSON.stringify(string_array_post_mapa))


         }


      document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })



      string_array_post_mapa.forEach((as)=>{

           desenhar(as, false);


        })


      let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))


      string_array_caix_mapa.forEach((nh)=>{

           desenhar(nh, false);


        })
        

        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((mn)=>{

           desenhar(mn, false);


        })


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((op)=>{

           desenhar(op, false);


        })




      document.querySelector("#modal-alterar-postes-selecionados").style.display = "none"

     document.querySelector("#form-poligono-mapa").style.display = "none"


      }


      }

      })

  }


})


let select_filtro_todos_tipos_rede_poste = document.getElementById("select-filtro-todos-tipos-rede-poste")

let select_filtro_todos_status_implementacao_poste = document.getElementById("select-filtro-todos-status-implementacao-poste")

let select_filtro_todos_status_licenciamento_poste = document.getElementById("select-filtro-todos-status-licenciamento-poste")




/*=================================TIPO REDE PARA POSTES====================================*/


select_filtro_todos_tipos_rede_poste.addEventListener("input", (event)=>{


  document.getElementById("tabela-poste").innerHTML = ""

  let container_ecra_poste = event.target.parentElement

  let string_array_postes_selecionados = JSON.parse(localStorage.getItem("array_postes_selecionados"))

  let checkbox_poste_selecionado = container_ecra_poste.querySelectorAll(".checkbox-poste")


   
       // console.log(checkbox_caixa_selecionado.length)

      



 
  for(var p = 0; p < string_array_postes_selecionados.length; p++){
 
   
      

        
          if(event.target.value == string_array_postes_selecionados[p].tipo_rede_poste & select_filtro_todos_status_implementacao_poste.value == "Todos status de implementação" & select_filtro_todos_status_licenciamento_poste.value == "Todos status de licenciamento"){

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }



          if(event.target.value == string_array_postes_selecionados[p].tipo_rede_poste & select_filtro_todos_status_implementacao_poste.value == string_array_postes_selecionados[p].status_implementacao_poste & select_filtro_todos_status_licenciamento_poste.value == "Todos status de licenciamento"){

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }



          if(event.target.value == string_array_postes_selecionados[p].tipo_rede_poste & select_filtro_todos_status_implementacao_poste.value == "Todos status de implementação" & select_filtro_todos_status_licenciamento_poste.value == string_array_postes_selecionados[p].status_licenciamento_poste){

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_postes_selecionados[p].tipo_rede_poste & select_filtro_todos_status_implementacao_poste.value == string_array_postes_selecionados[p].status_implementacao_poste & select_filtro_todos_status_licenciamento_poste.value == string_array_postes_selecionados[p].status_licenciamento_poste){ 

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }




        }

      })







/*=================================STATUS IMPLEMENTACAO REDE PARA POSTES====================================*/


select_filtro_todos_status_implementacao_poste.addEventListener("input", (event)=>{


  document.getElementById("tabela-poste").innerHTML = ""

  let container_ecra_poste = event.target.parentElement

  let string_array_postes_selecionados = JSON.parse(localStorage.getItem("array_postes_selecionados"))

  let checkbox_poste_selecionado = container_ecra_poste.querySelectorAll(".checkbox-poste")



 
  for(var p = 0; p < string_array_postes_selecionados.length; p++){
 
   
      

        
          if(event.target.value == string_array_postes_selecionados[p].status_implementacao_poste & select_filtro_todos_tipos_rede_poste.value == "Todos tipos de rede" & select_filtro_todos_status_licenciamento_poste.value == "Todos status de licenciamento"){

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }



          if(event.target.value == string_array_postes_selecionados[p].status_implementacao_poste & select_filtro_todos_tipos_rede_poste.value == string_array_postes_selecionados[p].tipo_rede_poste & select_filtro_todos_status_licenciamento_poste.value == "Todos status de licenciamento"){

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }



          if(event.target.value == string_array_postes_selecionados[p].status_implementacao_poste & select_filtro_todos_tipos_rede_poste.value == 'Todos tipos de rede' & select_filtro_todos_status_licenciamento_poste.value == string_array_postes_selecionados[p].status_licenciamento_poste){

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_postes_selecionados[p].status_implementacao_poste & select_filtro_todos_tipos_rede_poste.value == string_array_postes_selecionados[p].tipo_rede_poste & select_filtro_todos_status_licenciamento_poste.value == string_array_postes_selecionados[p].status_licenciamento_poste){ 

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }







        }

      })





/*=================================STATUS LICENCIAMENTO PARA POSTES====================================*/


select_filtro_todos_status_licenciamento_poste.addEventListener("input", (event)=>{


  document.getElementById("tabela-poste").innerHTML = ""

  let container_ecra_poste = event.target.parentElement

  let string_array_postes_selecionados = JSON.parse(localStorage.getItem("array_postes_selecionados"))

  let checkbox_poste_selecionado = container_ecra_poste.querySelectorAll(".checkbox-poste")



 
  for(var p = 0; p < string_array_postes_selecionados.length; p++){
 
   
      

        
          if(event.target.value == string_array_postes_selecionados[p].status_licenciamento_poste & select_filtro_todos_tipos_rede_poste.value == "Todos tipos de rede" & select_filtro_todos_status_implementacao_poste.value == 'Todos status de implementação'){

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }



          if(event.target.value == string_array_postes_selecionados[p].status_licenciamento_poste & select_filtro_todos_tipos_rede_poste.value == string_array_postes_selecionados[p].tipo_rede_poste & select_filtro_todos_status_implementacao_poste  == 'Todos status de implementação'){

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }



          if(event.target.value == string_array_postes_selecionados[p].status_licenciamento_poste & select_filtro_todos_tipos_rede_poste.value == 'Todos tipos de rede' & select_filtro_todos_status_implementacao_poste == string_array_postes_selecionados[p].status_implementacao_poste){

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_postes_selecionados[p].status_licenciamento_poste & select_filtro_todos_tipos_rede_poste.value == string_array_postes_selecionados[p].tipo_rede_poste & select_filtro_todos_status_implementacao_poste.value == string_array_postes_selecionados[p].status_implementacao_poste){ 

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }


          

          if(event.target.value == string_array_postes_selecionados[p].status_licenciamento_poste & select_filtro_todos_tipos_rede_poste.value == 'Todos tipos de rede' & select_filtro_todos_status_implementacao_poste.value == string_array_postes_selecionados[p].status_implementacao_poste){ 

           

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_postes_selecionados[p].status_licenciamento_poste & select_filtro_todos_tipos_rede_poste.value == string_array_postes_selecionados[p].tipo_rede_poste & select_filtro_todos_status_implementacao_poste.value == 'Todos status de implementação'){ 

            

            

            document.getElementById("tabela-poste").innerHTML += `

                  <tr>
                         <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-poste' value='${string_array_postes_selecionados[p].uniqueid}'></td>
                        <td>${string_array_postes_selecionados[p].nome_poste}</td>
                        <td>${string_array_postes_selecionados[p].tipo_rede_poste}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_postes_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_postes_selecionados[p].status_implementacao_poste}</td>
                        <td>${string_array_postes_selecionados[p].status_licenciamento_poste}</td>
                        <td>${string_array_postes_selecionados[p]._latlngs.lat},${string_array_postes_selecionados[p]._latlngs.lng}</td>
                        <td>${string_array_postes_selecionados[p].observacao}</td>
                        <td>${string_array_postes_selecionados[p].escala_poste}</td>
                      </tr>


                `

            


          }




        }

      })




//sdds

document.getElementById("btn-exportar-png-tabela-poste").onclick = function(){

  let screenshotTarget = document.getElementById("table-post")

  html2canvas(screenshotTarget).then((canvas) => {
    const base64image = canvas.toDataURL("image/png")
    var anchor = document.createElement('a')
    anchor.setAttribute("href", base64image)
    anchor.setAttribute("download", "tabela-poste.png")
    anchor.click();
    anchor.remove();
  })

}





 

document.getElementById("btn-exportar-pdf-tabela-poste").onclick = function(){

let screenshotTarget = document.getElementById("table-post")

var opt = {
  margin:       1,
  filename:     'tabela-poste',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 1 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
};

html2pdf().set(opt).from(screenshotTarget).save()


}


/*=============================AREA SOMENTE DE CABOS====================================*/


function alterarCabosSelecionados(){


  document.getElementById("modal-alterar-cabos-selecionados").style.display = "block"

}


function alterarConcentradoresSelecionados(){


  document.getElementById("modal-alterar-concentradores-selecionados").style.display = "block"

}


document.getElementById("btn-marcar-todos-cabo").addEventListener("click", (event)=>{



  if(event.target.innerText == "Marcar Todos done_all"){

    document.querySelectorAll(".checkbox-cabo").forEach((y)=>{

      y.checked = true

    })


    document.getElementById("btn-marcar-todos-cabo").style.cssText = "position: absolute; left:-50000000%"

    document.getElementById("btn-desmmarcar-todos-cabo").style.cssText = "position: relative; top: 35px; left:0px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0)"

  }


  


})



document.getElementById("btn-desmmarcar-todos-cabo").addEventListener("click", (event)=>{



  if(event.target.innerText == "Desmarcar Todos done_all"){

    document.querySelectorAll(".checkbox-cabo").forEach((y)=>{

      y.checked = false

    })

    document.getElementById("btn-desmmarcar-todos-cabo").style.cssText = "position: absolute; left:-50000000%"

    document.getElementById("btn-marcar-todos-cabo").style.cssText = "position: relative; top: 35px; left:0px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0)"

    


  } 

  


})



  document.getElementById("btn-deletar-tabela-cabo").addEventListener("click", ()=>{

  let string_array_cabo_mapa_no_excluir = JSON.parse(localStorage.getItem("array_cabo_mapa"))

  let checkbox_cabo_no_excluir = document.querySelectorAll(".checkbox-cabo")

 
      for(let vfk = 0; vfk < checkbox_cabo_no_excluir.length; vfk++){

    if(checkbox_cabo_no_excluir[vfk].checked == true){

      string_array_cabo_mapa_no_excluir[vfk].cabo_selecionado = "sim"

     
      let cabo_selec = string_array_cabo_mapa_no_excluir.filter(z => z.cabo_selecionado != "sim");

       localStorage.setItem("array_cabo_mapa", JSON.stringify(cabo_selec))

        document.querySelectorAll(".leaflet-interactive").forEach((y)=>{


          y.style.display = "none"

        })



        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((ytf)=>{

           desenhar(ytf, false);


        })




      let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))

      string_array_post_mapa.forEach((fge)=>{

           desenhar(fge, false);


        })


      let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))


      string_array_caix_mapa.forEach((nfs)=>{

           desenhar(nfs, false);


        })
        

        


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((jfs)=>{

           desenhar(jfs, false);


        })




        document.querySelector("#modal-alterar-concentradores-selecionados").style.display = "none"

    document.querySelector("#form-poligono-mapa").style.display = "none"
     

    
     }

  }


  

   })



 

  document.getElementById("btn-exportar-kml-tabela-cabo").addEventListener("click", ()=>{

  let string_array_cabo_mapa_para_kml = JSON.parse(localStorage.getItem("array_cabo_mapa"))




  let all_checkbox_cabo = document.querySelectorAll(".checkbox-cabo")

    var cabos_selecionados_para_kmz = "" 

 
      for(let cvbs = 0; cvbs < all_checkbox_cabo.length; cvbs++){

    if(all_checkbox_cabo[cvbs].checked == true){

      string_array_cabo_mapa_para_kml[cvbs].cabo_selecionado = "sim"

     
       cabos_selecionados_para_kmz = string_array_cabo_mapa_para_kml.filter(gcd => gcd.cabo_selecionado == "sim");



}

}


  var array_cabo_mapa_export = []


for(let g = 0; g < cabos_selecionados_para_kmz.length; g++){

 
  array_cabo_mapa_export.push(cabos_selecionados_para_kmz[g]._latlngs_coordenadas)


}


  
  const kml = `<?xml version="1.0" encoding="UTF-8"?>
<kml xmlns="http://www.opengis.net/kml/2.2">
  <Document>
    <name>Polyline</name>
    <Style id="polyStyle">
      <LineStyle>
      <color>ff0000ff</color>
        <width>4</width>
      </LineStyle>
    </Style>
    ${array_cabo_mapa_export.map(polyline => `
    <Placemark>
      <name>${polyline.name}</name>
      <styleUrl>#polyStyle</styleUrl>
      <LineString>
        <tessellate>1</tessellate>
        <coordinates>${polyline.coordinates.join(',')}</coordinates>
      </LineString>
    </Placemark>
    `).join('')}
  </Document>
</kml>`;




var blob = new Blob([kml], {type: 'application/vnd.google-earth.kml+xml'});

var zip = new JSZip();
zip.file("doc.kml", blob);

//var content = zip.generate({type: "blob"});
//saveAs(content, "file.kmz");



zip.generateAsync({type:'blob'}).then(function(content) {
    // Crie um link de download para o arquivo KMZ e adicione-o ao DOM.
    var link = document.createElement('a');
    link.href = URL.createObjectURL(content);
    link.download = 'polyline_export.kmz';
    document.body.appendChild(link);
    link.click();
})


 


     })





 document.getElementById("edit_btn_salvar_cabo_nivel_mapa").addEventListener("click", ()=>{

  let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))

  let checkbox_cabo = document.querySelectorAll(".checkbox-cabo")

  

  
  for(var tr = 0; tr < string_array_cabo_mapa.length; tr++){

    

      checkbox_cabo.forEach((is)=>{

 
       if(is.value == string_array_cabo_mapa[tr].uniqueid){

        if(is.checked == true){

          if(document.getElementById("alterar_quantidade_fibras_cabo_nivel").value != ""){


        string_array_cabo_mapa[tr].quantidade_fibras_cabo = document.getElementById("alterar_quantidade_fibras_cabo_nivel").value

        localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))


         }




         if(document.getElementById("alterar_quantidade_tubo_looses_cabo_nivel").value != ""){


        string_array_cabo_mapa[tr].quantidade_tubo_looses_cabo = document.getElementById("alterar_quantidade_tubo_looses_cabo_nivel").value

        localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))


         }


      

      if(document.getElementById("alterar_cor_cabo_nivel").value != "#000000"){


        string_array_cabo_mapa[tr].cor = document.getElementById("alterar_cor_cabo_nivel").value

        localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))

 
      }

      if(document.getElementById("alterar_alto_sustentavel_cabo_nivel").value != ""){


        string_array_cabo_mapa[tr].alto_sustentavel_cabo = document.getElementById("alterar_alto_sustentavel_cabo_nivel").value

        localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))


         }

      if(document.getElementById("alterar_status_implementacao_cabo_nivel").value != ""){


        string_array_cabo_mapa[tr].status_implementacao_cabo = document.getElementById("alterar_status_implementacao_cabo_nivel").value

        localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))


         }

       
       if(document.getElementById("alterar_observacao_cabo_nivel").value != ""){


        string_array_cabo_mapa[tr].observacao_cabo = document.getElementById("alterar_observacao_cabo_nivel").value

        localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))


         }

         if(document.getElementById("alterar_escala_cabo_nivel").value != ""){


        string_array_cabo_mapa[tr].escala_cabo = document.getElementById("alterar_escala_cabo_nivel").value

        localStorage.setItem("array_cabo_mapa", JSON.stringify(string_array_cabo_mapa))


         }


      document.querySelectorAll(".leaflet-interactive").forEach((id)=>{


          id.style.display = "none"

        })



      
      

        string_array_cabo_mapa.forEach((rsa)=>{

           desenhar(rsa, false);


        })


      let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))


      string_array_caix_mapa.forEach((ncs)=>{

           desenhar(ncs, false);


        })
        

        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((rds)=>{

           desenhar(rds, false);


        })




        let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))


        string_array_post_mapa.forEach((dfd)=>{

           desenhar(dfd, false);


        })




      document.querySelector("#modal-alterar-cabos-selecionados").style.display = "none"

     document.querySelector("#form-poligono-mapa").style.display = "none"


      }


      }

      })

  }


})






let select_filtro_todos_niveis_cabo = document.getElementById("select-filtro-todos-niveis-cabo")

let select_filtro_todos_quantidade_fibras_cabo = document.getElementById("select-filtro-todos-quantidade-fibras-cabo")

let select_filtro_todos_alto_sustentavel_cabo = document.getElementById("select-filtro-todos-alto-sustentavel-cabo")

let select_filtro_todos_status_implementacao_cabo = document.getElementById("select-filtro-todos-status-implementacao-cabo")




/*=================================NIVEIS PARA CABOS====================================*/


select_filtro_todos_niveis_cabo.addEventListener("input", (event)=>{


  document.getElementById("tabela-cabo").innerHTML = ""

  let container_ecra_cabo = event.target.parentElement

  let string_array_cabos_selecionados = JSON.parse(localStorage.getItem("array_cabos_selecionados"))

  let checkbox_cabo_selecionado = container_ecra_cabo.querySelectorAll(".checkbox-cabo")


   
       // console.log(checkbox_caixa_selecionado.length)

      




  for(var p = 0; p < string_array_cabos_selecionados.length; p++){
 
   
      
 
        
          if(event.target.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }
 


          if(event.target.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }





          if(event.target.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }
 


          if(event.target.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            
 

          }



       if(event.target.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

           

            

            document.getElementById("tabela-cabo").innerHTML += ` 

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }

          if(event.target.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

           

            

            document.getElementById("tabela-cabo").innerHTML += ` 

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += ` 

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += ` 

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


 
            if(event.target.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){ 

           

            

            document.getElementById("tabela-cabo").innerHTML += ` 

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }

          if(event.target.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){ 

           

            

            document.getElementById("tabela-cabo").innerHTML += ` 

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }
 

           

          if(event.target.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){ 

           

            

            document.getElementById("tabela-cabo").innerHTML += ` 

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){ 

           

            
 
            document.getElementById("tabela-cabo").innerHTML += ` 

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




        }


           })



/*=================================QUANTIDADE DE FIBRAS PARA CABOS====================================*/


select_filtro_todos_quantidade_fibras_cabo.addEventListener("input", (event)=>{


  document.getElementById("tabela-cabo").innerHTML = ""

  let container_ecra_cabo = event.target.parentElement

  let string_array_cabos_selecionados = JSON.parse(localStorage.getItem("array_cabos_selecionados"))

  let checkbox_cabo_selecionado = container_ecra_cabo.querySelectorAll(".checkbox-cabo")


   
       // console.log(checkbox_caixa_selecionado.length)

      




  for(var p = 0; p < string_array_cabos_selecionados.length; p++){
 
   
      
 
        
          if(event.target.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }





          if(event.target.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }
 


          if(event.target.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           
 
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           
 
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            
 

          }


          if(event.target.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

           
 
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

           
     
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            
 

          }




          if(event.target.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           
 
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           
 
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

           
  
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          } 


          if(event.target.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

           
  
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

           
   
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          } 




          if(event.target.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

           
   
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          } 



        }

        })







  

      /*=================================ALTO SUSTENTAVEL PARA CABOS====================================*/


select_filtro_todos_alto_sustentavel_cabo.addEventListener("input", (event)=>{


  document.getElementById("tabela-cabo").innerHTML = ""

  let container_ecra_cabo = event.target.parentElement

  let string_array_cabos_selecionados = JSON.parse(localStorage.getItem("array_cabos_selecionados"))

  let checkbox_cabo_selecionado = container_ecra_cabo.querySelectorAll(".checkbox-cabo")


   
       // console.log(checkbox_caixa_selecionado.length)

      




  for(var p = 0; p < string_array_cabos_selecionados.length; p++){
 
   
       
  
        
          if(event.target.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           
 
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == "Todos alto sustentáveis" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           
 
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           
  
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == "Todos alto sustentáveis" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

           
  
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

            
  
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == "Todos alto sustentáveis" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

            
  
             

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }
 


          if(event.target.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

            
  
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == "Todos alto sustentáveis" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

            
  
            

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            
 

          } 



          if(event.target.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

            
  
             

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == "Todos alto sustentáveis" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_status_implementacao_cabo.value == "Todos status de implementação"){

            
  
             

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

            
   
              

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


          if(event.target.value == "Todos alto sustentáveis" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

            
   
             

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            

 
          } 



          if(event.target.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){
 
            
   
              

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          } 
 

          if(event.target.value == "Todos alto sustentáveis" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){

             
   
              

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }

 

          if(event.target.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){
 
            
     
              

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          } 


          if(event.target.value == "Todos alto sustentáveis" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_status_implementacao_cabo.value == string_array_cabos_selecionados[p].status_implementacao_cabo){
 
            
      
              

            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }


        }

      })








      /*=================================STATUS DE IMPLEMENTACAO PARA CABOS====================================*/

 
select_filtro_todos_status_implementacao_cabo.addEventListener("input", (event)=>{

 
  document.getElementById("tabela-cabo").innerHTML = ""

  let container_ecra_cabo = event.target.parentElement

  let string_array_cabos_selecionados = JSON.parse(localStorage.getItem("array_cabos_selecionados"))

  let checkbox_cabo_selecionado = container_ecra_cabo.querySelectorAll(".checkbox-cabo")


   
       // console.log(checkbox_caixa_selecionado.length)

      




  for(var p = 0; p < string_array_cabos_selecionados.length; p++){
 
   
      
 
        
          if(event.target.value == string_array_cabos_selecionados[p].status_implementacao_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis"){

           

            
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == "Todos status de implementação" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis"){

           

            
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == string_array_cabos_selecionados[p].status_implementacao_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis"){

           

            
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == "Todos status de implementação" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis"){

           

            
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_cabos_selecionados[p].status_implementacao_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis"){

           

            
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }

 
          if(event.target.value == "Todos status de implementação" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis"){

           

            
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_cabos_selecionados[p].status_implementacao_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo){

           

            
  
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == "Todos status de implementação" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo){

           

            
  
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          } 




          if(event.target.value == string_array_cabos_selecionados[p].status_implementacao_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis"){

           

            
  
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == "Todos status de implementação" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == "Todos alto sustentáveis"){

           
 
            
  
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_cabos_selecionados[p].status_implementacao_cabo & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo  & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo){

           
 
            
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == "Todos status de implementação" & select_filtro_todos_quantidade_fibras_cabo.value == "Todas quantidades de fibras" & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo  & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo){

           
 
            
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }




          if(event.target.value == string_array_cabos_selecionados[p].status_implementacao_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo){

           
 
            
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == "Todos status de implementação" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == "Todos níveis" & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo){

            
 
             
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == string_array_cabos_selecionados[p].status_implementacao_cabo & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo){

            
 
             
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }



          if(event.target.value == "Todos status de implementação" & select_filtro_todos_quantidade_fibras_cabo.value == string_array_cabos_selecionados[p].quantidade_fibras_cabo & select_filtro_todos_niveis_cabo.value == string_array_cabos_selecionados[p].nivel_cabo & select_filtro_todos_alto_sustentavel_cabo.value == string_array_cabos_selecionados[p].alto_sustentavel_cabo){

            
 
             
 
            document.getElementById("tabela-cabo").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${p+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-cabo' value='${string_array_cabos_selecionados[p].uniqueid}'></td>
                        <td>${string_array_cabos_selecionados[p].nome_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].quantidade_fibras_cabo}</td> 
                        <td>${string_array_cabos_selecionados[p].quantidade_tubo_looses_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].status_implementacao_cabo}</td>
                        <td><div style='position: relative; top: 5px; background: ${string_array_cabos_selecionados[p].cor}; width:15px; height:15px'></div></td>
                        <td>${string_array_cabos_selecionados[p].alto_sustentavel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p]._latlngs}</td>
                        <td>${string_array_cabos_selecionados[p].observacao_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].nivel_cabo}</td>
                        <td>${string_array_cabos_selecionados[p].escala_cabo}</td>
                      </tr>


                `

            


          }

 

        }

      })


  document.getElementById("btn-exportar-png-tabela-cabo").onclick = function(){

  let screenshotTarget = document.getElementById("table-cabo")

  html2canvas(screenshotTarget).then((canvas) => {
    const base64image = canvas.toDataURL("image/png")
    var anchor = document.createElement('a')
    anchor.setAttribute("href", base64image)
    anchor.setAttribute("download", "tabela-cabo.png")
    anchor.click();
    anchor.remove();
  })

}

 

document.getElementById("btn-exportar-pdf-tabela-cabo").onclick = function(){

let screenshotTarget = document.getElementById("table-cabo")

var opt = {
  margin:       1,
  filename:     'tabela-cabo',
  image:        { type: 'jpeg', quality: 1 },
 // html2canvas:  { scale: 0.5 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
};

html2pdf().set(opt).from(screenshotTarget).save()

}








/*=============================AREA SOMENTE DE CONCENTRADOR====================================*/


function alterarConcentradoresSelecionados(){


  document.getElementById("modal-alterar-concentradores-selecionados").style.display = "block"

}





document.getElementById("btn-marcar-todos-concentradores").addEventListener("click", (event)=>{



  if(event.target.innerText == "Marcar Todos done_all"){

    document.querySelectorAll(".checkbox-concentrador").forEach((y)=>{

      y.checked = true

    })


    document.getElementById("btn-marcar-todos-concentradores").style.cssText = "position: absolute; left:-50000000%"

    document.getElementById("btn-desmmarcar-todos-concentradores").style.cssText = "position: relative; top: 35px; left:0px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0)"

  }


  


})



document.getElementById("btn-desmmarcar-todos-concentradores").addEventListener("click", (event)=>{



  if(event.target.innerText == "Desmarcar Todos done_all"){

    document.querySelectorAll(".checkbox-concentrador").forEach((y)=>{

      y.checked = false

    })

    document.getElementById("btn-desmmarcar-todos-concentradores").style.cssText = "position: absolute; left:-50000000%"

    document.getElementById("btn-marcar-todos-concentradores").style.cssText = "position: relative; top: 35px; left:0px; font-size: 14px; border: 1px solid rgba(255, 255, 255, 1.0)"

    


  } 

  


}) 



  document.getElementById("btn-deletar-tabela-concentrador").addEventListener("click", ()=>{

  let string_array_concentrador_mapa_no_excluir = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

  let checkbox_concentrador_no_excluir = document.querySelectorAll(".checkbox-concentrador")

  
   
 
      for(let lg = 0; lg < checkbox_concentrador_no_excluir.length; lg++){

    if(checkbox_concentrador_no_excluir[lg].checked == true){

      string_array_concentrador_mapa_no_excluir[lg].concentrador_selecionado = "sim"

     // console.log(string_array_concentrador_mapa_no_excluir[lg].concentrador_selecionado)

          //console.log(checkbox_concentrador_no_excluir.length)

      let concentrador_selec = string_array_concentrador_mapa_no_excluir.filter(cv => cv.concentrador_selecionado != "sim");

      localStorage.setItem("array_concentrador_mapa", JSON.stringify(concentrador_selec))

        document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })



        let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

        string_array_concentrador_mapa.forEach((ytf)=>{

           desenhar(ytf, false);


        })




      let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))

      string_array_post_mapa.forEach((fge)=>{

           desenhar(fge, false);


        })


      let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))


      string_array_caix_mapa.forEach((nfs)=>{

           desenhar(nfs, false);


        })
        

        


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((jfs)=>{

           desenhar(jfs, false);


        })




        document.querySelector("#modal-alterar-concentradores-selecionados").style.display = "none"

    document.querySelector("#form-poligono-mapa").style.display = "none"
     

    
     }

  }


  

   })


  document.getElementById("btn-exportar-kml-tabela-concentrador").addEventListener("click", ()=>{

  let string_array_concentrador_mapa_para_kml = JSON.parse(localStorage.getItem("array_concentrador_mapa"))



  let all_checkbox_concentrador = document.querySelectorAll(".checkbox-concentrador")

    var concentradores_selecionas_para_kml = ""

 
      for(let cvbs = 0; cvbs < all_checkbox_concentrador.length; cvbs++){

    if(all_checkbox_concentrador[cvbs].checked == true){

      string_array_concentrador_mapa_para_kml[cvbs].concentrador_selecionado = "sim"

     
       concentradores_selecionas_para_kml = string_array_concentrador_mapa_para_kml.filter(gcd => gcd.concentrador_selecionado == "sim");


}

}



   

  function createKMZ(concentradores_selecionas_para_kml) {
  var kmz = [
    '<?xml version="1.0" encoding="UTF-8"?>',
    '<kml xmlns="http://www.opengis.net/kml/2.2">',
    '<Document>',
    '<name>Concentradores.kmz</name>',
    
  ];
  
  var tipo_icone_concentrador = ""

  concentradores_selecionas_para_kml.forEach(function(ct) {

   

      tipo_icone_concentrador = "https://cdn-icons-png.flaticon.com/128/5693/5693831.png"

    


    kmz.push("<Style id='markerStyle'><IconStyle><Icon><href>" + tipo_icone_concentrador + "</href></Icon></IconStyle></Style>")

    kmz.push('<Placemark>');
    kmz.push('<name>' + ct.nome_concentrador + '</name>');
    kmz.push('<styleUrl>#markerStyle</styleUrl>');
    kmz.push('<Point>');
    kmz.push('<coordinates>' + ct._latlng.lng + ',' + ct._latlng.lat + ',0</coordinates>');
    kmz.push('</Point>');
    kmz.push('</Placemark>');
  });
  
  kmz.push('</Document>');
  kmz.push('</kml>');
  
  var blob = new Blob(kmz, {type: 'application/vnd.google-earth.kmz'});
  
  var link = document.createElement('a');
  link.href = window.URL.createObjectURL(blob);
  link.download = 'Concentradores.kmz';
  document.body.appendChild(link);
  
  link.click();
  document.body.removeChild(link);
}

createKMZ(concentradores_selecionas_para_kml);



     })



document.getElementById("btn_alterar_concentrador_mapa").addEventListener("click", ()=>{

  let string_array_concentrador_mapa = JSON.parse(localStorage.getItem("array_concentrador_mapa"))

  let checkbox_concentrador = document.querySelectorAll(".checkbox-concentrador")

  

  
  for(var h = 0; h < string_array_concentrador_mapa.length; h++){

   
 
      checkbox_concentrador.forEach((l)=>{


       if(l.value == string_array_concentrador_mapa[h].uniqueid){

        if(l.checked == true){

          if(document.getElementById("alterar_nome_concentrador").value != ""){


        string_array_concentrador_mapa[h].nome_concentrador = document.getElementById("alterar_nome_concentrador").value

        localStorage.setItem("array_concentrador_mapa", JSON.stringify(string_array_concentrador_mapa))


         }


         if(document.getElementById("alterar_status_implementacao_concentrador").value != ""){


        string_array_concentrador_mapa[h].status_implementacao_concentrador = document.getElementById("alterar_status_implementacao_concentrador").value

        localStorage.setItem("array_concentrador_mapa", JSON.stringify(string_array_concentrador_mapa))


         }


         if(document.getElementById("alterar_observacao_concentrador").value != ""){


        string_array_concentrador_mapa[h].observacao_concentrador = document.getElementById("alterar_observacao_concentrador").value

        localStorage.setItem("array_concentrador_mapa", JSON.stringify(string_array_concentrador_mapa))


         }


         if(document.getElementById("alterar_escala_concentrador").value != ""){


        var array_alterar_scala_concentrador = []

          if(document.getElementById("alterar_escala_concentrador").value == 10){

             array_alterar_scala_concentrador.push(60) 

             array_alterar_scala_concentrador.push(60) 

          }

          if(document.getElementById("alterar_escala_concentrador").value == 9){

             array_alterar_scala_concentrador.push(55) 

             array_alterar_scala_concentrador.push(55) 

          }

           if(document.getElementById("alterar_escala_concentrador").value == 8){

             array_alterar_scala_concentrador.push(50) 

             array_alterar_scala_concentrador.push(50) 

          }

          if(document.getElementById("alterar_escala_concentrador").value == 7){

             array_alterar_scala_concentrador.push(45) 

             array_alterar_scala_concentrador.push(45) 

          }

          if(document.getElementById("alterar_escala_concentrador").value == 6){

             array_alterar_scala_concentrador.push(40) 

             array_alterar_scala_concentrador.push(40) 

          }

          if(document.getElementById("alterar_escala_concentrador").value == 5){

             array_alterar_scala_concentrador.push(35) 

             array_alterar_scala_concentrador.push(35) 

          }

          if(document.getElementById("alterar_escala_concentrador").value == 4){

             array_alterar_scala_concentrador.push(30) 

             array_alterar_scala_concentrador.push(30) 

          }

          if(document.getElementById("alterar_escala_concentrador").value == 3){

             array_alterar_scala_concentrador.push(25) 

             array_alterar_scala_concentrador.push(25) 

          }

          if(document.getElementById("alterar_escala_concentrador").value == 2){

             array_alterar_scala_concentrador.push(20) 

             array_alterar_scala_concentrador.push(20) 

          }

          if(document.getElementById("alterar_escala_concentrador").value == 1){

             array_alterar_scala_concentrador.push(17) 

             array_alterar_scala_concentrador.push(17) 

          } 


          string_array_concentrador_mapa[h].escala_concentrador = document.getElementById("alterar_escala_concentrador").value


          string_array_concentrador_mapa[h].escala_concentrador_main = array_alterar_scala_concentrador


        localStorage.setItem("array_concentrador_mapa", JSON.stringify(string_array_concentrador_mapa))


         }
  



      document.querySelectorAll(".leaflet-interactive").forEach((i)=>{


          i.style.display = "none"

        })





        string_array_concentrador_mapa.forEach((vsd)=>{

           desenhar(vsd, false);


        })




      let string_array_post_mapa = JSON.parse(localStorage.getItem("array_post_mapa"))

      string_array_post_mapa.forEach((kiuy)=>{

           desenhar(kiuy, false);


        })


      let string_array_caix_mapa = JSON.parse(localStorage.getItem("array_caix_mapa"))


      string_array_caix_mapa.forEach((erd)=>{

           desenhar(erd, false);


        })
        

        


        let string_array_cabo_mapa = JSON.parse(localStorage.getItem("array_cabo_mapa"))
      

        string_array_cabo_mapa.forEach((rvsz)=>{

           desenhar(rvsz, false);


        })

 


      document.querySelector("#modal-alterar-concentradores-selecionados").style.display = "none"

     document.querySelector("#form-poligono-mapa").style.display = "none"


      }


      }

      })

  }


})






 


 let select_filtro_todos_status_implementacao_concentrador = document.getElementById("select-filtro-todos-status-implementacao-concentrador")



/*=================================STATUS DE IMPLEMENTACAO PARA CONCENTRADORES====================================*/


select_filtro_todos_status_implementacao_concentrador.addEventListener("input", (event)=>{


  document.getElementById("tabela-concentrador").innerHTML = ""

  let container_ecra_concentrador = event.target.parentElement

  let string_array_concentrador_selecionados = JSON.parse(localStorage.getItem("array_concentradores_selecionados"))

  let checkbox_concentrador_selecionado = container_ecra_concentrador.querySelectorAll(".checkbox-concentrador")


   
       // console.log(checkbox_caixa_selecionado.length)

      




  for(var v = 0; v < string_array_concentrador_selecionados.length; v++){
 
   
      
 
        
          if(event.target.value == string_array_concentrador_selecionados[v].status_implementacao_concentrador){

           

            

            document.getElementById("tabela-concentrador").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${v+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-concentrador' value='${string_array_concentrador_selecionados[v].uniqueid}'></td>
                        <td>${string_array_concentrador_selecionados[v].nome_concentrador}</td>
                        <td>${string_array_concentrador_selecionados[v].status_implementacao_concentrador}</td>
                        <td>${string_array_concentrador_selecionados[v]._latlng.lat},${string_array_concentrador_selecionados[v]._latlng.lng}</td>
                        <td>${string_array_concentrador_selecionados[v].observacao_concentrador}</td>
                        <td>${string_array_concentrador_selecionados[v].escala_concentrador}</td> 
                      </tr>


                `

            


          }
 


          if(event.target.value == "Todos status de implementação"){

           

            

            document.getElementById("tabela-concentrador").innerHTML += `

                  <tr>
                          <th scope="row"><a href="#">${v+1}</a></th>
                        <td style='position: relative; top: 5px; left:10px'><input type='checkbox' class='checkbox-concentrador' value='${string_array_concentrador_selecionados[v].uniqueid}'></td>
                        <td>${string_array_concentrador_selecionados[v].nome_concentrador}</td>
                        <td>${string_array_concentrador_selecionados[v].status_implementacao_concentrador}</td>
                        <td>${string_array_concentrador_selecionados[v]._latlng.lat},${string_array_concentrador_selecionados[v]._latlng.lng}</td>
                        <td>${string_array_concentrador_selecionados[v].observacao_concentrador}</td>
                        <td>${string_array_concentrador_selecionados[v].escala_concentrador}</td> 
                      </tr>


                `

            


          }


        }

      }) 




  document.getElementById("btn-exportar-png-tabela-concentrador").onclick = function(){

  let screenshotTarget = document.getElementById("table-concentrador")

  html2canvas(screenshotTarget).then((canvas) => {
    const base64image = canvas.toDataURL("image/png")
    var anchor = document.createElement('a')
    anchor.setAttribute("href", base64image)
    anchor.setAttribute("download", "tabela-concentrador.png")
    anchor.click();
    anchor.remove();
  })

}

 

document.getElementById("btn-exportar-pdf-tabela-concentrador").onclick = function(){

let screenshotTarget = document.getElementById("table-concentrador")

var opt = {
  margin:       1,
  filename:     'tabela-concentrador',
  image:        { type: 'jpeg', quality: 1 },
 // html2canvas:  { scale: 0.5 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
};

html2pdf().set(opt).from(screenshotTarget).save()

}




</script>