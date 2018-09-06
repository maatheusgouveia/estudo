<?php
@session_start();

include "../includes/config.php";
include conexao;
include funcoesPhp ;

$idPessoa = $_SESSION['idPessoa'];
$_SESSION['TipoUsuario'];

if ($_SESSION['TipoUsuario']=='Organização' or $_SESSION['TipoUsuario']=='Adm') {

$NomeLoja = addslashes(strip_tags($_POST['nomeLoja']));
$CEP = addslashes(strip_tags($_POST['cep']));
$Logradouro = addslashes(strip_tags($_POST['logradouro']));
$Numero = addslashes(strip_tags($_POST['numero']));
$Bairro = addslashes(strip_tags($_POST['bairro']));
$Cidade = addslashes(strip_tags($_POST['cidade']));
$UF = addslashes(strip_tags($_POST['estados-brasil']));
$TipoLoja = addslashes(strip_tags($_POST['TipoLoja']));

$query = "INSERT INTO lojas (idPessoa, NomeLoja, CEP, Logradouro, Numero, Cidade, UF, Bairro, TipoLoja) VALUES ('$idPessoa', '$NomeLoja', '$CEP', '$Logradouro', '$Numero', '$Cidade', '$UF', '$Bairro', '$TipoLoja')";

$executa = $mysqli->query($query);

//echo $erro = $mysqli->error;

$AberturaSegunda = addslashes(strip_tags($_POST['AberturaSegunda']));
$FechamentoSegunda = addslashes(strip_tags($_POST['FechamentoSegunda']));

$AberturaTerca = addslashes(strip_tags($_POST['AberturaTerca']));
$FechamentoTerca = addslashes(strip_tags($_POST['FechamentoTerca']));

$AberturaQuarta = addslashes(strip_tags($_POST['AberturaQuarta']));
$FechamentoQuarta = addslashes(strip_tags($_POST['FechamentoQuarta']));

$AberturaQuinta = addslashes(strip_tags($_POST['AberturaQuinta']));
$FechamentoQuinta = addslashes(strip_tags($_POST['FechamentoQuinta']));

$AberturaSexta = addslashes(strip_tags($_POST['AberturaSexta']));
$FechamentoSexta = addslashes(strip_tags($_POST['FechamentoSexta']));

$AberturaSabado = addslashes(strip_tags($_POST['AberturaSabado']));
$FechamentoSabado = addslashes(strip_tags($_POST['FechamentoSabado']));

$AberturaDomingo = addslashes(strip_tags($_POST['AberturaDomingo']));
$FechamentoDomingo = addslashes(strip_tags($_POST['FechamentoDomingo']));

$idLoja = $mysqli->insert_id;

$query ="INSERT INTO `horariofuncionamento` (`HoraAbertura`, `HoraFechamento`, `DiaSemana`, `idLoja`) VALUES ('$AberturaSegunda', '$FechamentoSegunda', 'Segunda-Feira', $idLoja), ('$AberturaTerca', '$FechamentoTerca', 'Terça-Feira', $idLoja), ('$AberturaQuarta', '$FechamentoQuarta', 'Quarta-Feira', $idLoja), ('$AberturaQuinta', '$FechamentoQuinta', 'Quinta-Feira', $idLoja), ('$AberturaSexta', '$FechamentoSexta', 'Sexta-Feira', $idLoja), ('$AberturaSabado', '$FechamentoSabado', 'Sábado', $idLoja), ('$AberturaDomingo', '$FechamentoDomingo', 'Domingo', $idLoja)";
$executa = $mysqli->query($query);
//echo $erro = $mysqli->error;


// inserir imagem
if(!empty($_FILES['ImagemLoja']['name'])) {
  echo $_FILES['ImagemLoja']['name'];

$imagem_temporaria=@$_FILES['ImagemLoja']['tmp_name'];
$nome=time().@$_FILES['ImagemLoja']['name'];
$size=@$_FILES['ImagemLoja']['size'];
$type=@$_FILES['ImagemLoja']['type'];

$queryImagem="UPDATE lojas SET ImagemLoja = '$nome' WHERE idLoja = $idLoja";

//@unlink('../imagens/imgEmpresas/'.$ImagemLoja);
require('../libs/recortar/lib/WideImage.inc.php');
 $image = wiImage::load($imagem_temporaria); // Carrega a imagem a ser manipulada
 $image = $image->resize(200,200,'fill'); // Redimensiona a imagem
 $image->saveToFile('../imagens/imgEmpresas/'.$nome);
 $exe_sql=$mysqli->query($queryImagem);
// inserir imagem

// comprimir imagem
if(!empty($_FILES['ImagemLoja']['name'])){
$imagemOriginal = "../imagens/imgEmpresas/".$nome;
$imagemFinal = "../imagens/imgEmpresas/".$nome;

converterImagem($imagemOriginal, $imagemFinal, 80);
}
// comprimir imagem

}
else{
	$queryImagem="UPDATE lojas SET ImagemLoja = 'padraoLojas.png' WHERE idLoja = $idLoja";
	$exe_sql = $mysqli->query($queryImagem);
}

if (empty($erro)) {

  logs('Cadastrou uma loja');
  header("location:../painelAdministrativo.php");
}

}
else{
  $var = "<script>javascript:history.back(-2)</script>";
  echo $var;
}

 ?>
