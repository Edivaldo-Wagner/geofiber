 <!-----------------FORM CAIXA MAPA---------->

 <div class="modal-form-mapa-cabo-nivel-1" id="form-cabo-drop" style="display:bloc">
    
    <div class="container-modal container-modal-cabo-mapa" id="container-caixa-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b id="titulo-cabo-form" style="position: relative; top: -17px;">Novo Cabo Drop</b></div>
        
       
        
        
        

        <div id="main-form-cabo-mapa">
            
          <div id="msg-sem-opcao-cabo-drop" style='margin-top:60px; color:#808080; text-align:center; font-size:22px; display:none'>
              
              Seleccione uma Opção para o Cabo Drop<a href="cabos-nivel-2.php" style="text-decoration:underline; color:#413a91">Aqui!!</a>
              
          </div>

        <div class="modal-body" id="mini-container-form-cabo-drop">

       <input type='hidden' name='id_cabo_drop' id="id_cabo_drop"> 
       
          <input type="hidden" id="selected_cabo_drop">

                     
      <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' name='nome' id='nome_cabo_drop' required readonly=true style='cursor:default'>
      </div>

      <div class='form-group'>
        <label>Cor</label>
        <input type='color' class='form-control' name='cor' id='cor_cabo_drop' required disabled=true style='cursor:default'>
      </div>
    

     <div class='form-group'>
        <label>Observação</label>
        
        <textarea class='form-control' name='observacao' id='observacao_cabo_drop' readonly=true style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' name='escala_caixa' id='escala_cabo_drop' readonly=true style='cursor:default'>
            
            
        
        </select>
      </div>


    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" onclick="closeModalCaboDropMapa()" data-dismiss="modal">Fechar</button>
      <button type="submit" id="btn_salvar_cabo_drop_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>
 

    </div> <!---.container-modal--->

</div> <!--.modal-->

<!-----------------/FORM CAIXA MAPA---------->

<!-----------------EDIT FORM CAIXA MAPA---------->

<div class="modal-form-mapa" id="edit-form-cabo-drop">
    
    <div class="container-modal container-modal-cabo-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b id="edit-titulo-caixa-form" style="position: relative; top: -17px;">Editar Cabo Drop</b></div>

        <div id="main-form-cabo-mapa">

                  <div class="modal-body">

        

        <input type='hidden' name='id_cabo_drop' id="edit_id_cabo_drop"> 
       
          <input type="hidden" id="edit_selected_cabo_drop">

                     
      <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' name='nome' id='edit_nome_cabo_drop' required style='cursor:default'>
      </div>

      <div class='form-group'>
        <label>Cor</label>
        <input type='color' class='form-control' name='cor' id='edit_cor_cabo_drop' required style='cursor:default'>
      </div>
    

     <div class='form-group'>
        <label>Observação</label>
        
        <textarea class='form-control' name='observacao' id='edit_observacao_cabo_drop' style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' name='escala_caixa' id='edit_escala_cabo_drop' style='cursor:default'>
            
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
      <button type="button" class="btn btn-danger deletebtn" id="excluir-caixa-mapa" data-dismiss="modal" style="position: fixed; left: 13px;">Excluir Este Cabo</button>
      <button type="button" class="btn btn-secondary" onclick="closeEditModalCaboDropMapa()" data-dismiss="modal">Fechar</button>
      <button type="submit" id="edit_btn_salvar_cabo_drop_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->

</div> <!--.modal-->

<!-----------------/EDIT FORM CAIXA MAPA---------->



<script>

/*------------------Caixa Mapa----------*/
 

function openModalCaboDropMapa(){

document.querySelector("#form-cabo-drop").style.display = "block" 
//asds
} 

function closeModalCaboDropMapa(){

document.querySelector("#form-cabo-drop").style.display = "none" 

}

document.querySelector(".modal-form-mapa-cabo-nivel-1").addEventListener("click", (event)=>{

    if(event.target.classList == "modal-form-mapa-cabo-nivel-1"){

       event.target.style.display = "none"

    }

}) 


document.querySelectorAll(".modal-form-mapa-cabo-nivel-1").forEach((i)=>{
    
   i.addEventListener("click", (event)=>{
       
       
       if(event.target.classList == "modal-form-mapa-cabo-nivel-1"){
           
           event.target.style.display = "none"
           
       }
       
   })
    
})





/* document.querySelector(".salvar-cabo-sucesso").addEventListener("click", ()=>{

 window.location.reload()
})*/












/*------------------/Caixa Mapa----------*/


/*------------------Edit Caixa Mapa----------*/


function openEditModalCaboDropMapa(){ 

document.querySelector("#edit-form-cabo-drop").style.display = "block"

}

function closeEditModalCaboDropMapa(){

document.querySelector("#edit-form-cabo-drop").style.display = "none"

}

document.querySelector(".modal-form-mapa").addEventListener("click", (event)=>{

    if(event.target.classList == "modal-form-mapa"){

        event.target.style.display = "none"

    }

}) 



/*------------------/Edit Caixa Mapa----------*/





</script>