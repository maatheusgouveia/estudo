<?php
@session_start();
if (!empty($_SESSION['idPessoa'])) {

include "../includes/config.php";
include conexao;

$idUsuario = $_SESSION['idUsuario'];

$idComentario = base64_decode($_GET['idComentario']);

$NomeLoja = base64_decode($_GET['NomeLoja']);

$query = "INSERT INTO `comentariosdenunciados` (`idComentario`, `DataDenuncia`, `idUsuario`) VALUES ('$idComentario', CURRENT_TIMESTAMP, '$idUsuario')";

$executa=$mysqli->query($query);

$erro = $mysqli->error;

require_once funcoesPhp;

logs("denunciou um comentario no perfil de ".$NomeLoja);

$var = "<script>javascript:history.back(-2)</script>";
echo $var;
}
else {
  $var = "<script>javascript:history.back(-2)</script>";
  $_SESSION['msg'] = "<div class='alert alert-warning'>É necessário fazer <a href='login.php'>login</a> para denunciar um comentário</div>";
  echo $var;
}


 ?>
