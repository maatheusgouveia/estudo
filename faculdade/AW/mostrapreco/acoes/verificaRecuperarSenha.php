<?php session_start(); // inicia a sessao

$Email = addslashes(strip_tags($_POST['Email']));

include "../includes/config.php";
include conexao;

$sql = "SELECT * FROM usuarios
INNER JOIN emails ON usuarios.idPessoa = emails.idPessoa
WHERE Email='$Email' AND TipoEmail ='Login'";

$executa = $mysqli->query($sql);

$linhas = $executa->num_rows;

$dados = $executa->fetch_assoc();

if($linhas==1){

  $_SESSION['idUsuario'] = $dados['idUsuario'];

  $idUsuario = $_SESSION['idUsuario'];

  $_SESSION['NomeExibicao'] = $dados['NomeExibicao'];

  $_SESSION['Email'] = $dados['Email'];

  $NomeExibicao = $_SESSION['NomeExibicao'];

  date_default_timezone_set('America/Sao_Paulo');

  $data = date("d/m/Y");

  $idUsuario = $idUsuario * 42;

  echo $CodSeguranca =  md5($data.$idUsuario);

   $mensagem="<div style='background-color:#8A2BE2; text-align:center; font-family:arial; color:#fff;' width:500px; height:500px; padding:10px;><h1>Dados verificados com sucesso!</h1>

<img src='https://www.mostrapreco.com.br/imagens/mostrapreco/logo-nome.png'>

<h3>Código de Segurança: $CodSeguranca </h3>

<h3>Clique no botão ou copie e cole o link no seu navegador</h3>

<p>Este código de segurança é válido apenas para o dia em que foi gerado, se você não o solicitou ignore esta mensagem</p>

<p>https://www.mostrapreco.com.br/redefinirSenha.php?CodSeguranca=$CodSeguranca&Email=$Email</p>

<p> <a  class='btn btn-primary' href='https://www.mostrapreco.com.br/redefinirSenha.php?CodSeguranca=$CodSeguranca&Email=$Email'> <button style='background-color:#E9E339; height:40px; width:200px; border-radius:3px; margin:20px; color:#666;'>Redefinir Senha</button> </a> </p></div>";

include funcoesPhp;

envia_email($Email, 'Redefinição de senha Mostra Preco', $mensagem, $NomeExibicao);

logs('Código de redefinição de senha enviado');

session_destroy();

    header("location:../recuperarSenha.php?msg=<div class='alert alert-success'>Confirmação enviada  por email!</div>");

}

else{

   header("location:../recuperarSenha.php?msg=<div class='alert alert-Danger'>Email incorreto!</div>");

  }

?>
