<?php
@session_start();
include "../includes/config.php";
include conexao;
$idPessoa = $_SESSION['idPessoa'];

if ($_SESSION['TipoUsuario']=='Adm' or $_SESSION['TipoUsuario']=='Organização' ) {

$idLoja = addslashes(strip_tags($_POST['idLoja']));
$EmailContato = addslashes(strip_tags($_POST['EmailContato']));
$Facebook = addslashes(strip_tags($_POST['Facebook']));
$Twitter = addslashes(strip_tags($_POST['Twitter']));
$Instagram = addslashes(strip_tags($_POST['Instagram']));
$Linkedin = addslashes(strip_tags($_POST['Linkedin']));
$Youtube = addslashes(strip_tags($_POST['Youtube']));

$query = "INSERT INTO redessociais (Facebook, Twitter, Instagram, Linkedin, Youtube, idLoja, EmailContato) VALUES ('$Facebook', '$Twitter', '$Instagram', '$Linkedin', '$Youtube', $idLoja, '$EmailContato')";

$executa = $mysqli->query($query);

echo $erro = $mysqli->error;

if (empty($erro)) {
  include funcoesPhp ;

  logs('Cadastrou links de redes sociais');

  header("location:../painelAdministrativo.php");
}

}
else{
    $var = "<script>javascript:history.back(-2)</script>";
    echo $var;
}

 ?>
