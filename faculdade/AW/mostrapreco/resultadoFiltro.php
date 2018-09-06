<?php
//sleep(2);
$visualizar = "2";
include 'includes/config.php';

@$idSubCategoria = $_POST['idSubCategoria'];

$Ordenar = $_POST['Ordenar'];

$idMarca = $_POST['idMarca'];

$PrecoMax = $_POST['PrecoMax'];

$BuscaFiltro = $_POST['BuscaFiltro'];

	$Cidade = $_POST['Cidade'];

	//echo "Cidades em formato de String: " . $Cidade . "<br><hr>";

	$Cidade = implode("','",explode(",", $Cidade));
	// echo $array_Cidade;

	$Bairros = $_POST['Bairros'];

	//echo "Cidades em formato de String: " . $Cidade . "<br><hr>";

	$Bairros = implode("','",explode(",", $Bairros));

	date_default_timezone_set('America/Sao_Paulo');

   $dataAtual = date("Y-m-d");

include conexao;

@$BuscaFiltro = addslashes(strip_tags($_POST['BuscaFiltro']));

if (!empty($Bairros)) {
	$andBairro = "AND Bairro IN ('$Bairros')";
}
else {
	$andBairro = "";
}

$idTipoLoja = $_POST['idTipoLoja'];

if (!empty($idTipoLoja)) {
	$andTipoLoja = "AND TipoLoja = $idTipoLoja";
}
else {
	$andTipoLoja = "";
}

$BuscarPor = $_POST['BuscarPor'];


$consultaLocal = "SELECT * FROM `lojas`
WHERE (NomeLoja LIKE '%$BuscaFiltro%' OR NomeLoja = '$BuscaFiltro')
$andTipoLoja AND Cidade IN ('$Cidade') $andBairro ORDER BY NomeLoja ASC";

if ($BuscarPor == "BuscarProdutos") {
	$consultaLocal = "";
}

//echo $consultaLocal;

@$executaConsultaLocal = $mysqli->query($consultaLocal);

$erro = $mysqli->error;

//echo $erro;
if (!empty($idSubCategoria)) {
  $pesquisaCategorias = " AND produtos.idSubCategoria = '$idSubCategoria'";
}
else{
  $pesquisaCategorias = "";
}

if (!empty($idMarca)) {
  $pesquisaMarcas = " AND produtos.idMarca = '$idMarca'";
}
else{
  $pesquisaMarcas = "";
}

if (!empty($PrecoMax)) {
  $pesquisaPreco = " AND anuncios.Preco <= '$PrecoMax'";
}
else{
  $pesquisaPreco = "";
}


    @$linhasL = $executaConsultaLocal->num_rows;

 $consultaProduto = "SELECT * FROM `anuncios`
 INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
 INNER JOIN produtos ON anuncios.idProduto = produtos.idProduto
 INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
 INNER JOIN subcategorias ON produtos.idSubCategoria = subcategorias.idSubCategoria
 INNER JOIN categorias ON subcategorias.idCategoria = categorias.idCategoria
WHERE ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual' $pesquisaMarcas AND (NomeProduto LIKE '%$BuscaFiltro%' $andBairro OR NomeProduto = '$BuscaFiltro')$pesquisaCategorias AND lojas.Cidade IN ('$Cidade') $pesquisaPreco
ORDER BY Preco $Ordenar";

if ($BuscarPor == "BuscarLocais") {
	$consultaProduto = "";
}

//echo $consultaProduto;

@$executaConsultaProduto = $mysqli->query($consultaProduto);

$erro = $mysqli->error;

