<?php
@session_start();
include "../includes/config.php";

// Tab Pessoas
@$NomeRazaoSocial = addslashes(strip_tags($_POST['nomeRazaoSocial']));

// Tab emails
@$Email = addslashes(strip_tags($_POST['email']));

// Tab pessoa física ou pessoa jurídica
$tipoUsuario = addslashes(strip_tags($_POST['tipoUsuario']));
@$cpfcnpj = addslashes(strip_tags($_POST['cpfcnpj']));

// tab usuarios
$NomeExibicao = addslashes(strip_tags($_POST['NomeExibicao']));
$SenhaLogin = addslashes(strip_tags(password_hash($_POST['SenhaLogin'], PASSWORD_DEFAULT)));
//echo "<br>";
$confirmacao = addslashes(strip_tags(password_hash($_POST['RepeteSenha'], PASSWORD_DEFAULT)));

//validações
if(empty($Email)){

  $erro="<p>O campo email é obrigatório!</p>";

  }

if(strlen($SenhaLogin)<6){

  $erro.="<p>A senha deve conter no mínimo 6 caracteres!</p>";

  }

if($_POST['SenhaLogin']!=$_POST['RepeteSenha']){

  $erro.="<p>As senhas devem ser iguais!</p>";

  }

if(!empty($erro)){

  echo "<div class='alert alert-danger'> $erro </div>";

  }

  else{

include conexao;

if ($tipoUsuario == "pf") {
	$tipo = "CPF";
}
if($tipoUsuario == "pj") {
	$tipo = "CNPJ";
}

$gravaPessoas = "INSERT INTO pessoas (NomeRazaoSocial,TipoPessoa) VALUES('$NomeRazaoSocial','$tipo')";

$executaGravaPessoas = $mysqli->query($gravaPessoas);

$erro = $mysqli->errno;

if($erro == 1062){

  echo "<p class='alert alert-danger'>E-mail já existente! Utilize outro.</p>";

  exit();

  }
	$_SESSION['idPessoa'] = $mysqli->insert_id;
	$idPessoa = $_SESSION['idPessoa'];

	if ($tipo == "CPF") {
		$gravaPF = "INSERT INTO pessoafisica (idPessoa,CPF) VALUES('$idPessoa','$cpfcnpj')";

		$executaGravaPF = $mysqli->query($gravaPF);

		$erro = $mysqli->errno;
	}
	else {
		$gravaPJ = "INSERT INTO pessoajuridica (idPessoa,CNPJ) VALUES('$idPessoa','$cpfcnpj')";

		$executaGravaPJ = $mysqli->query($gravaPJ);

		$erro = $mysqli->errno;
	}

	$gravaEmail = "INSERT INTO emails (idPessoa, Email, TipoEmail) VALUES('$idPessoa','$Email', 'Login')";

	$executaGravaEmail = $mysqli->query($gravaEmail);

	$erro = $mysqli->errno;

	if ($tipoUsuario =="pj") {
		$tipoConta = "Organização";
	}
	else {
		$tipoConta = "Cliente";
	}

	$gravaUsuario = "INSERT INTO usuarios (idPessoa, Senha, TipoUsuario, DataTermos, CodAtivacao, DataAtivacao, NomeExibicao) VALUES('$idPessoa','$SenhaLogin', '$tipoConta',CURRENT_TIMESTAMP,NULL,NULL,'$NomeExibicao')";

	$executaGravaUsuario = $mysqli->query($gravaUsuario);

	$erro = $mysqli->errno;

$idUsuario = $mysqli->insert_id;

$_SESSION['idUsuario'] = $idUsuario;

$multiplicaId = $idUsuario*3.14;

$CodAtivacao = md5("$multiplicaId.$Email");

$grava_id = $mysqli->query("UPDATE usuarios SET CodAtivacao='$CodAtivacao' WHERE idUsuario=$idUsuario");

  }

  $mensagem="<div style='background-color:#8A2BE2; text-align:center; font-family:arial; color:#fff;' width:500px; height:500px; padding:10px;><h1>Cadastro realizado com sucesso!</h1>

<img src='https://www.mostrapreco.com.br/imagens/mostrapreco/logo-nome.png'>

<h3>Estamos quase acabando, clique no botão ou copie e cole o link de ativação no seu navegador</h3>

<p>https://www.mostrapreco.com.br/ativaConta.php?CodAtivacao=$CodAtivacao</p>

<p> <a  class='btn btn-primary' href='https://www.mostrapreco.com.br/ativaConta.php?CodAtivacao=$CodAtivacao'> <button style='background-color:#E9E339; height:40px; width:200px; border-radius:3px; margin:20px; color:#666;'>Ativar Conta</button> </a> </p></div>";

include funcoesPhp;

envia_email($Email,'Ativação de conta Mostra Preco',$mensagem, $NomeExibicao);

logs('Se cadastrou');

session_destroy();

header("location:../login.php?msg=<p class='alert alert-info'>Conta criada com sucesso, ative-a clicando no link enviado para o seu email.</p>");

?>

<!-- $var=file_get_contents('');

echo $var; -->
