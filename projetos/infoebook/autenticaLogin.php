<?php //session_start(); 

include("includes/config.php");
include funcoes;

$email = addslashes($_POST['email']);
$senha = md5($_POST['senha']);

$consulta = "Select * from usuario where email='$email' and senha='$senha' ";

include (conexao);

$executa_consulta = $mysqli->query($consulta);

$linhas = $executa_consulta->num_rows;

if($linhas==1){
	
//armazenar os dados da consulta
$dados = $executa_consulta->fetch_assoc();

if(!empty($dados['cod_ativacao']) && empty($dados['data_ativacao'])){
	//redirecionar com a mensagem sobre a ativação da conta
	header("location:".url."/login.php?msg=Esta conta ainda não foi ativada, acesse seu e-mail e clique no link de ativação!");
	exit();
	}	

$queryPessoa=$mysqli->query("Select idpessoa from pessoa where pessoa_idusuario=".$dados['idusuario']);
$resultadoQueryPessoa=$queryPessoa->num_rows;
	if ($resultadoQueryPessoa>0) {
		$dadosPessoa=$queryPessoa->fetch_assoc();
		$_SESSION['pessoa']=$dadosPessoa['idpessoa'];
	}else{
		$_SESSION['pessoa']=0;
	}

// carregar os dados na sessao	
$_SESSION['idusuario']=$dados['idusuario'];
$_SESSION['email']=$dados['email'];
$_SESSION['tipo_usuario']=$dados['tipo'];
logs('acessou o sistema');

	header("location:".url."/admin");
	
	}else{
	// redirecionar com a mensagem de erro
	header("location:".url."/login.php?msg=Usuário ou senha inválidos!");
		}
?>