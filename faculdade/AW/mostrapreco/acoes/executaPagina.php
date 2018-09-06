<?php
@session_start();

include "../includes/config.php";

include conexao;

echo $idPessoa = $_SESSION['idPessoa'];
echo $_SESSION['TipoUsuario'];

if ($_SESSION['TipoUsuario']=='Adm') {
$nomeExibicaoMenu = addslashes(strip_tags($_POST['NomeExibicaoMenu']));
$NomePagina = addslashes(strip_tags($_POST['NomePagina']));

echo $query = "INSERT INTO paineladministrativo (NomePagina, NomeExibicaoMenu) VALUES ('$NomePagina', '$nomeExibicaoMenu')";

$executa = $mysqli->query($query);

echo $erro = $mysqli->error;

if (empty($erro)) {
  include funcoesPhp ;

  logs('Cadastrou uma Pagina');

  header("location:../painelAdministrativo.php");
}

}
else{
  $var = "<script>javascript:history.back(-2)</script>";
  echo $var;
}

 ?>
