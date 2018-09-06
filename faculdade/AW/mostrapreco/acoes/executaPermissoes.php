<?php
@session_start();

include "../includes/config.php";

include conexao;

echo $idPessoa = $_SESSION['idPessoa'];
echo $_SESSION['TipoUsuario'];

if ($_SESSION['TipoUsuario']=='Adm') {
$UsuarioPermissao = addslashes(strip_tags($_POST['UsuarioPermissao']));
$idPagina = addslashes(strip_tags($_POST['idPagina']));

echo $query = "INSERT INTO permissoes (UsuarioPermissao, idPagina) VALUES ('$UsuarioPermissao', '$idPagina')";

$executa = $mysqli->query($query);

echo $erro = $mysqli->error;

if (empty($erro)) {
  include funcoesPhp ;

  logs('Criou uma Permissão de '.$UsuarioPermissao);

  header("location:../painelAdministrativo.php");
}

}
else{
  $var = "<script>javascript:history.back(-2)</script>";
  echo $var;
}

 ?>
