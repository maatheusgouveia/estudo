<?php include("../includes/config.php");

include(conexao);	
		


for ($i=0; $i < 50 ; $i++) { 
	# code...


$sql = "Insert into categoria (nome_categoria) values('categoria $i')";
// executar o sql
$executa = $mysqli->query($sql);
}


 ?>