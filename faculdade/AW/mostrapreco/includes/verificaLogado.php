<?php

@session_start();

if(empty($_SESSION['idUsuario'])){
	header("location:login.php?msg=<div class='alert alert-warning'>Faça login para continuar!</div>");
	exit();
}

$codAtivacao = $_SESSION['CodAtivacao'];

if (empty($_SESSION['DataAtivacao']) and !empty($_SESSION['CodAtivacao'])) {
	header("location:login.php?msg=<div class='alert alert-warning'>Ative sua conta para continuar!</div>&reenviaemail=true");

}

?>
