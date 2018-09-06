<?php
session_start();

include "../includes/config.php";

include conexao;

$Email = $_POST['Email'];

$sql = "SELECT * FROM usuarios
INNER JOIN emails ON usuarios.idPessoa = emails.idPessoa
WHERE Email='$Email' AND TipoEmail ='Login'";

$executa = $mysqli->query($sql);

$linhas = $executa->num_rows;

$dados = $executa->fetch_assoc();

$idUsuario = $dados['idUsuario'];

$CodigoSegurança = $_POST['CodigoSegurança'];

$novaSenha =password_hash($_POST['novaSenha'], PASSWORD_DEFAULT);

date_default_timezone_set('America/Sao_Paulo');

  $data = date("d/m/Y");

  $idUsuario = $idUsuario * 42;

 $verificaCodigo = md5($data.$idUsuario);

 // echo $CodigoSegurança."<br>";
 // echo $verificaCodigo."<br>";
 //echo $idUsuario;

if ($CodigoSegurança == $verificaCodigo and $_POST['novaSenha'] == $_POST['repetesenha']) {

    $idUsuario = $dados['idUsuario'];

    echo $query = "UPDATE `usuarios` SET `Senha` = '$novaSenha' WHERE `usuarios`.`idUsuario` = $idUsuario;";

	$executaQuery = $mysqli->query($query);

	$erro = $mysqli->error;

if (empty($erro)) {
	header("location:../login.php?msg=<div class='alert alert-sucess'>Senha alterada com sucesso!</div>");
}

}

else{
	header("location:../redefinirSenha.php?msg=<div class='alert alert-danger'>Código inválido ou expirado!</div>");
}

 ?>
