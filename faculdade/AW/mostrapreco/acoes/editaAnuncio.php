<?php
@session_start();

include "../includes/config.php";
require_once funcoesPhp ;
include conexao;

$idPessoa = $_SESSION['idPessoa'];
$_SESSION['TipoUsuario'];

if ($_SESSION['TipoUsuario']=='Organização') {

$idAnuncio = addslashes(strip_tags($_POST['idAnuncio']));
$idProduto = addslashes(strip_tags($_POST['idProduto']));
$idLoja = addslashes(strip_tags($_POST['idLoja']));
$Preco = addslashes(strip_tags($_POST['Preco']));
$DescricaoAnuncio = addslashes(strip_tags($_POST['Descricao']));
$Desconto = addslashes(strip_tags($_POST['Desconto']));
$ValidoDe = addslashes(strip_tags($_POST['ValidoDe']));
$ValidoAte = addslashes(strip_tags($_POST['ValidoAte']));

$query = "UPDATE anuncios SET idProduto = '$idProduto', idLoja = '$idLoja', Preco = '$Preco', DescricaoAnuncio = '$DescricaoAnuncio', Desconto = '$Desconto', ValidoDe = '$ValidoDe', ValidoAte = '$ValidoAte'
WHERE idAnuncio = $idAnuncio";

$executa = $mysqli->query($query);

$queryImagemAntiga="SELECT * FROM imagensprodutos WHERE idProduto = $idProduto AND idPessoa = $idPessoa";

$executaQueryImagemAntiga = $mysqli->query($queryImagemAntiga);

$dados = $executaQueryImagemAntiga->fetch_assoc();

// inserir imagem
$ImagemAntiga=@$dados['Caminho'];

echo $_FILES['ImagemProduto']['name'];

if(!empty($_FILES['ImagemProduto']['name'])){

$imagem_temporaria=@$_FILES['ImagemProduto']['tmp_name'];
$nome=time().@$_FILES['ImagemProduto']['name'];
$size=@$_FILES['ImagemProduto']['size'];
$type=@$_FILES['ImagemProduto']['type'];

$queryImagem="UPDATE imagensprodutos SET Caminho = '$nome' WHERE idProduto = $idProduto AND idPessoa = $idPessoa";

if($ImagemAntiga != "padraoProdutos.jpeg") {
@unlink('../imagens/imgProdutos/'.$ImagemAntiga);
} //fim if
require('../libs/recortar/lib/WideImage.inc.php');
 $image = wiImage::load($imagem_temporaria); // Carrega a imagem a ser manipulada
 $image = $image->resize(200,200,'fill'); // Redimensiona a imagem
 $image->saveToFile('../imagens/imgProdutos/'.$nome);
 $exe_sql=$mysqli->query($queryImagem);
} //fim if
// inserir imagem

// comprimir imagem
if(!empty($_FILES['ImagemProduto']['name'])){
$imagemOriginal = "../imagens/imgProdutos/".$nome;

$imagemFinal = "../imagens/imgProdutos/".$nome;

converterImagem($imagemOriginal, $imagemFinal, 80);
}
// comprimir imagem

echo $erro = $mysqli->error;

if (empty($erro)) {

  logs('Editou um Anuncio');
  header("location:../painelAdministrativo.php");
}

}
else{
    $var = "<script>javascript:history.back(-2)</script>";
    echo $var;
}

 ?>
