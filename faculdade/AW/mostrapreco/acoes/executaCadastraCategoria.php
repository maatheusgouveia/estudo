<?php
@session_start();



include "../includes/config.php";

include conexao;

echo $idPessoa = $_SESSION['idPessoa'];
echo $_SESSION['TipoUsuario'];

if ($_SESSION['TipoUsuario']=='Adm') {
$NomeCategoria = addslashes(strip_tags($_POST['NomeCategoria']));

echo $query = "INSERT INTO categorias (NomeCategoria) VALUES ('$NomeCategoria')";

$executa = $mysqli->query($query);

echo $erro = $mysqli->error;

if (empty($erro)) {
  include funcoesPhp ;

  logs('Cadastrou uma categoria');

  header("location:../painelAdministrativo.php");
}

}
else{
    $var = "<script>javascript:history.back(-2)</script>";
    echo $var;
}

 ?>
