<?php
@session_start();

include "../includes/config.php";

include conexao;

echo $idPessoa = $_SESSION['idPessoa'];
echo $_SESSION['TipoUsuario'];

if ($_SESSION['TipoUsuario']=='Adm') {
$idCategoria = addslashes(strip_tags($_POST['idCategoria']));
$NomeSubCategoria = addslashes(strip_tags($_POST['NomeSubCategoria']));

echo $query = "INSERT INTO subcategorias (NomeSubCategoria, subcategorias.idCategoria) VALUES ('$NomeSubCategoria', '$idCategoria')";

$executa = $mysqli->query($query);

echo $erro = $mysqli->error;

if (empty($erro)) {
  include funcoesPhp ;

  logs('Cadastrou uma subcategoria');

  header("location:../painelAdministrativo.php");
}

}
else{
  // $var = "<script>javascript:history.back(-2)</script>";
  // echo $var;
}

 ?>
