<?php

/**

 * This example shows sending a message using PHP's mail() function.

 */

$assunto = $_POST['assunto'];



$nomeMensagem = $_POST['nomeMensagem'];



$emailMensagem = $_POST['emailMensagem'];



$mensagem = $_POST['mensagem'];

include "../includes/config.php";

require raiz.'/libs/PHPMailer-master/PHPMailerAutoload.php';



//Criar a instancia do phpmailer

$mail = new PHPMailer;



//reconhecer virgulas e acentos

$mail->CharSet='UTF-8';



//definir email de quem está enviando a mensagem

$mail->setFrom('contato@mostrapreco.com.br', 'Mensagens de Usuários');



//Definir email alternativo para a opção responder

$mail->addReplyTo($emailMensagem, $nomeMensagem);



//definir o email e nome do destinatario

$mail->addAddress('contato@mostrapreco.com.br', 'Mostra Preco');



//Set the subject line

$mail->Subject = $assunto;



//Read an HTML message body from an external file, convert referenced images to embedded,

//convert HTML into a basic plain-text alternative body

$mail->msgHTML($mensagem);



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







?>