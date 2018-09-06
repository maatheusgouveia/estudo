<?php

@session_start();

if ($_SESSION['TipoUsuario'] == 'Adm') {
include "../includes/config.php";
include conexao;

$idProduto = base64_decode($_GET['idProduto']);
$query = "DELETE FROM produtos WHERE idProduto = $idProduto";
$executa =$mysqli->query($query);
$erro = $mysqli->error;

if (empty($erro)) {
require_once funcoesPhp;

logs("Excluiu um Produto");

$var = "<script>javascript:history.back(-2)</script>";
echo $var;
}
else{
	echo $erro;
}

}

 ?>
