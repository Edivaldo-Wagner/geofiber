function ds(){

    openEditModalCaixaMapa()
 
 console.log(e.status_implementacao_caixa )

 document.getElementById("edit_id_primary_caixa").value = localStorage.getItem("id_caixa")
 
document.getElementById("edit_id_caixa").value = e.uniqueid
 
document.getElementById("edit_nome_caixa").value = e.nome_caixa

 document.getElementById("edit_splitter_caixa").value = e.splitter_caixa
 
 document.getElementById("edit_tipo_splitter_caixa").value = e.tipo_splitter_caixa 
 
 document.getElementById("edit_cor_caixa").value = e.cor
 
 document.getElementById("edit_status_implementacao_caixa").value = e.status_implementacao_caixa 
 
 document.getElementById("edit_latitude_caixa").value = e._latlng.lat
 
 document.getElementById("edit_longitude_caixa").value = e._latlng.lng
 
 document.getElementById("edit_observacao_caixa").value = e.observacao
 

 



 
document.getElementById("edit_btn_salvar_caixa_mapa").addEventListener("click", ()=>{ 

 const objeto_lat_lng = {
     
     "lat":document.getElementById("edit_latitude_caixa").value,
     
     "lng":document.getElementById("edit_longitude_caixa").value
 } 



/*=--------------------------------------*/


var toJson = {
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

} 



fetch("mapAPI/editar-caixa-mapa.php", {

"method": "POST",

"headers": {

"Content-Type":"application/json"

},


"body":JSON.stringify({

"json": toJson,
  
"id": document.getElementById("edit_id_primary_caixa").value,

"uniqueid": document.getElementById("edit_id_caixa").value,

"latitude_longitude": document.getElementById("edit_latitude_caixa").value + " e " + document.getElementById("edit_longitude_caixa").value, 
  
})

}).then(pDados=>pDados.text()).then(resultado=>{

console.log(resultado);

}).catch(erro=>console.error(erro))

window.location.reload()

return false

})

    


}); /*fim do evento linha*/

}