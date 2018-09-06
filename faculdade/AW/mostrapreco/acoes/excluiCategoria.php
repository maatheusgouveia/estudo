<?php
session_start();
// echo $_SESSION['TipoUsuario'];
if ($_SESSION['TipoUsuario'] =="Adm") {

  include "../includes/config.php";
  include funcoesPhp;
  include conexao;
  $idCategoria = $_GET['idCategoria'];
  echo $query = "DELETE FROM categorias WHERE categorias.idCategoria = $idCategoria";
  $executa = $mysqli->query($query);

  $erro = $mysqli->error;

  if (empty($erro)) {
    logs('Excluiu uma categoria');
    header("location:../painelAdministrativo.php");
  }


}
 ?>