echo $erro;

    @$linhasP = $executaConsultaProduto->num_rows; ?>


     <div class="col-md-10" id="retorno">
       <h1 class="" style="font-weight: bold;">Resultados da Pesquisa</h1>

       <?php
        $totalLinhas = $linhasP+$linhasL;
        if ($totalLinhas > 0) {
         echo  "<div class='row'><p class='badge' style='margin-left:25px;background-color:#60338E;'>".$totalLinhas." resultados encontrados</p></div>

        <div class='row'>

         ";
if ($BuscarPor == "BuscarProdutos" or $BuscarPor == "BuscarTodos") {

         // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
             while(@$dadosP= $executaConsultaProduto->fetch_assoc())
            {//inicio do while

							$idImagemProduto = $dadosP['idProduto'];
							$idImagemPessoa = $dadosP['idPessoa'];
							$queryImagemProduto = "SELECT * FROM imagensprodutos WHERE idProduto = '$idImagemProduto' AND idPessoa = '$idImagemPessoa'";
							$executaQueryImagemProduto =$mysqli->query($queryImagemProduto);
							$dadosImagens= $executaQueryImagemProduto->fetch_assoc();

							 if (!empty($dadosImagens['Caminho'])) {
									$fotoProduto = $dadosImagens['Caminho'];
								}
							 else{
									$fotoProduto = "padraoProdutos.jpeg";
								}
?>



            <div class="col-sm-4 text-center" style=" margin-bottom: 10px;margin-top: 10px;">
                            <div class="col-item">
                                <div class="photo">
														<a href="verProdutos.php?idAnuncio=<?php echo base64_encode($dadosP['idAnuncio']); ?>" >
														<img src="imagens/imgProdutos/<?php echo $fotoProduto; ?>" class="img-responsive" style="height:200px;width:300px;" alt="<?php echo $dadosP['NomeProduto']; ?>" /></a>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12 col-xs-12">
                                            <h5 style="margin-bottom: 5px;font-weight: bold;font-size: 1.2em;"><?php echo $dadosP['NomeProduto']; ?></h5>
                                            <h5 style="margin-bottom:2px;font-weight:bold;font-size:1.2em;"><?php echo $dadosP['NomeMarca']?></h5>
                                            <h5 class="price-text-color" style="margin-bottom: 5px;font-size: 1.4em;">
                                                R$<?php echo number_format($dadosP['Preco'],2) ; ?></h5>
                                        </div>


                                       <!--  <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div> -->
                                        <p style="font-size:1em;margin-bottom: 5px;font-weight: bold;">Vendido por:<a href="perfilEmpresa.php?idLoja=<?php echo base64_encode($dadosP['idLoja']); ?>" name="lojaNome" id="lojaNome"> <?php echo $dadosP['NomeLoja']; ?> </a></p>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <a href="adicionaLista.php?idAnuncio=<?php echo base64_encode($dadosP['idAnuncio']); ?>" class="hidden-sm linkPopover" id="linkPopover"><i class="fa fa-plus" aria-hidden="true"></i></a></p>
                                        <p class="btn-details" style="font-size: 0.9em;">
                                            <i class="fa fa-list"></i><a href="verProdutos.php?idAnuncio=<?php echo base64_encode($dadosP['idAnuncio']); ?>" class="hidden-sm">Ver mais</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>



 <?php }

}//fim if

//descomentar as próximas linhas vai separar de novo os resultados das buscas de produtos e de locais

//echo "</div>

	//<div class='row'>

//";

//descomentar as linhas acima vai separar de novo os resultados das buscas de produtos e de locais

 if($BuscarPor == "BuscarLocais" or $BuscarPor == "BuscarTodos"){

 // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
             while(@$dadosL= @$executaConsultaLocal->fetch_assoc())
            {//inicio do while

               if (!empty($dadosL['imagemProduto'])) {
    $fotoProduto = $dadosL['imagemProduto'];
  }
else{
  $fotoProduto = "padraoLojas.png";
  $erro = $mysqli->error;

echo $erro;
}
?>


<div class="col-sm-4 text-center" style="margin-bottom: 10px;margin-top: 10px;">
			 <div class="col-item">
					 <div class="photo">
						 <a href="perfilEmpresa.php?idLoja=<?php echo base64_encode($dadosL['idLoja']); ?>" name="lojaNome" id="lojaNome">
							 <img src="imagens/imgEmpresas/<?php echo $dadosL['ImagemLoja']; ?>" class="img-responsive" style="height:200px;width:300px;" alt="a">
						 </a>
					 </div>
					 <div class="info">
							 <div class="row">
									 <div class="price col-md-12 col-xs-12">
											 <h5  style="margin-bottom: 5px;font-weight: bold;font-size: 1.2em;"><?php echo $dadosL['NomeLoja']; ?></h5>

									 </div>

									<!--  <div class="rating hidden-sm col-md-6">
											 <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
											 </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
											 </i><i class="fa fa-star"></i>
									 </div> -->
									<p style="margin-bottom:61px;"></p>


							 </div>
							 <div class="separator clear-left">

							  <p class="btn-details " style="font-size: 1em;margin-top:20px;top:0;">
											 <i class="fa fa-list"></i>
											 <a href="perfilEmpresa.php?idLoja=<?php echo base64_encode($dadosL['idLoja']); ?>" name="lojaNome" id="lojaNome"> Ver mais
											 </a>
									 </p>
									 <br>
									 <p class="btn-add col-md-4" style="margin-top:-20px;" >
										 <?php

							 @$idPessoa = $_SESSION['idPessoa'];

							 if (!empty($idPessoa)) {

							 @$query = "SELECT * FROM favoritos WHERE idPessoa = $idPessoa AND idLoja = ".$dadosL['idLoja'];

							 @$executa = $mysqli->query($query);
							 }
							 @$linhasF = $executa->num_rows;

														?>
<div class="row">
												 <form action="acoes/executaFavoritosBusca.php" method="POST" id="FormFavoritos<?php echo $dadosL['idLoja'];  ?>">

													 <input type="hidden" value="<?php echo $dadosL['idLoja']; ?>" name="idLoja" >

													 <div id="retornoFavoritos<?php echo $dadosL['idLoja'];  ?>">

													 <?php

													 if ($linhasF==0) { ?>

													 <input type="submit" id="favoritos<?php echo $dadosL['idLoja'];  ?>" value="Adicionar aos favoritos" style="display:none" >

													 <input type="hidden" name="favoritos" value="Adicionar" id="favoritos<?php echo $dadosL['idLoja'];  ?>">
													 <input type="hidden" name="NomeLoja" value="<?php echo $dadosL['NomeLoja']; ?>" id="favoritos<?php echo $dadosL['idLoja'];  ?>">

													 <?php
														}else{?>
															<input type="submit"  id="favoritos<?php echo $dadosL['idLoja'];  ?>" class="btn btn-sm col-md-12 col-xs-12" value="Remover dos favoritos" style="display:none" >

														 <input type="hidden" name="favoritos" value="Remover">
														 <input type="hidden" name="NomeLoja" value="<?php echo $dadosL['NomeLoja']; ?>" id="favoritos<?php echo $dadosL['idLoja'];  ?>">
														 <?php
														}

													 ?>

														<?php

														 if ($linhasF == 0 ){ ?>

																<p style="font-size:25px;"><label for="favoritos<?php echo $dadosL['idLoja'];  ?>"><i class="fa fa-heart-o " aria-hidden="true" style="margin-top:-10px;" ></i></label> </p>

														 <?php

														 }else{ ?>

															 <p style="font-size:25px;"><label for="favoritos<?php echo $dadosL['idLoja'];  ?>"><i class="fa fa-heart " aria-hidden="true" style="color:red;margin-top:-10px;" ></i></label> </p>

															 <?php

														 }

														 ?>

													 </div>
													 </form>
													 <script>
														 $(document).ready(function(e){
																$("#FormFavoritos<?php echo $dadosL['idLoja'];  ?>").submit(function(){
																		$.ajax({
																		 //caminho/nome do arquivo que irá receber o form
																			 url:'acoes/executaFavoritosBusca.php',
																			 type:'POST',
																			 data:$(this).serialize(),
																			 beforeSend:function(){
																				 $('#retornoFavoritos<?php echo $dadosL['idLoja'];  ?>').html("<img src='load.gif'>");
																			 }, //o que aconteceao enviar dados
																			 success:function(data){
																				 $("#retornoFavoritos<?php echo $dadosL['idLoja'];  ?>").html(data);
																				 } // dados de retorno do arquivo que recebe o form
																		}); //fim ajax
																		return false;
																}); //fim form exemplo
														 }) // fim jquery
													 </script>
									 </p>
									<br>
</div>
							 </div>
							 <div class="clearfix">
							 </div>
					 </div>
			 </div>
	 </div>

                        <?php }

											}//fim if

                        echo "</div>";

       }

			 //LINKS PARA PAGINAÇÃO
			 // verifica a quantidade de registros
			 //$todos =  $mysqli->query("select * from anuncios");
			 $total_registros = $linhasP+$linhasL;

			 //verifica a quantidade de páginas

			 $total_paginas = ceil($total_registros / $visualizar);

			 @$Localizacao = strip_tags(addslashes($_GET['Localizacao']));

			 if(!empty($Localizacao)){
			   $_SESSION['Localizacao'] = $Localizacao;
			 }

			 if(empty($Localizacao) and !empty($_SESSION['Localizacao'])){
			   $Localizacao = $_SESSION['Localizacao'];
			 }

			 @$Bairro = strip_tags(addslashes($_GET['Bairro']));

			 if(!empty($Bairro)){
			   $_SESSION['Bairro'] = $Bairro;
			 }

			 if(empty($Bairro) and !empty($_SESSION['Bairro'])){
			   $Bairro = $_SESSION['Bairro'];
			 }
			 $Busca = strip_tags(addslashes($_POST['BuscaFiltro']));

			 ?>
			 <ul class="pagination justify-content-center">
			 <li class="page-item <?php if($pagina == 0){echo 'disabled';} ?>">
					 <a class="page-link" href="?Localizacao=<?php echo $Localizacao ?>&Bairro=<?php echo $Bairro ?>&Busca=<?php echo $Busca; ?>&pagina=<?php echo $pagina=$pagina - 1; ?>" >Anterior</a>
				 </li>

			 <?php
			 // criando números das páginas
			 //echo "<br>";
			 for($num = 0; $num < $total_paginas; $num++){
				 ?>
				 <li class='page-item'>
					 <a href='?Localizacao=<?php echo $Localizacao; ?>&Bairro=<?php echo $Bairro;?>&Busca=<?php echo $Busca;?>&pagina=<?php echo $num; ?>' class='page-link'><?php echo $num+1;?></a>
				 </li>
			 <?php
			 }
			 ?>
			 <li class="page-item <?php if($pagina >= $num){echo 'disabled';}?>">
				 <a class="page-link" href="?Localizacao=<?php echo $Localizacao; ?>&Bairro=<?php echo $Bairro;?>&Busca=<?php echo $Busca; ?>&pagina=<?php echo $pagina=$pagina+2; ?>">Proximo
				 </a>
			 </li>
		 </ul> <!-- lista paginação -->
