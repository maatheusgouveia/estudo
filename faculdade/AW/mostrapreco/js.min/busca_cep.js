$(document).ready(function(){function limpa_formulário_cep(){$("#txtLogradouro").val("");$("#txtBairro").val("");$("#txtCidade").val("");$("#txtEstado").val("")}
$("#txtCep").blur(function(){var cep=$(this).val().replace(/\D/g,'');if(cep!=""){var validacep=/^[0-9]{8}$/;if(validacep.test(cep)){$("#txtLogradouro").val("...");$("#txtBairro").val("...");$("#txtCidade").val("...");$("#txtEstado").val("...");var url="https://viacep.com.br/ws/"+cep+"/json";$.getJSON(url,function(dados){if(!("erro" in dados)){$("#txtLogradouro").val(dados.logradouro);$("#txtBairro").val(dados.bairro);$("#txtCidade").val(dados.localidade);$("#txtEstado").val(dados.uf)}
else{limpa_formulário_cep();alert("CEP não encontrado.")}})}
else{limpa_formulário_cep();alert("Formato de CEP inválido.")}}
else{limpa_formulário_cep()}})})
