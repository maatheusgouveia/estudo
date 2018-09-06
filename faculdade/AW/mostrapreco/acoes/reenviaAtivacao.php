<?php 
session_start();

include '../includes/config.php';

include funcoesPhp;

include conexao;

$CodAtivacao = $_SESSION['CodAtivacao'];

$Email = $_SESSION['Email'];

$query="SELECT NomeExibicao from usuarios WHERE CodAtivacao ='$CodAtivacao'";

$executa = $mysqli->query($query);

$dados= $executa->fetch_assoc();

$mensagem="<div style='background-color:#8A2BE2; text-align:center; font-family:arial; color:#fff;' width:500px; height:500px; padding:10px;><h1>Cadastro realizado com sucesso!</h1>

<img src='www.mostrapreco.com.br/image/logo-nome.png'>

<h3>Estamos quase acabando, clique no botão ou copie e cole o link de ativação no seu navegador</h3>

<p>www.mostrapreco.com.br/ativaConta.php?CodAtivacao=$CodAtivacao</p>

<p> <a  class='btn btn-primary' href='www.mostrapreco.com.br/ativaConta.php?CodAtivacao=$CodAtivacao'> <button style='background-color:#E9E339; height:40px; width:200px; border-radius:3px; margin:20px; color:#666;'>Ativar Conta</button> </a> </p></div>";


envia_email($Email,'Ativação de conta Mostra Preco', $mensagem, $dados['NomeExibicao']);

header("location:../login.php?msg=<p class='alert alert-info'>Reenviamos o email de confirmação, se for necessário procure na caixa de spam</p>");

 ?>