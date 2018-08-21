<?php  session_start(); // iniciamos a sessao

// se o arquivo não receber o código da apostila e se este código não for do tipo numério o usuário é redirecionado para a index
if(!isset($_GET['apostila']) && !is_numeric(base64_decode($_GET['apostila']))){

header("location:index.php");

}



// vamos criar a variável de sessão para a lista de arquivos caso ela não exista
if (!isset($_SESSION['lista'])) {
// a variável de sessao recebe um array
$_SESSION['lista']=array();

}


//armazenamos o código do arquivo decodificado na variável arquivo
$arquivo = base64_decode($_GET['apostila']);


// recebe a acao, adicionar ou remover
$acao = $_GET['acao'];


// agora vamos adicionar ou remover os intens na lista

if($acao=='adicionar'){


   //verificamos se o item não existe na lista, se não existir vamos adicionar
	if(!array_key_exists($arquivo, $_SESSION['lista'])){
		$_SESSION['lista'][$arquivo]=$arquivo;
	}

 header("location:lista.php?msg=Item adicionado com sucesso!");	


}// fim if adicionar
else if($acao=='remover'){

	//verificamos se o item existe no array, se exitir vamos remove-lo
	if (isset($_SESSION['lista'][$arquivo])) {
		unset($_SESSION['lista'][$arquivo]);
	}

	// se a lista estiver vazia vamos destruir a sessao lista
	if(sizeof($_SESSION['lista'])==0){
				unset($_SESSION['lista']);
				}

	header("location:lista.php?msg=Item removido com sucesso!");				

}// fim else if remover

 ?>