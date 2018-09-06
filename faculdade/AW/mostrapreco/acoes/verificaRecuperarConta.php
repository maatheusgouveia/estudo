<?php

$valor = $_POST['valor'];

include "../includes/config.php";
include conexao;

$sql = "SELECT Email FROM emails WHERE Email = '$valor' and TipoEmail = 'Login' ";

$executa_sql = $mysqli->query($sql);

$retorno = $executa_sql->num_rows;

	if ($retorno==1) {
		echo "<span class='alert-success'>Conta encontrada!</span>";
	}

	else{
		echo "<span class='alert-danger'>Esta conta não existe!</span>";
	}
 ?>
