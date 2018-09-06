<?php

@session_start();

include "../includes/config.php";

include conexao;

$idPessoa = $_SESSION['idPessoa'];

$idComentario = base64_decode($_GET['idComentario']);

$NomeLoja = base64_decode($_GET['NomeLoja']);

$query = "DELETE FROM comentarios WHERE idComentario = $idComentario AND idPessoa = $idPessoa";

$executa =$mysqli->query($query);

$erro = $mysqli->error;

if (empty($erro)) {
require_once funcoesPhp;

logs("Excluiu um comentario no perfil de ".$NomeLoja);

$var = "<script>javascript:history.back(-2)</script>";
echo $var;
}
else{
	echo $erro;
}

 ?>
