<!-----------------FORM POSTE MAPA---------->

<div class="modal-form-mapa" id="form-concentrador-mapa" style="dispay:block">
    
    <div class="container-modal container-modal-cabo-mapa" id="container-poste-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b style="position: relative; top: -17px;">Novo Concentrador</b></div>
        
       
        <!---<input type="hiden" id="id_concentrador">--->
        
        

        <div id="main-form-cabo-mapa">

        <div id="msg-sem-opcao-poste" style='margin-top:60px; color:#808080; text-align:center; font-size:22px; display:none'>
             
             Seleccione uma Opção para o Concentrador <a href="poste.php" style="text-decoration:underline; color:#413a91">Aqui!!</a>
             
         </div>

        <div class="modal-body" id="mini-container-form-poste">

        <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' id="nome_concentrador" readonly=true required>
      </div>

      <p> 
       <div class="form-group">
        <label>Status de implementação</label>
        <select class="form-control" id="status_implementacao_concentrador" required readonly=true style='cursor:default'>
            
            
        </select>
        
      </div>
    </p>
     
     <div class="form-group">
        <label>Observação</label>
        
        <textarea class="form-control" id="observacao_concentrador" placeholder="Observação" required readonly=true style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' id='escala_concentrador' required readonly=true style='cursor:default'>
            
            
        
        </select>
      </div>
    

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" onclick="closeModalConcentradorMapa()" data-dismiss="modal">Fechar</button>
      <button type="submit" id="btn_salvar_concentrador_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->

</div> <!--.modal-->

<!-----------------/FORM POSTE MAPA---------->







 


<div class="modal-form-mapa" id="edit-form-concentrador-mapa">
    
    <div class="container-modal container-modal-cabo-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b style="position: relative; top: -17px;">Editar Concentrador</b></div>
        
       
       <input type='hidden'  id="edit_uniquid_concentrador"> 

       <input type='hidden'  id="edit_latlng_concentrador" style="width: 480px;"> 
        
         

        <div id="main-form-cabo-mapa">

        <div class="modal-body">

       <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' id="edit_nome_concentrador" required>
      </div>

      <p> 
       <div class="form-group">
        <label>Status de implementação</label>
        <select class="form-control" id="edit_status_implementacao_concentrador" required style='cursor:default'>
            
            <option>Implantada</option>
            
            <option>Não implantada</option>
            
        </select>
        
      </div>
    </p>
     
     <div class="form-group">
        <label>Observação</label>
        
        <textarea class="form-control" id="edit_observacao_concentrador" style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' id='edit_escala_concentrador' required style='cursor:default'>
            
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
        <button type="button" class="btn btn-danger deletebtn" id="excluir-poste-mapa" data-dismiss="modal" style="position: fixed; left: 13px;">Excluir Este Concentrador</button>
      <button type="button" class="btn btn-secondary" onclick="closeEditModalConcentradorMapa()" data-dismiss="modal">Fechar</button>
      <button type="submit" id="edit_btn_salvar_concentrador_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->

</div> <!--.modal-->

<!-----------------/FORM POSTE MAPA---------->













<script>


    function closeModalConcentradorMapa(){

 document.querySelector("#form-concentrador-mapa").style.display = "none"

 document.getElementById("cancelar-popup-concentrador-mapa").style.top = "-50000000%" 

            localStorage.setItem("novo-concentrador", 0)


}

document.getElementById("btn_salvar_poste_mapa").addEventListener("click", ()=>{



document.querySelector("#form-poste-mapa").style.display = "none"


})

function openEditModalConcentradorMapa(){

  document.querySelector("#edit-form-concentrador-mapa").style.display = "block"

} 

function closeEditModalConcentradorMapa(){

 document.querySelector("#edit-form-concentrador-mapa").style.display = "none"

}


document.querySelectorAll(".modal-form-mapa").forEach((i)=>{
    
    i.addEventListener("click", (event)=>{
        
        
        if(event.target.classList == "modal-form-mapa"){
            
            event.target.style.display = "none"

            document.getElementById("cancelar-popup-concentrador-mapa").style.top = "-50000000%" 

            localStorage.setItem("novo-concentrador", 0)

            
        }
        
    })
     
 })

</script>