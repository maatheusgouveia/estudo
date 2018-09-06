<?php
session_start();
// echo $_SESSION['TipoUsuario'];
if ($_SESSION['TipoUsuario'] =="Adm") {

  include "../includes/config.php";
  include conexao;
  $idMarca = $_GET['idMarca'];
  echo $query = "DELETE FROM marcas WHERE marcas.idMarca = $idMarca";
  $executa = $mysqli->query($query);

  $erro = $mysqli->error;

  if (empty($erro)) {
    logs('Excluiu uma marca');
    header("location:../painelAdministrativo.php");
  }


}
 ?>
