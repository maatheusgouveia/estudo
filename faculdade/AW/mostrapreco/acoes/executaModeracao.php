<?php
@session_start();

if ($_SESSION['TipoUsuario'] == "Adm") {
  $Comentario = $_POST['Comentario'];

  include "../includes/config.php";
  
  include funcoesPhp;

  include conexao;

  echo $query = "INSERT INTO comentariosofensivos (ConteudoOfensivo) VALUES ('$Comentario')";

  $executa = $mysqli->query($query);

  echo $erro = $mysqli->error;
if (empty($erro)) {
  logs('Cadastrou uma palavra imprópria');
  header("location:../painelAdministrativo.php");
}

}

 ?>
