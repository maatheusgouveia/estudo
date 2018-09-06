<?php
@session_start();

include "../includes/config.php";

include conexao;

$idPessoa = $_SESSION['idPessoa'];

if ($_SESSION['TipoUsuario']=='Adm') {
$NomeMarca = addslashes(strip_tags($_POST['NomeMarca']));

echo $query = "INSERT INTO marcas (NomeMarca) VALUES ('$NomeMarca')";

$executa = $mysqli->query($query);

echo $erro = $mysqli->error;

if (empty($erro)) {
  include funcoesPhp ;

  logs('Cadastrou uma marca');

  header("location:../painelAdministrativo.php");
}

}
else{
    $var = "<script>javascript:history.back(-2)</script>";
    echo $var;
}

 ?>
