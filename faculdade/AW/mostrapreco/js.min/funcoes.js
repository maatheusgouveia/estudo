function carregando(retorno){var div="#"+retorno;$(div).html("<img src='imagens/load.gif'>")}
function enviaDados(dados,arquivosRecebe,retorno){var url=arquivosRecebe+'.php';$.ajax({url:url,type:'POST',data:{valor:dados},beforeSend:carregando(retorno),success:function(data){$("#"+retorno).html(data)}})}
function mostraSenha(idBtn,idCampo){var campo=document.getElementById(idCampo);if(campo.type==="password"){campo.type="text";document.getElementById(idBtn).innerHTML="<i class='fas fa-eye-slash'></i>"}else{campo.type="password";document.getElementById(idBtn).innerHTML="<i class='fas fa-eye'></i>"}}