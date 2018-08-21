<?php
// inclui o arquivo de conexão
include "../includes/conexao.php";

// identifica o número de itens que irá mostrar em uma página
$visualizar = "20";

// verifica se existe o parâmetro pagina ( via GET )
// no estado incial vale 01 - primeira página
// em um segundo momento identifica a página a ser aberta ( limite do SELECT )
  if (!isset($_GET['pagina'])) {
$pagina = "0";
  } else {
$pagina = $_GET['pagina'];
  }

// realiza o select de acordo com o limite de caracteres
// 1º chamada: select * from categoria limit 0,15
// 2º chamada: select * from categoria limit 15,15

//executa a consulta
$sqlPaginacao = $mysqli->query("SELECT * FROM logs LIMIT $pagina, $visualizar");

//variável para armazenar erros da consulta casso ocorram
$erro = $mysqli->error;

//se erro for vazio executa o while para exibição dos resultados
if (empty($erro)) {

	while ($dados=$sqlPaginacao->fetch_assoc()) {

		echo "<p>".$dados['Acao']."</p>";

	}

}//fim if

//LINKS PARA PAGINAÇÃO

// verifica a quantidade de registros
$todos =  $mysqli->query("select * from logs");
$total_registros = $todos->num_rows;

// verifica a quantidade de páginas
// $visualizar = "15";
$total_paginas = ceil($total_registros / $visualizar);

?>
<ul class="pagination justify-content-center">
<li class="page-item <?php echo (($visualizar-1)<$pagina || $pagina==01 )?'disabled':''; ?>">
    <a class="page-link" href="index.php?pagina=<?php echo ($visualizar==$pagina)?'':($pagina-1); ?>" >Anterior</a>
  </li>

<?php

// criando números das páginas
echo "<br>";
for($num = 0; $num < $total_paginas; $num++){
	echo "<a href='?pagina=".$num."'>$num</a> / ";

}

?><li class="page-item <?php echo ($visualizar==($pagina+1))?'disabled':''; ?>">
  <a class="page-link " href="index.php?pagina=<?php echo ($visualizar==$pagina)?'':($pagina+1); ?>">Proximo</a>
</li>
</ul>
