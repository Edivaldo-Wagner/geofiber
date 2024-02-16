<!-----------------FORM POSTE MAPA---------->

<div class="modal-form-mapa" id="form-poste-mapa">
    
    <div class="container-modal container-modal-cabo-mapa" id="container-poste-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b style="position: relative; top: -17px;">Novo Poste</b></div>
        
       
        
        
        

        <div id="main-form-cabo-mapa">

        <div id="msg-sem-opcao-poste" style='margin-top:60px; color:#808080; text-align:center; font-size:22px; display:none'>
             
             Seleccione uma Opção para o Poste <a href="poste.php" style="text-decoration:underline; color:#413a91">Aqui!!</a>
             
         </div>

        <div class="modal-body" id="mini-container-form-poste">

        <input type='hidden' id="id_poste"> 

        <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' id="nome_poste" readonly=true required>
      </div>

      <div class="form-group">
        <label>Tipo de Rede</label>
        <select class="form-control" id="tipo_rede_poste" required readonly=true style='cursor:default'>
            
             
        
        </select>
        
      </div>

      <div class="form-group">
        <label>Escolhe uma cor</label>
        <input type="color" class="form-control" id="cor_poste" name="cor" required disabled=true style='cursor:default'>
      </div>
      <p> 
       <div class="form-group">
        <label>Status de implementação</label>
        <select class="form-control" id="status_implementacao_poste" required readonly=true style='cursor:default'>
            
            
        </select>
        
      </div>
    </p>
     <p> 
       <div class="form-group">
        <label>Status de licenciamento</label>
        <select class="form-control" id="status_licenciamento_poste" required readonly=true style='cursor:default'>
            
        
        </select>
        
      </div>
    </p>
     <div class="form-group">
        <label>Observação</label>
        
        <textarea class="form-control" id="observacao_poste" placeholder="Observação" required readonly=true style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' id='escala_poste' required readonly=true style='cursor:default'>
            
            
        
        </select>
      </div>
    

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" onclick="closeModalCaixaMapa()" data-dismiss="modal">Fechar</button>
      <button type="submit" id="btn_salvar_poste_mapa" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->

</div> <!--.modal-->

<!-----------------/FORM POSTE MAPA---------->







 


<div class="modal-form-mapa" id="edit_form-poste-mapa">
    
    <div class="container-modal container-modal-cabo-mapa" style="overflow-y: scroll;">
      
        <div id="titulo-container-modal" class="titulo-form-cabo-mapa"><b style="position: relative; top: -17px;">Editar Poste</b></div>
        
       
        
        
        

        <div id="main-form-cabo-mapa">

        <div class="modal-body">

        <input type='hiden' id="edit_uniquid_poste"> 

       

        <div class='form-group'>
        <label>Nome</label>
        <input type='text' class='form-control' id="edit_nome_poste"  required>
      </div>

      <div class="form-group">
        <label>Tipo de Rede</label>
        <select class="form-control" id="edit_tipo_rede_poste" required style='cursor:default'>
            
        <option>Alta</option>
            
            <option>Baixa</option>
        
        </select>
        
      </div>

      <div class="form-group">
        <label>Escolhe uma cor</label>
        <input type="color" class="form-control" id="edit_cor_poste" name="cor" required style='cursor:default'>
      </div>
      <p> 
       <div class="form-group">
        <label>Status de implementação</label>
        <select class="form-control" id="edit_status_implementacao_poste" required style='cursor:default'>
            
        <option>Implantado</option>
            
            <option>Não implantado</option>
            
        </select>
        
      </div>
    </p>
     <p> 
       <div class="form-group">
        <label>Status de licenciamento</label>
        <select class="form-control" id="edit_status_licenciamento_poste" required style='cursor:default'>
            
            <option>Licenciado</option>
            
            <option>Não licenciado</option>
        
        </select>
        
      </div>
    </p>

     <div class='form-group'>
        <label>Latitude e Longitude</label>
        
        <textarea class='form-control' name='latitude' id='edit_latitude_poste' readonly=true style='cursor:default'></textarea>
      </div>
    
     <div class="form-group">
        <label>Observação</label>
        
        <textarea class="form-control" id="edit_observacao_poste" required style='cursor:default'></textarea>
      </div>
      
      <div class='form-group'>
        <label>Escala</label>
        <select class='form-control' id='edit_escala_poste' required style='cursor:default'>
            
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
        <button type="button" class="btn btn-danger deletebtn" id="excluir-poste-mapa" data-dismiss="modal" style="position: fixed; left: 13px;">Excluir Este Poste</button>
      <button type="button" class="btn btn-secondary" onclick="closeEditModalPosteMapa()" data-dismiss="modal">Fechar</button>
      <button type="submit" id="edit_btn_salvar_poste_mapa" onclick="closeEditModalPosteMapa()" class="btn btn-primary">Salvar</button>
    </div>
     </div>
  </div>


    </div> <!---.container-modal--->

</div> <!--.modal-->

<!-----------------/FORM POSTE MAPA---------->













<script>

document.getElementById("btn_salvar_poste_mapa").addEventListener("click", ()=>{



document.querySelector("#form-poste-mapa").style.display = "none"


})

function openEditModalPosteMapa(){

  document.querySelector("#edit_form-poste-mapa").style.display = "block"

} 

function closeEditModalPosteMapa(){

document.querySelector("#edit_form-poste-mapa").style.display = "none"

}

document.querySelector(".modal-form-mapa").addEventListener("click", (event)=>{

    if(event.target.classList == "modal-form-mapa"){

        event.target.style.display = "none"

    }

}) 

document.querySelectorAll(".modal-form-mapa").forEach((i)=>{
    
    i.addEventListener("click", (event)=>{
        
        
        if(event.target.classList == "modal-form-mapa"){
            
            event.target.style.display = "none"
            
        }
        
    })
     
 })

</script>