<?php
@session_start();

include "../includes/config.php";
include funcoesPhp ;
include conexao;

$idPessoa = $_SESSION['idPessoa'];
$_SESSION['TipoUsuario'];

if ($_SESSION['TipoUsuario']=='Organização' or $_SESSION['TipoUsuario']=='Adm') {

$idLoja = addslashes(strip_tags($_POST['idLoja']));
$NomeLoja = addslashes(strip_tags($_POST['NomeLoja']));
$CEP = addslashes(strip_tags($_POST['CEP']));
$Logradouro = addslashes(strip_tags($_POST['Logradouro']));
$Numero = addslashes(strip_tags($_POST['Numero']));
//$Complemento = addslashes(strip_tags($_POST['Complemento']));
$Bairro = addslashes(strip_tags($_POST['Bairro']));
$Cidade = addslashes(strip_tags($_POST['Cidade']));
$UF = addslashes(strip_tags($_POST['estados-brasil']));
$TipoLoja = addslashes(strip_tags($_POST['TipoLoja']));
@$ImagemLoja = addslashes(strip_tags($_POST['ImagemLoja']));

$AberturaSegunda = addslashes(strip_tags($_POST['AberturaSegunda']));
if (empty($AberturaSegunda)) {
  $AberturaSegunda = "00:00:00";
}
$FechamentoSegunda = addslashes(strip_tags($_POST['FechamentoSegunda']));
if (empty($FechamentoSegunda)) {
  $FechamentoSegunda = "00:00:00";
}

$AberturaTerca = addslashes(strip_tags($_POST['AberturaTerca']));
if (empty($AberturaTerca)) {
  $AberturaTerca = "00:00:00";
}
$FechamentoTerca = addslashes(strip_tags($_POST['FechamentoTerca']));
if (empty($FechamentoTerca)) {
  $FechamentoTerca = "00:00:00";
}

$AberturaQuarta = addslashes(strip_tags($_POST['AberturaQuarta']));
if (empty($AberturaQuarta)) {
  $AberturaQuarta = "00:00:00";
}
$FechamentoQuarta = addslashes(strip_tags($_POST['FechamentoQuarta']));
if (empty($FechamentoQuarta)) {
  $FechamentoQuarta = "00:00:00";
}

$AberturaQuinta = addslashes(strip_tags($_POST['AberturaQuinta']));
if (empty($AberturaQuinta)) {
  $AberturaQuinta = "00:00:00";
}
$FechamentoQuinta = addslashes(strip_tags($_POST['FechamentoQuinta']));
if (empty($FechamentoQuinta)) {
  $FechamentoQuinta = "00:00:00";
}

$AberturaSexta = addslashes(strip_tags($_POST['AberturaSexta']));
if (empty($AberturaSexta)) {
  $AberturaSexta = "00:00:00";
}
$FechamentoSexta = addslashes(strip_tags($_POST['FechamentoSexta']));
if (empty($FechamentoSexta)) {
  $FechamentoSexta = "00:00:00";
}

$AberturaSabado = addslashes(strip_tags($_POST['AberturaSabado']));
if (empty($AberturaSabado)) {
  $AberturaSabado = "00:00:00";
}
$FechamentoSabado = addslashes(strip_tags($_POST['FechamentoSabado']));
if (empty($FechamentoSabado)) {
  $FechamentoSabado = "00:00:00";
}

$AberturaDomingo = addslashes(strip_tags($_POST['AberturaDomingo']));
if (empty($AberturaDomingo)) {
  $AberturaDomingo = "00:00:00";
}
$FechamentoDomingo = addslashes(strip_tags($_POST['FechamentoDomingo']));
if (empty($FechamentoDomingo)) {
  $FechamentoDomingo = "00:00:00";
}

$query = "UPDATE lojas SET NomeLoja = '$NomeLoja', CEP = '$CEP', Logradouro = '$Logradouro', Numero = '$Numero', Cidade = '$Cidade', UF = '$UF', Bairro = '$Bairro', ImagemLoja = '$ImagemLoja', TipoLoja = '$TipoLoja' WHERE idLoja = $idLoja";

$executa = $mysqli->query($query);

//echo $erro = $mysqli->error;

$query = "UPDATE horariofuncionamento SET HoraAbertura = '$AberturaSegunda', HoraFechamento = '$FechamentoSegunda' WHERE DiaSemana = 'Segunda-Feira' AND idLoja = $idLoja";
$executa = $mysqli->query($query);
echo $erro = $mysqli->error;

$query = "UPDATE horariofuncionamento SET HoraAbertura = '$AberturaTerca', HoraFechamento = '$FechamentoTerca' WHERE DiaSemana = 'Terça-Feira' AND idLoja = $idLoja";
$executa = $mysqli->query($query);
echo $erro = $mysqli->error;

$query = "UPDATE horariofuncionamento SET HoraAbertura = '$AberturaQuarta', HoraFechamento = '$FechamentoQuarta' WHERE DiaSemana = 'Quarta-Feira' AND idLoja = $idLoja";
$executa = $mysqli->query($query);
echo $erro = $mysqli->error;

$query = "UPDATE horariofuncionamento SET HoraAbertura = '$AberturaQuinta', HoraFechamento = '$FechamentoQuinta' WHERE DiaSemana = 'Quinta-Feira' AND idLoja = $idLoja";
$executa = $mysqli->query($query);
echo $erro = $mysqli->error;

$query = "UPDATE horariofuncionamento SET HoraAbertura = '$AberturaSexta', HoraFechamento = '$FechamentoSexta' WHERE DiaSemana = 'Sexta-Feira' AND idLoja = $idLoja";
$executa = $mysqli->query($query);
echo $erro = $mysqli->error;

$query = "UPDATE horariofuncionamento SET HoraAbertura = '$AberturaSabado', HoraFechamento = '$FechamentoSabado' WHERE DiaSemana = 'Sábado' AND idLoja = $idLoja";
$executa = $mysqli->query($query);
echo $erro = $mysqli->error;

$query = "UPDATE horariofuncionamento SET HoraAbertura = '$AberturaDomingo', HoraFechamento = '$FechamentoDomingo' WHERE DiaSemana = 'Domingo' AND idLoja = $idLoja";
$executa = $mysqli->query($query);
echo $erro = $mysqli->error;

// inserir imagem
$ImagemAntiga=@$dados['ImagemLoja'];

echo $_FILES['ImagemLoja']['name'];

if(!empty($_FILES['ImagemLoja']['name'])){

$imagem_temporaria=@$_FILES['ImagemLoja']['tmp_name'];
$nome=time().@$_FILES['ImagemLoja']['name'];
$size=@$_FILES['ImagemLoja']['size'];
$type=@$_FILES['ImagemLoja']['type'];

$queryImagem="UPDATE lojas SET ImagemLoja = '$nome' WHERE idPessoa = $idPessoa AND idLoja = $idLoja";

//verificar se já existe uma imagem cadastrada

$queryImagemAntiga="SELECT * FROM lojas WHERE idPessoa = $idPessoa";

$executaQueryImagemAntiga = $mysqli->query($queryImagemAntiga);

$dados = $executaQueryImagemAntiga->fetch_assoc();

if($ImagemAntiga != "padraoLojas.png") {
@unlink('../imagens/imgEmpresas/'.$ImagemAntiga);
} //fim if
require('../libs/recortar/lib/WideImage.inc.php');
 $image = wiImage::load($imagem_temporaria); // Carrega a imagem a ser manipulada
 $image = $image->resize(200,200,'fill'); // Redimensiona a imagem
 $image->saveToFile('../imagens/imgEmpresas/'.$nome);
 $exe_sql=$mysqli->query($queryImagem);
} //fim if
// inserir imagem

// comprimir imagem
if(!empty($_FILES['ImagemLoja']['name'])){
$imagemOriginal = "../imagens/imgEmpresas/".$nome;

$imagemFinal = "../imagens/imgEmpresas/".$nome;

converterImagem($imagemOriginal, $imagemFinal, 80);
}
// comprimir imagem

if (empty($erro)) {
  logs('Editou as informações de '.$NomeLoja);
  header("location:../painelAdministrativo.php");
}

}
else{
   $var = "<script>javascript:history.back(-2)</script>";
   echo $var;
}

 ?>
