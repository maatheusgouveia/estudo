<?php @session_start(); // inicia a sessao

require_once "../includes/config.php";

$email = addslashes(strip_tags($_POST['email']));
$senhaLogin = addslashes(strip_tags($_POST['senhaLogin']));

include conexao;
$sql = "SELECT * FROM `emails`
INNER JOIN usuarios ON emails.idPessoa=usuarios.idPessoa
INNER JOIN pessoas ON emails.idPessoa=pessoas.idPessoa
WHERE TipoEmail='Login' AND Email='$email'";
$executa = $mysqli->query($sql);
$linhas = $executa->num_rows;

//obter os dados da consulta, criar as sessions e redirecionar o usuario para a index
	$dados = $executa->fetch_assoc();

	if($linhas==1){
		if (password_verify($senhaLogin, $dados['Senha'])) {

				if ($dados['TipoUsuario'] == 'Cliente' or $dados['TipoUsuario'] == 'Adm') {
					$sqlTipo = "SELECT * FROM `pessoafisica`
					WHERE idPessoa = ".$dados['idPessoa']."";
				  $executaTipo = $mysqli->query($sqlTipo);
					$dadosTipo = $executaTipo->fetch_assoc();
				}

				elseif ($dados['TipoUsuario'] == 'Organização') {
					$idPessoa = $dados['idPessoa'];
					$sqlTipo = "SELECT * FROM `pessoajuridica` WHERE idPessoa = $idPessoa";
				  $executaTipo = $mysqli->query($sqlTipo);
					$dadosTipo = $executaTipo->fetch_assoc();
				}


if (empty($dados['CodAtivacao']) and !empty($dados['DataAtivacao'])) {

  $_SESSION['idUsuario'] = $dados['idUsuario'];

	$_SESSION['idPessoa'] = $dados['idPessoa'];

  $_SESSION['NomeExibicao'] = $dados['NomeExibicao'];

	@$_SESSION['cpfcnpj'] = $dadosTipo['CPF'];

	if (empty($dadosTipo['cpfcnpj'])) {
		$_SESSION['cpfcnpj'] = $dadosTipo['CNPJ'];
	}

  $_SESSION['Email'] = $dados['Email'];
  $_SESSION['TipoUsuario'] = $dados['TipoUsuario'];
  @$_SESSION['FotoPerfil'] = $dados['FotoPerfil'];
  $_SESSION['CodAtivacao'] = $dados['CodAtivacao'];
  $_SESSION['DataAtivacao'] = $dados['DataAtivacao'];
	$_SESSION['NomeRazaoSocial'] = $dados['NomeRazaoSocial'];
  require_once funcoesPhp ;
  logs('Entrou');
  header("location:../index.php");
} //fim if verifica conta ativa

else{

	header("location:../login.php?msg=<div class='alert alert-warning'>Ative sua conta para continuar!</div>&reenviaemail=true");

	$_SESSION['Email'] = $dados['Email'];

  $_SESSION['TipoUsuario'] = $dados['TipoUsuario'];

  @$_SESSION['FotoPerfil'] = $dados['FotoPerfil'];

  $_SESSION['CodAtivacao'] = $dados['CodAtivacao'];

  $_SESSION['DataAtivacao'] = $dados['DataAtivacao'];

} //fim else verifica conta ativa

} //fim if senha valida
else{
	if($dados['Senha'] == md5($_POST['senhaLogin'])){
		header("location:../login.php?msg=<div class='alert alert-info'>Fizemos melhorias na segurança de nossas senhas, será necessário <a href='recuperarSenha.php'>redefini-la, clique aqui</a> ou no link esqueci minha senha para executar a redefinição</div>");
	}
	else{

		require_once conexao;
		$sql = "SELECT * FROM `emails`
		INNER JOIN usuarios ON emails.idPessoa=usuarios.idPessoa
		INNER JOIN pessoas ON emails.idPessoa=pessoas.idPessoa
		WHERE TipoEmail='Login' AND Email='$email'";
		$executa = $mysqli->query($sql);
		$linhas = $executa->num_rows;
		$dados = $executa->fetch_assoc();
		$dados['Email'];
		$erro = $mysqli->error;

		if($linhas==1){

			$_SESSION['idUsuario'] = $dados['idUsuario'];
			require_once funcoesPhp ;
			logs('Tentativa de login com senha incorreta no email '.$dados['Email']);
			session_destroy();
	 }

	 header("location:../login.php?msg=<div class='alert alert-Danger'>Email ou Senha incorretos!</div>");

	}
}

} //fim if linhas

?>
