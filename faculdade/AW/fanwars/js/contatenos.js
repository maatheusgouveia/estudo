//Danilo dos santos carreiro
const BASE_URL='https://danilocarreiro.com.br/projetos/fanwars/';
$(document).ready(function() {
	$load = '<img src="'+BASE_URL+'imagens/load.gif" alt="" width="50" height="50">';
	$('#sendEmail').submit(function(event) {
           $.ajax({
                   url:'includes/sendEmail.php',
                   type:'POST',
                   data:$(this).serialize(),
                   success:function(data)
                   { 
                   	$('#load').html('');
                   	$('.clean').text('');
                    $('#resposta').html('');

                   	$array = $.parseJSON(data);

                   	if($array.success != undefined)
                   	{
                        $('#resposta').append('<div class="alert alert-success alert-dismissible fade show" role="alert">'+$array.success+'</div>');
                        $('#nome').val('');
                        $('#assunto').val('');
                        $('#email').val('');
                        $('#mensagem').val('');
                   	}

                   	if($array.erro != undefined)
                   	{
                   
                        $('.nome').text($array.erro.nome);
                        $('.assunto').text($array.erro.assunto);
                        $('.email').text($array.erro.email);
                        $('.mensagem').text($array.erro.mensagem);
                        return;
                   	}

                   	if($array.error != undefined)
                   	{
                     $('#resposta').append('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+$array.error+'</div>')
                     return;
                   	}
                      
                   },
                   beforeSend:function(){
                   	$('#load').html($load);
                   },
               });//fim ajax
               return false;
	});
});