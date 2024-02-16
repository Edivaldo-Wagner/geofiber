 <!-----------------FORM CAIXA MAPA---------->

 <div class="modal-form-mapa-cabo-nivel-1" id="form-cabo-nivel-1" style="display:bloc">
    
    <div class="container-modal container-modal-cabo-mapa" id="container-caixa-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b id="titulo-cabo-form" style="position: relative; top: -17px;">Novo Cabo Nível 1</b></div>
        
       
        
        
        

        <div id="main-form-cabo-mapa">
            
          <div id="msg-sem-opcao-cabo-nivel-1" style='margin-top:60px; color:#808080; text-align:center; font-size:22px; display:none'>
              
              Seleccione uma Opção para o Cabo Nível 1<a href="cabos-nivel-1.php" style="text-decoration:underline; color:#413a91">Aqui!!</a>
              
          </div>

        <div class="modal-body" id="mini-container-form-cabo-nivel-1">

       <input type='hiden' name='id_cabo_nivel_1' id="id_cabo_nivel_1"> 
       
          <input type="hiden" id="selected_cabo_nivel_1">

                     
      <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' name='nome' id='nome_cabo_nivel_1' required readonly=true style='cursor:default'>
      </div>

      <div class='form-group'>
        <label>Quantidade de fibras</label>
        <select class='form-control' name='quantidade_fibras' id='quantidade_fibras_cabo_nivel_1' required readonly=true style='cursor:default'>
            
           

          

        </select>
      </div>
     <div class='form-group'>
        <label>Quantidade de tubo looses</label>
        <select class='form-control' name='quantidade_tubo_looses' id='quantidade_tubo_looses_cabo_nivel_1' required readonly=true style='cursor:default'>
            
           

          
          
        </select>
      </div>
      <div class='form-group'>
        <label>Cor</label>
        <input type='color' class='form-control' name='cor' id='cor_cabo_nivel_1' required disabled=true style='cursor:default'>
      </div>
      
      <div class='form-group'>
        <label>Alto sustentável do cabo</label>
        <select class='form-control' name='alto_sustentavel_cabo' id='alto_sustentavel_cabo_nivel_1' required readonly=true style='cursor:default'>
            
             
        
        </select>
      </div>

      <div class='form-group'>
        <label>Status de implementação</label>
        <select class='form-control' name='status_implementacao' id='status_implementacao_cabo_nivel_1' required readonly=true style='cursor:default'>
            
             
        
        </select>
      </div>

     <div class='form-group'>
        <label>Observação</label>
        
        <textarea class='form-control' name='observacao' id='observacao_cabo_nivel_1' readonly=true style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' name='escala_caixa' id='escala_cabo_nivel_1' readonly=true style='cursor:default'>
            
            
        
        </select>
      </div>


    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" onclick="closeModalCaboNivel1Mapa()" data-dismiss="modal">Fechar</button>
      <button type="submit" id="btn_salvar_cabo_nivel_1_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>
 

    </div> <!---.container-modal--->

</div> <!--.modal-->

<!-----------------/FORM CAIXA MAPA---------->

<!-----------------EDIT FORM CAIXA MAPA---------->

<div class="edit-modal-form-mapa-cabo-nivel-1 edit" id="edit-form-cabo-nivel-1-mapa">
    
    <div class="container-modal container-modal-cabo-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b id="edit-titulo-caixa-form" style="position: relative; top: -17px;">Editar Cabo Nível 1</b></div>

        <div id="main-form-cabo-mapa">

                  <div class="modal-body">

        

        <input type='hidden'  id="edit_id_cabo_nivel_1"> 
        
        <input type='hidden' id="edit_id_primary_cabo_nivel_1"> 


       
          
                     
      <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' name='nome' id='edit_nome_cabo_nivel_1' required style='cursor:default'>
      </div>

      <div class='form-group'>
        <label>Quantidade de fibras</label>
        <select class='form-control' name='quantidade_fibras' id='edit_quantidade_fibras_cabo_nivel_1' required style='cursor:default'>
            
           
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
        <select class='form-control' name='quantidade_tubo_looses' id='edit_quantidade_tubo_looses_cabo_nivel_1' required style='cursor:default'>
            
           
           <option>1</option>

            <option>2</option>

            <option>4</option>

            <option>6</option>
          
          
        </select>
      </div>
      <div class='form-group'>
        <label>Cor</label>
        <input type='color' class='form-control' name='cor' id='edit_cor_cabo_nivel_1' required style='cursor:default'>
      </div>
      
      <div class='form-group'>
        <label>Alto sustentável do cabo</label>
        <select class='form-control' name='alto_sustentavel_cabo' id='edit_alto_sustentavel_cabo_nivel_1' required style='cursor:default'>
            
              <option>Asu 80</option>

            <option>Asu 120</option>
        
        </select>
      </div>

      <div class='form-group'>
        <label>Status de implementação</label>
        <select class='form-control' name='status_implementacao' id='edit_status_implementacao_cabo_nivel_1' required style='cursor:default'>
            
              <option>Implantado</option>

            <option>Não implantado</option>
        
        </select>
      </div>

     <div class='form-group'>
        <label>Observação</label>
        
        <textarea class='form-control' name='observacao' id='edit_observacao_cabo_nivel_1' style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' name='escala_caixa' id='edit_escala_cabo_nivel_1' style='cursor:default'>
            
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
      <button type="button" class="btn btn-secondary" onclick="closeEditModalCaboNivel1Mapa()" data-dismiss="modal">Fechar</button>
      <button type="submit" id="edit_btn_salvar_cabo_nivel_1_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->

</div> <!--.modal-->

<!-----------------/EDIT FORM CAIXA MAPA---------->



<script>

/*------------------Caixa Mapa----------*/
 

function openModalCaboNivel1Mapa(){

document.querySelector("#form-cabo-nivel-1").style.display = "block" 
//asds
}

function closeModalCaboNivel1Mapa(){

document.querySelector("#form-cabo-nivel-1").style.display = "none" 

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


document.querySelector(".leaflet-draw-draw-polyline").addEventListener("click", ()=>{

  openModalCaboNivel1Mapa()

})









/*------------------/Caixa Mapa----------*/


/*------------------Edit Caixa Mapa----------*/


function openEditModalCaboNivel1Mapa(){ 
 
document.querySelector("#edit-form-cabo-nivel-1-mapa").style.display = "block"

}

function closeEditModalCaboNivel1Mapa(){

document.querySelector("#edit-form-cabo-nivel-1-mapa").style.display = "none" 

}




document.querySelector(".edit-modal-form-mapa-cabo-nivel-1").addEventListener("click", (event)=>{

    if(event.target.classList == "edit-modal-form-mapa-cabo-nivel-1"){



        event.target.style.display = "none"

    }

}) 



/*------------------/Edit Caixa Mapa----------*/





</script>