<?php
@session_start();
require_once "config.php";
require_once conexao;
$pagina = $_SESSION['pagina'];
$TipoUsuario = $_SESSION['TipoUsuario'];


$sqlPermissao = "SELECT NomePagina FROM `permissoes`
INNER JOIN paineladministrativo ON permissoes.idPagina = paineladministrativo.idPagina
WHERE NomePagina = '$pagina' AND UsuarioPermissao = '$TipoUsuario'";

$executaSqlPermissao = $mysqli->query($sqlPermissao);


$resultadoPermissao = $executaSqlPermissao->num_rows;

if ($resultadoPermissao == 0) {
  $_SESSION['pagina'] = 'perfil.php';
  $var = "<script>javascript:history.back(-2)</script>";
  echo $var;
}

 ?>
