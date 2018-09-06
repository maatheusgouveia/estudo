<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta PHPMailer
require('PHPMailer-master/class.phpmailer.php');
// Conexão com banco de dados MySQL

//$mysqli = new mysqli('mysql.hostinger.com.br','u135429050_mp','Mostrapreco@2018','u135429050_mp');

$mysqli = new mysqli('localhost','root','','u135429050_mp');

mysqli_set_charset($mysqli,'utf8');
// Define busca a ser realizada no MySQL
$query= "SELECT * FROM usuarios
INNER JOIN emails ON usuarios.idPessoa = emails.idPessoa
WHERE emails.TipoEmail = 'Login'";
$resultado = $mysqli->query($query);
while ($linha = $resultado->fetch_assoc()) {
// Seleciona os campos, para cada linha
$nome=$linha['NomeExibicao'];

$Email=$linha['Email']; // Variáveis com assunto e mensagem
$subject = "Atualização de segurança";

  date_default_timezone_set('America/Sao_Paulo');

  $data = date("d/m/Y");

  $idUsuario = $linha['idUsuario'];

  $idUsuario = $idUsuario * 42;

  $CodSeguranca =  md5($data.$idUsuario);

  $mensagem="<div style='background-color:#8A2BE2; text-align:center; font-family:arial; color:#fff;' width:500px; height:500px; padding:10px;><h1>Olá $nome</h1>

<img src='https://www.mostrapreco.com.br/imagens/mostrapreco/logo-nome.png'>

<div style='background-color:#8A2BE2; text-align:center; font-family:arial; color:#fff;' width:500px; height:500px; padding:10px;><h1>Fizemos algumas melhorias de segurança em nosso sistema, por isso pedimos que atualize sua senha para que você fique ainda mais seguro :)</h1>

<h3>Código de Segurança: $CodSeguranca </h3>

<h3>Clique no botão ou copie e cole o link no seu navegador</h3>

<p>Este código de segurança é válido apenas para o dia em que foi gerado $data </p>

<p>Se o código já estiver expirado solicite o reenvio desta mensagem clicando no link <a href='https://mostrapreco.com.br/login.php'>esqueci minha senha</a> na tela de login</p>

<p>https://www.mostrapreco.com.br/redefinirSenha.php?CodSeguranca=$CodSeguranca&Email=$Email</p>

<p> <a  class='btn btn-primary' href='https://www.mostrapreco.com.br/redefinirSenha.php?CodSeguranca=$CodSeguranca&Email=$Email'> <button style='background-color:#E9E339; height:40px; width:200px; border-radius:3px; margin:20px; color:#666;'>Redefinir Senha</button> </a> </p></div>";


$mail=new PHPMailer(); // Define os dados do servidor e tipo de conexão

$mail->SetFrom('contato@mostrapreco.com.br','Mostra Preço');

$mail->AddAddress($Email,$nome);
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
$mail->Subject=$subject;
$mail->Body=$mensagem;

$imprime=$nome." ".$Email."";
//echo $imprime;

if($mail->Send()){// Envia o e-mail
echo 'E-mail enviado com sucesso!';
}else{
echo 'Erro ao enviar e-mail: '.$mail->ErrorInfo;
}
//sleep(10);
}
?>
