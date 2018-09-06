<?php

@session_start();

include "../includes/config.php";
include conexao;

$idPessoa = $_SESSION['idPessoa'];

$idProdutoLista = base64_decode($_GET['idProdutoLista']);

$query = "DELETE FROM produtoslista WHERE idProdutoLista = $idProdutoLista";

$executa =$mysqli->query($query);

$erro = $mysqli->error;

if (empty($erro)) {
$var = "<script>javascript:history.back(-2)</script>";
echo $var;
}
else{
	echo $erro;
}

 ?>
