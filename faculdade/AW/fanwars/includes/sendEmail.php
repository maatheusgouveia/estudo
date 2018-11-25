<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

  /**
   * @author Danilo Santos  <danilo.carreiro@etec.sp.gov.br>
  **/
  
if($_SERVER['REQUEST_METHOD']=="POST"   &&  count($_POST)==4)
{
    sleep(1);
    $erro=[];
    $msg="Campo Obrigatório";

    foreach ($_POST as $key => $value)
    {
        $_POST[$key] = (!empty($value))?addslashes(strip_tags($value)):NULL;
    }
     
     if(!isset($_POST['nome']) || $_POST['nome'] == NULL)
     {
        $erro['erro']['nome']=$msg;
     }

     if(!isset($_POST['assunto']) || $_POST['assunto'] == NULL)
     {
        $erro['erro']['assunto']=$msg;
     }

     if(!isset($_POST['email']) || $_POST['email'] == NULL)
     {
        $erro['erro']['email']=$msg;
     }
     else
     {
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
              $erro['erro']['email']="Email invalido";
        }
     }

     if(!isset($_POST['mensagem'])  || $_POST['mensagem']  == NULL)
     {
        $erro['erro']['mensagem']=$msg;
     }


    if(count($erro)>0)
    {
      echo json_encode($erro);
      exit;
    }
    

    require '../bibliotecas/PHPMailer/src/Exception.php';
    require '../bibliotecas/PHPMailer/src/PHPMailer.php';
    require '../bibliotecas/PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();                              // Passing `true` enables exceptions
    try {
        //Server settings
        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        // $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = '-------';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = false;                               // Enable SMTP authentication
        $mail->Username = '------';                 // SMTP username
        $mail->Password = '------';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('-------', 'Suporte FanWars');
        $mail->addAddress('-------');     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($_POST['email'],$_POST['nome']);
        $mail->addCC($_POST['email']);
        //$mail->addBCC();

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $_POST['nome'] . '-' . $_POST['assunto'];
        $mail->Body    = $_POST['mensagem'];
        $mail->AltBody = '';

        if($mail->send())
        {
           echo json_encode(['success'=>"Email enviado com sucesso"]);
           exit;
        }
        else
        {
           echo json_encode(['success'=>"Erro ao enviar email"]);
           exit;
        }
        
        
    } catch (Exception $e) {
        json_encode(['error'=>'Message could not be sent. Mailer Error: ', $mail->ErrorInfo]);
    }




}
else
{
  echo json_encode(['error'=>'Erro ao enviar email']);
}