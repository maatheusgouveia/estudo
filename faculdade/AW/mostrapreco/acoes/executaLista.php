<?php

@session_start();

if ($_SESSION['TipoUsuario'] == "Adm" or $_SESSION['TipoUsuario'] == "Cliente") {

include "../includes/config.php";

include conexao;

$idPessoa = $_SESSION['idPessoa'];

$NomeLista = $_POST['NomeLista'];

$query = "INSERT INTO `listascompra` (`NomeLista`, `idPessoa`) VALUES ('$NomeLista', '$idPessoa');";

$executa = $mysqli->query($query);

$erro = $mysqli->error;

if (empty($erro)) {
	$var = "<script>javascript:history.back(-2)</script>";
echo $var;
}
else{
	echo $erro;
}

} //fim if TipoUsuario

else{
	$var = "<script>javascript:history.back(-2)</script>";
echo $var;
}

 ?>
