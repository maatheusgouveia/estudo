<?php include("../includes/config.php");



include(conexao);


for ($i=0; $i < 51; $i++) { 
	# code...

$sql="Insert into categoria (nome) values ('categoria $i')";
$executa=$mysqli->query($sql);
$error=$mysqli->error;

}



 ?>