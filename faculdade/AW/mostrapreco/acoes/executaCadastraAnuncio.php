<?php
@session_start();

include "../includes/config.php";
include funcoesPhp ;
include conexao;

$idPessoa = $_SESSION['idPessoa'];
$_SESSION['TipoUsuario'];

if ($_SESSION['TipoUsuario']=='Organização') {

$idProduto = addslashes(strip_tags($_POST['idProduto']));
$idLoja = addslashes(strip_tags($_POST['idLoja']));
$Preco = addslashes(strip_tags($_POST['Preco']));
$DescricaoAnuncio = addslashes(strip_tags($_POST['Descricao']));
$Desconto = addslashes(strip_tags($_POST['Desconto']));
$ValidoDe = addslashes(strip_tags($_POST['ValidoDe']));
$ValidoAte = addslashes(strip_tags($_POST['ValidoAte']));

$query = "INSERT INTO anuncios (idProduto, idLoja, DescricaoAnuncio, Preco, Desconto, ValidoDe, ValidoAte) VALUES ('$idProduto', '$idLoja', '$DescricaoAnuncio', '$Preco', '$Desconto', '$ValidoDe', '$ValidoAte')";

$executa = $mysqli->query($query);

$queryImagemAntiga="SELECT * FROM imagensprodutos WHERE idProduto = $idProduto AND idPessoa = $idPessoa";

$executaQueryImagemAntiga = $mysqli->query($queryImagemAntiga);

$dados = $executaQueryImagemAntiga->fetch_assoc();

// inserir imagem
$ImagemAntiga=@$dados['ImagemProduto'];

$_FILES['ImagemProduto']['name'];

if(!empty($_FILES['ImagemProduto']['name'])){

$imagem_temporaria=@$_FILES['ImagemProduto']['tmp_name'];
$nome=time().@$_FILES['ImagemProduto']['name'];
$size=@$_FILES['ImagemProduto']['size'];
$type=@$_FILES['ImagemProduto']['type'];

if (!empty($ImagemAntiga)) {
  $queryImagem="UPDATE imagensprodutos SET Caminho = '$nome' WHERE idProduto = $idProduto AND idPessoa = $idPessoa";
}
else{
  echo $queryImagem="INSERT INTO imagensprodutos (idProduto, idPessoa, Caminho) VALUES ($idProduto, $idPessoa, '$nome')";
}


if($ImagemAntiga != "padraoProdutos.jpeg") {
@unlink('../imagens/imgProdutos/'.$ImagemAntiga);
} //fim if
require('../libs/recortar/lib/WideImage.inc.php');
 $image = wiImage::load($imagem_temporaria); // Carrega a imagem a ser manipulada
 $image = $image->resize(200,200,'fill'); // Redimensiona a imagem
 $image->saveToFile('../imagens/imgProdutos/'.$nome);
 $exe_sql=$mysqli->query($queryImagem);
} //fim if

else{
	$queryImagem="INSERT INTO imagensprodutos (idProduto, idPessoa, Caminho) VALUES ('$idProduto', '$idPessoa', 'padraoProdutos.jpeg')";
	$exe_sql=$mysqli->query($queryImagem);
}

// inserir imagem

// comprimir imagem
if(!empty($_FILES['ImagemProduto']['name'])){
$imagemOriginal = "../imagens/imgProdutos/".$nome;

$imagemFinal = "../imagens/imgProdutos/".$nome;

converterImagem($imagemOriginal, $imagemFinal, 80);
}
// comprimir imagem

}


//echo $erro = $mysqli->error;

if (empty($erro)) {

  logs('Cadastrou um Anúncio');
  header("location:../painelAdministrativo.php");
}

else{
    $var = "<script>javascript:history.back(-2)</script>";
    echo $var;
}

 ?>
