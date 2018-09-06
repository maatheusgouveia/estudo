<?php
@session_start();

require_once "../includes/config.php";

$NomeLoja = $_POST['NomeLoja'];
$retorno = $_POST['retorno'];

if (empty($_SESSION['idPessoa'])) {
	?>
	<div class="alert alert-dismissable alert-warning" style="margin: 20px">Faça <a href="login.php">login</a> para continuar</div>

	<?php
}
else{
require_once conexao;

$idLoja = addslashes(strip_tags($_POST['idLoja']));

$idPessoa = $_SESSION['idPessoa'];

@$ConteudoComentario = addslashes(strip_tags($_POST['ConteudoComentario']));
$idPessoa = $_SESSION['idPessoa'];

//moderacao

$queryModeracao = "SELECT * FROM comentariosofensivos";

$executaModeracao = $mysqli->query($queryModeracao);

while($dadosModeracao= $executaModeracao->fetch_assoc()){//inicio do while

	@$ConteudoComentario = $_POST['ConteudoComentario'];

	$verificaComentario = stripos($ConteudoComentario, $dadosModeracao['ConteudoOfensivo']);

	if ($verificaComentario !== false) {
		break;
	} //if


} //while


if ($verificaComentario !== false) {
	$ConteudoComentario = "<br>Este comentário não será exibido pois é ofensivo ou contém spam<br> ";
} //if
else{

if (!empty($substituir = str_ireplace("lula2018","#Bolsonaro2018", $ConteudoComentario))) {
 $ConteudoComentario = str_ireplace("lula2018","#Bolsonaro2018", $ConteudoComentario);
 require_once funcoesPhp;

 logs("Caiu no Dibre");
} //if
elseif (!empty($substituir = str_ireplace("#lula2018","#Bolsonaro2018", $ConteudoComentario))) {
 $ConteudoComentario = str_ireplace("lula2018","#Bolsonaro2018", $ConteudoComentario);
 require_once funcoesPhp;

 logs("Caiu no Dibre");
} //elseif
elseif (!empty($substituir = str_ireplace("lula 2018","#Bolsonaro2018", $ConteudoComentario))) {
 $ConteudoComentario = str_ireplace("lula2018","#Bolsonaro2018", $ConteudoComentario);
 require_once funcoesPhp;

 logs("Caiu no Dibre");
} //elseif
else{
	//echo $ConteudoComentario;
} //else

} //fim primeiro else

//fim moderacao

@$query = "INSERT INTO `comentarios` (`idPessoa`, `idLoja`, `ConteudoComentario`, `DataComentario`) VALUES ('$idPessoa', '$idLoja', '$ConteudoComentario', CURRENT_TIMESTAMP)";

@$executaQuery=$mysqli->query($query);

$erro = $mysqli->error;

require_once funcoesPhp;

logs("Comentou no perfil de ".$NomeLoja);
include '../listaComentarios.php';
}

?>
