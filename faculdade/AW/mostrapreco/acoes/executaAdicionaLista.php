<?php
@session_start();
include "../includes/config.php";
include conexao;

if ($_SESSION['TipoUsuario'] == "Adm" or $_SESSION['TipoUsuario'] == "Cliente") {

$idAnuncio = $_POST['idAnuncio'];

@$idListaCompra = $_POST['idListaCompra'];

if (empty($idListaCompra)) {
	echo "<div class='alert alert-warning'>Crie uma lista para continuar! <a href='index.php'></div>";
}

$Quantidade = $_POST['Quantidade'];

$query = "INSERT INTO `produtoslista`(`idAnuncio`, `idListaCompra`, `Quantidade`) VALUES ('$idAnuncio', '$idListaCompra', '$Quantidade')";

$executa =$mysqli->query($query);

echo $erro = $mysqli->error;

if (empty($erro)) {
	include funcoesPhp ;
	logs('Adicionou um produto à uma lista');
	echo "<div class='alert alert-success'>Produto adicionado! <a href='index.php'>Procurar mais Produtos</a></div>";
}

} //fim if TipoUsuario



 ?>
