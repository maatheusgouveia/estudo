<?php
@session_start();

include "includes/config.php";
include headers;

$Email = $_SESSION['Email'];
$NomeExibicao = $_SESSION['NomeExibicao'];
$assunto ='Lista de compras - Mostra Preço';
$html=$_POST['html'];

/**
 * This example shows sending a message using PHP's mail() function.
 */
//$assunto = $_POST['assunto'];
//$nomeMensagem = $_POST['nomeMensagem'];
//$emailMensagem = $_POST['emailMensagem'];
//$mensagem = $_POST['mensagem'];
require 'libs/PHPMailer-master/PHPMailerAutoload.php';
//Criar a instancia do phpmailer
$mail = new PHPMailer;
//reconhecer virgulas e acentos
$mail->CharSet='UTF-8';
//definir email de quem está enviando a mensagem
$mail->setFrom('contato@mostrapreco.com.br', $assunto);
//Definir email alternativo para a opção responder
$mail->addReplyTo('contato@mostrapreco.com.br','Mostra Preço');
//definir o email e nome do destinatario
$mail->addAddress($Email, $_SESSION['NomeExibicao']);
//Set the subject line
$mail->Subject = $assunto;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$var=file_get_contents('listaEmail.php');
$mail->msgHTML($html);
//Replace the plain text body with one created manually
$mail->AltBody = 'Testando';
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors

if (!$mail->send()) {

    echo "Erro!: " . $mail->ErrorInfo;

} else {

    echo "Mensagem enviada!";

}

$retorno = "enviado";

header("location:painelAdministrativo.php?msg=<p class='alert alert-info'>Sua lista de compras foi enviada para o seu email</p>");


 ?>
