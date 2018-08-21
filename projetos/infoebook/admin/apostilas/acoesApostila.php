<?php include("../../includes/config.php");

include(funcoes);

$categoria = addslashes($_POST['categoria']);
$titulo=addslashes($_POST['titulo']);
$descricao=addslashes($_POST['descricao']);
$operacao=addslashes($_POST['operacao']);
$arquivo_temp = $_FILES['arquivo']['tmp_name'];
$arquivo = $_FILES['arquivo']['name'];

$idarquivo = @$_POST['idarquivo'];

$idEdicao = "&arquivo=".base64_encode($idarquivo);

if(!empty($arquivo_temp) && validaArquivo($arquivo,'doc,pdf,docx')!=1 || tamanhoArquivo($arquivo_temp)>2){

header("location:formApostila.php?msg=Arquivo inválido!&operacao=".$operacao.$idEdicao);

exit();

}


$arquivo_nome = randString(20,$arquivo);


switch ($operacao) {
	case 'gravar':
		
$sql="Insert into arquivo (arquivo_idusuario,arquivo_idcategoria,titulo,descricao,arquivo)
values ('".$_SESSION['pessoa']."','$categoria','$titulo','$descricao','$arquivo_nome')";

// copia do arquivo
copy($arquivo_temp,"../../arquivos/$arquivo_nome");
$mensagem = "Arquivo adicionado com sucesso!";

		break;
	
	case 'editar':
	
	$nome_arquivo = $_POST['nome_arquivo'];
	
	$sql="Update arquivo set arquivo_idcategoria=$categoria, titulo='$titulo',descricao='$descricao',arquivo='$nome_arquivo' where idarquivo=$idarquivo";
	
	// se o usuario selecionar outro arquivo no momento da edição, fazemos o upload do arquivo
	if(!empty($arquivo_temp)){
		copy($arquivo_temp,"../../arquivos/$nome_arquivo");
        $mensagem = "Registro editado com sucesso!";
	}

	break;


	case '':
	$idarquivo = base64_decode($_GET['arquivo']);
	$nome_arquivo = $_GET['nome_arquivo'];

	$sql="delete from  arquivo where idarquivo=$idarquivo";
	
	// apagando o arquivo da pasta
	unlink("../../arquivos/$nome_arquivo");
    $mensagem = "Registro deletado com sucesso!";
	
	break;
}


include(conexao);

 $executa=$mysqli->query($sql);
$error=$mysqli->error;

if(empty($error)){
	header("location:listaApostilas.php?msg=$mensagem");
}else{
	header("location:listaApostilas.php?msg=Sistema temporariamente indisponível, tente novamente mais tarde.");
}



 ?>