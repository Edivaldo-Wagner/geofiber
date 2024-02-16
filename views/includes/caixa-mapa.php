 <!-----------------FORM CAIXA MAPA---------->

 <div class="modal-form-mapa" id="form-caixa-mapa">
    
    <div class="container-modal container-modal-cabo-mapa" id="container-caixa-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b id="titulo-caixa-form" style="position: relative; top: -17px;"></b></div>
        
       
        
        
        

        <div id="main-form-cabo-mapa">
            
          <div id="msg-sem-opcao-caixa" style='margin-top:60px; color:#808080; text-align:center; font-size:22px; display:none'>
              
              Seleccione uma Opção para o Caixa <a href="caixa-nivel-1.php" style="text-decoration:underline; color:#413a91">Aqui!!</a>
              
          </div>

        <div class="modal-body" id="mini-container-form-caixa">



       <input type='hidden' name='id_caixa' id="id_caixa" value=> 
       
          <input type="hidden" id="selected_caixa_nivel_1">

          <input type="hidden" id="fillColor_caixa">

          <input type="hidden" id="fillOpacity_caixa">

          <input type="hidden" id="opacity_caixa">
                     
      <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' name='nome' id='nome_caixa' required readonly=true style='cursor:default'>
      </div>

      <div class='form-group'>
        <label>Splitter</label>
        <select class='form-control' name='splitter' id='splitter_caixa' required readonly=true style='cursor:default'>
            
           

          

        </select>
      </div>
     <div class='form-group'>
        <label>Tipo de splitter</label>
        <select class='form-control' name='tipo_splitter' id='tipo_splitter_caixa' required readonly=true style='cursor:default'>
            
           

          
          
        </select>
      </div>
      <div class='form-group'>
        <label>Cor</label>
        <input type='color' class='form-control cor_caixa_nivel_1' name='cor' id='cor_caixa' required disabled=true style='cursor:default'>
      </div>
      
      <div class='form-group'>
        <label>Status de implementação</label>
        <select class='form-control' name='status_implementacao' id='status_implementacao_caixa' required readonly=true style='cursor:default'>
            
             
        
        </select>
      </div>
     <div class='form-group'>
        <label>Observação</label>
        
        <textarea class='form-control' name='observacao' id='observacao_caixa' readonly=true style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' name='escala_caixa' id='escala_caixa' readonly=true style='cursor:default'>
            
            
        
        </select>
      </div>


    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" onclick="closeModalCaixaMapa()" data-dismiss="modal">Fechar</button>
      <button type="submit" id="btn_salvar_caixa_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>
 

    </div> <!---.container-modal--->

</div> <!--.modal-->

<!-----------------/FORM CAIXA MAPA---------->

<!-----------------EDIT FORM CAIXA MAPA---------->

<div class="modal-form-mapa" id="edit_form-caixa-mapa">
    
    <div class="container-modal container-modal-cabo-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b id="edit-titulo-caixa-form" style="position: relative; top: -17px;"></b></div>

        <div id="main-form-cabo-mapa">

                  <div class="modal-body">

        

        <input type='hidden'  id="edit_id_caixa"> 
        
        <input type='hidden' id="edit_id_primary_caixa"> 

        <!---<input type='hiden' id="edit_fillColor_caixa"> 

        <input type='hiden' id="edit_fillOpacity_caixa"> 

        <input type='hiden' id="edit_opacity_caixa"> --->
       
          
                     
      <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' name='nome' id='edit_nome_caixa' required style='cursor:default'>
      </div>

      <div class='form-group'>
        <label>Splitter</label>
        <select class='form-control' name='splitter' id='edit_splitter_caixa' required style='cursor:default'>
            
           

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
        <select class='form-control' name='tipo_splitter' id='edit_tipo_splitter_caixa' required style='cursor:default'>
            
           <option>Balanceado</option>

          <option>Desbalanceado</option>

           
          
        </select>
      </div>
      <div class='form-group'>
        <label>Cor</label>
        <input type='color' class='form-control' name='cor' id='edit_cor_caixa' required style='cursor:default'>
      </div>
      
      <div class='form-group'>
        <label>Status de implementação</label>
        <select class='form-control' name='status_implementacao' id='edit_status_implementacao_caixa' required style='cursor:default'>
            
             <option>Implantada</option>
          
          <option>Não implantada</option>
        
        </select>
      </div>
      <div class='form-group'>
        <label>Latitude e Longitude</label>
        
        <textarea class='form-control' name='latitude' id='edit_latitude_caixa' readonly=true style='cursor:default'></textarea>
      </div>
      
     <div class='form-group'>
        <label>Observação</label>
        
        <textarea class='form-control' name='observacao' id='edit_observacao_caixa' style='cursor:default'>$observacao</textarea>
      </div>

      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' name='escala_caixa' id='edit_escala_caixa' required style='cursor:default'>
            
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
      <button type="button" class="btn btn-danger deletebtn" id="excluir-caixa-mapa" data-dismiss="modal" style="position: fixed; left: 13px;">Excluir Esta Caixa</button>
      <button type="button" class="btn btn-secondary" onclick="closeEditModalCaixaMapa()" data-dismiss="modal">Fechar</button>
      <button type="submit" id="edit_btn_salvar_caixa_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->

