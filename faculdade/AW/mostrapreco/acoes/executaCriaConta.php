<?php

include "conexao.php";

@$nomeUsuario = addslashes(strip_tags($_POST['nomeUsuario']));
@$email = addslashes(strip_tags($_POST['email']));
@$senha = addslashes(strip_tags(md5($_POST['senha']));
@$dataHoraAceitouTermos = addslashes(strip_tags($_POST['dataHoraAceitouTermos']));
@$cpfcnpj = addslashes(strip_tags($_POST['cpfcnpj']));
@$tipoUsuario = addslashes(strip_tags($_POST['tipoUsuario']));


$query= "INSERT INTO usuarios (nomeUsuario,email,senha,dataHoraAceitouTermos,cpfcnpj,tipoUsuario) VALUES('$nomeUsuario','$email','$senha','$dataHoraAceitouTermos','$cpfcnpj','$tipoUsuario')";

$executaQuery=$mysqli->query($query);

$erro = $mysqli->error;

echo $erro;

$numeroErro = $mysqli->errno;

	if($numeroErro==0){


			header("location:login.php?msg=<div class='alert alert-info'>Sua conta foi criada, Ative-a clicando no link enviado para o seu endereço de email</div>&mostrarLink=true");


	}
	elseif($numeroErro==1062){
		header("location:registrar.php?msg=<div class='alert alert-warning'>Já existe um usuário cadastrado com esse email! </div>");
				}
				else{
					header("location:registrar.php?msg=<div class='alert alert-Danger'>Infelizmente houve um erro, tente novamente mais tarde</div>");
				}

?>
