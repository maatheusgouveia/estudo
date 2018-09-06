<?php

session_start();

include "../includes/config.php";
include funcoesPhp;
include conexao;

$idUsuario = $_SESSION['idUsuario'];

$idPessoa = $_SESSION['idPessoa'];

$NomeExibicao = strip_tags(addslashes($_POST['NomeExibicao']));

$NomeRazaoSocial = strip_tags(addslashes($_POST['NomeRazaoSocial']));

$query = "UPDATE usuarios SET NomeExibicao = '$NomeExibicao' WHERE idUsuario = $idUsuario";

$executa = $mysqli->query($query);

$query = "UPDATE pessoas SET NomeRazaoSocial = '$NomeRazaoSocial' WHERE idPessoa = $idPessoa";

$executa = $mysqli->query($query);

$erro = $mysqli->error;

if (empty($erro)) {
  $_SESSION['NomeExibicao'] = $NomeExibicao;
}

$queryImagemAntiga="SELECT * FROM usuarios WHERE idUsuario = $idUsuario";

$executaQueryImagemAntiga = $mysqli->query($queryImagemAntiga);

$dados = $executaQueryImagemAntiga->fetch_assoc();

// inserir imagem
$ImagemAntiga=@$dados['FotoPerfil'];

//echo $_FILES['FotoPerfil']['name'];

if(!empty($_FILES['FotoPerfil']['name'])){

$imagem_temporaria=@$_FILES['FotoPerfil']['tmp_name'];
$nome=time().@$_FILES['FotoPerfil']['name'];
$size=@$_FILES['FotoPerfil']['size'];
$type=@$_FILES['FotoPerfil']['type'];

$queryImagem="UPDATE usuarios SET FotoPerfil = '$nome' WHERE idUsuario = $idUsuario";

if($ImagemAntiga != "padraoUsuarios.png") {
@unlink('../imagens/imgUsuarios/'.$ImagemAntiga);
} //fim if
require('../libs/recortar/lib/WideImage.inc.php');
 $image = wiImage::load($imagem_temporaria); // Carrega a imagem a ser manipulada
 $image = $image->resize(200,200,'fill'); // Redimensiona a imagem
 $image->saveToFile('../imagens/imgUsuarios/'.$nome);
 $exe_sql=$mysqli->query($queryImagem);
 $_SESSION['FotoPerfil'] = $nome;
} //fim if
// inserir imagem

// comprimir imagem
if(!empty($_FILES['FotoPerfil']['name'])){
$imagemOriginal = "../imagens/imgUsuarios/".$nome;

$imagemFinal = "../imagens/imgUsuarios/".$nome;

converterImagem($imagemOriginal, $imagemFinal, 80);
}
// comprimir imagem

logs("Editou dados pessoais");

header("location:../painelAdministrativo.php");

 ?>
