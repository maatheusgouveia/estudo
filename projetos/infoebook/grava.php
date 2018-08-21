<?php 
$email = @$_POST['email'];
$senha = @$_POST['senha'];
$confirma_senha = @$_POST['confirma_senha'];

//$validacao = array();
$validacao = "";
if(empty($email)){
	$validacao.='O campo e-mail é obrigatório';
	}

if(strlen($senha)<6){
	$validacao.='<br>A senha deve ter no mínimo 6 caracteres';
	}
	
if(($senha)<>$confirma_senha){
	$validacao.='As senhas não conferem';
	}		
	
if(!empty($validacao)){
echo $validacao;
	}	
	
	


?>