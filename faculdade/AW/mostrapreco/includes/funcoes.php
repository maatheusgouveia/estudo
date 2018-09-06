<?php  function envia_email($email, $assunto, $mensagem, $nomeExibicao){

require raiz.'/libs/PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->CharSet='UTF-8';
$mail->setFrom('contato@mostrapreco.com.br', 'Mostra Preço');
$mail->addAddress($email, $nomeExibicao);
$mail->Subject = $assunto;
$mail->msgHTML($mensagem);
if (!$mail->send()) {
    $retorno=0;
} else {
    $retorno=1;
}
return $retorno;
    }// FIM DO ENVIA_EMAIL

function formataData($data){
	$separaDataHora = explode(' ', $data);
	$formatarData = implode('/',(array_reverse(explode('-', $separaDataHora['0']))));
	return $formatarData;
}

function mostraHora($data){
	$separaDataHora = explode(' ', $data);
  $hora = $separaDataHora['1'];
	return $hora;
}

function formataHora($hora){
	$separaDataHora = explode(':', $hora);
  $hora = $separaDataHora['0'].":".$separaDataHora['1'];
	return $hora;

}

function logs($acao){
	  @session_start();
	  $idUsuario = $_SESSION['idUsuario'];
    include "conexao.php";
    $sql="INSERT INTO logs(acao,idUsuario,DataHora) VALUES('$acao','$idUsuario', CURRENT_TIMESTAMP)";
    $sql=$mysqli->query($sql);
}

function converteMes($mes){
  $meses = array('1' =>'Janeiro',
                 '2' =>'Fevereiro',
                 '3' =>'Março',
                 '4' =>'Abril',
                 '5' =>'Maio',
                 '6' =>'Junho',
                 '7' =>'Julho',
                 '8' =>'Agosto',
                 '9' =>'Setembro',
                 '10' =>'Outubro',
                 '11' =>'Novembro',
                 '12' =>'Dezembro',);

                 return $meses[$mes];
}

function converteSemana($diaSemana){
  $diasSemana = array('1' =>'Segunda-Feira',
                 '2' =>'Terça-Feira',
                 '3' =>'Quarta-Feira',
                 '4' =>'Quinta-Feira',
                 '5' =>'Sexta-Feira',
                 '6' =>'Sábado',
                 '7' =>'Domingo',);
                 return $diasSemana[$diaSemana];
}

function converterImagem($imagemOriginal, $imagemFinal, $qualidade) {
    // jpg, png, gif or bmp
    $exploded = explode('.',$imagemOriginal);
    $ext = $exploded[count($exploded) - 1];
    if (preg_match('/jpg|jpeg/i',$ext))
        $imagemTmp=imagecreatefromjpeg($imagemOriginal);
    else if (preg_match('/png/i',$ext))
        $imagemTmp=imagecreatefrompng($imagemOriginal);
    else if (preg_match('/gif/i',$ext))
        $imagemTmp=imagecreatefromgif($imagemOriginal);
    else if (preg_match('/bmp/i',$ext))
        $imagemTmp=imagecreatefrombmp($imagemOriginal);
    else
        return 0;

   // O parâmetro "qualidade" é um valor de 0 (baixa) até 100 (alta)
   imagejpeg($imagemTmp, $imagemFinal, $qualidade);
   imagedestroy($imagemTmp);
   return "Formato não suportado";
}

// function valida arquivo
function validaArquivo($arquivo,$extensao){
// passar o parâmetro $extensao no formato ext1,ext2, (separado por vírgula)
// extensao do arquivo
$tipoArquivo = pathinfo($arquivo,PATHINFO_EXTENSION);

$matrizExtensao = explode(",", $extensao);

  if(in_array($tipoArquivo,$matrizExtensao)){
    return 1;
  }else{
    return 0;
  }
} // fim da funcao valida arquivo

// verifica tamanho do arquivo em MB
function tamanhoArquivo($arquivo_temp){
$tamanho = (filesize($arquivo_temp)/1024)/1024;
return $tamanho;
} // fim function verifica tamanho

function DataAtual(){
  echo date("d/m/Y");
}

function HoraAtual(){
  echo date("h:i:s");
}

function DataHoraAtual(){
  echo date("Y-m-d h:i:s");
}

function casaDecimal($NomeSubCategoria){
  if ($NomeSubCategoria == "Combustíveis") {
    $casasDecimais = 3;
  }
  else{
    $casasDecimais = 2;
  }
  return $casasDecimais;
}
?>
