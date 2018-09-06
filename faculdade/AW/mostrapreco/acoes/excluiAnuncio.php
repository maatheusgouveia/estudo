<?php
session_start();
// echo $_SESSION['TipoUsuario'];
if ($_SESSION['TipoUsuario'] =="Organização") {

  include "../includes/config.php";
  include funcoesPhp;
  include conexao;
  $idAnuncio = base64_decode($_GET['idAnuncio']);
  echo $query = "DELETE FROM anuncios WHERE anuncios.idAnuncio = $idAnuncio";
  $executa = $mysqli->query($query);

  $erro = $mysqli->error;

  if (empty($erro)) {
    logs('Excluiu uma anuncio');
    header("location:../painelAdministrativo.php");
  }


}
 ?>
