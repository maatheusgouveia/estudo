<?php

$CodAtivacao = addslashes(strip_tags($_GET['CodAtivacao']));

include "includes/config.php";

include conexao;

include funcoesPhp;

 $verifica_codigo = "SELECT * FROM usuarios WHERE CodAtivacao = '$CodAtivacao'";

//executa a query no banco
$executa_verifica = $mysqli->query($verifica_codigo);

//retorna o nº de linhas da consulta
$retorno_verifica = $executa_verifica->num_rows;

if($retorno_verifica == 1){

  $dados_verifica = $executa_verifica->fetch_assoc();

  $ativa_conta = $mysqli->query("UPDATE usuarios SET `CodAtivacao` = '', `DataAtivacao` = CURRENT_TIMESTAMP WHERE idUsuario = ".$dados_verifica['idUsuario']);

  logs('Ativou a conta');

  header("location:login.php?msg=<h3 class='alert alert-success'>Conta ativada com sucesso!!!</h3>");

  }

  else{

    header("location:login.php?msg=<h3 class='alert alert-danger'>A conta já foi ativada ou o código é inválido</h3>");

    }

?>