</div> <!--.modal-->

<!-----------------/EDIT FORM CAIXA MAPA---------->



<script>

/*------------------Caixa Mapa----------*/
 

function openModalCaixaMapa(){

document.querySelector("#form-caixa-mapa").style.display = "block"

}

function closeModalCaixaMapa(){

document.querySelector("#form-caixa-mapa").style.display = "none"

document.getElementById("cancelar-popup-caixa-mapa").style.top = "-50000000%"

       localStorage.setItem("nova-caix", 0)

}

document.querySelector(".modal-form-mapa").addEventListener("click", (event)=>{

    if(event.target.classList == "modal-form-mapa"){

        event.target.style.display = "none"

        document.getElementById("cancelar-popup-caixa-mapa").style.top = "-50000000%"

       localStorage.setItem("nova-caix", 0)

    }

}) 


document.querySelectorAll(".modal-form-mapa").forEach((i)=>{
    
   i.addEventListener("click", (event)=>{
       
       
       if(event.target.classList == "modal-form-mapa"){
           
           event.target.style.display = "none"

          document.getElementById("cancelar-popup-caixa-mapa").style.top = "-50000000%"

       localStorage.setItem("nova-caix", 0)
           
       }
       
   })
    
})


document.getElementById("btn_salvar_caixa_mapa").addEventListener("click", ()=>{



  document.querySelector("#form-caixa-mapa").style.display = "none"



  /*document.querySelector(".container-modal-cabo-mapa").style.height = "100px"

  document.querySelector(".titulo-form-cabo-mapa").style.display = "none"

  document.querySelector(".salvar-cabo-sucesso").style.display = "block"

  document.querySelector("#main-form-cabo-mapa").style.display = "none"*/

})


/* document.querySelector(".salvar-cabo-sucesso").addEventListener("click", ()=>{

 window.location.reload()
})*/


document.querySelector(".leaflet-draw-draw-circle").addEventListener("click", ()=>{

  openModalCaixaMapa()

})









/*------------------/Caixa Mapa----------*/


/*------------------Edit Caixa Mapa----------*/


function openEditModalCaixaMapa(){ 

document.querySelector("#edit_form-caixa-mapa").style.display = "block"

}

function closeEditModalCaixaMapa(){

document.getElementById("edit_form-caixa-mapa").style.display = "none"

}

document.querySelector(".modal-form-mapa").addEventListener("click", (event)=>{

    if(event.target.classList == "modal-form-mapa"){

       event.target.style.display = "none"

    }

}) 

/* document.getElementById("edit_btn_salvar_caixa_mapa").addEventListener("click", ()=>{


})


/* document.querySelector(".salvar-cabo-sucesso").addEventListener("click", ()=>{

 window.location.reload()
})*/









/*------------------/Edit Caixa Mapa----------*/





</script>