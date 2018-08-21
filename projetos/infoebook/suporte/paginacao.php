<?php
// inclui o arquivo de conexão
include "conexao.php";

// identifica o número de itens que irá mostrar em uma página	
$visualizar = "15";

// verifica se existe o parâmetro pagina ( via GET )
// no estado incial vale 01 - primeira página
// em um segundo momento identifica a página a ser aberta ( limite do Select )
  if (!isset($_GET['pagina'])) {
$pagina = "0";
  } else {
$pagina = $_GET['pagina'];
  }

// realiza o select de acordo com o limite de caracteres
// 1º chamada: select * from categoria limit 0,15 
// 2º chamada: select * from categoria limit 15,15 
echo "<b>Analisando o SQL:</b><br>select * from categoria limit $pagina, $visualizar order by nome_categoria <br><br>";
 
//executa a consulta
$sqlPaginacao = $mysqli->query("select * from categoria limit $pagina, $visualizar");


//variável para armazenar erros da consulta casso ocorram
$erro = $mysqli->error;


//se erro for vazio executamo o while para exibição dos resultados
if (empty($erro)) {
	
	while ($dados=$sqlPaginacao->fetch_assoc()) {
	
		echo "<p>".$dados['nome']."</p>";
	
	}

}//fim if


//LINKS PARA PAGINAÇÃO

// verifica a quantidade de registros
$todos =  $mysqli->query("select * from categoria");
$total_registros = $todos->num_rows; 
 
// verifica a quantidade de páginas
// $visualizar = "15";
$total_paginas = ceil($total_registros / $visualizar); 

// criando números das páginas
echo "<br>";
for($num = 0; $num < $total_paginas; $num++){
	echo "<a href='?pagina=".$num."'>$num</a> / ";
	
}

?>
