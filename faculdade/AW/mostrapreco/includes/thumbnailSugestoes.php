<?php

require_once "includes/config.php";

require_once conexao;

$dataAtual = date("Y-m-d");

@$idUsuario = $_SESSION['idUsuario'];

$idSubCategoria = $dados['idSubCategoria'];

// SELECT idProduto,NomeProduto FROM `produtos`

//num_rows obtem o nº de linhas retornado pela consulta
@$query ="SELECT * FROM `anuncios`
INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
INNER JOIN produtos ON anuncios.idProduto = produtos.idProduto
INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
INNER JOIN subcategorias ON produtos.idSubCategoria = subcategorias.idSubCategoria
INNER JOIN categorias ON subcategorias.idCategoria = categorias.idCategoria
INNER JOIN imagensprodutos ON produtos.idProduto = imagensprodutos.idProduto
WHERE validoDe<='$dataAtual' AND validoAte>='$dataAtual' AND produtos.idSubCategoria='$idSubCategoria' AND anuncios.idAnuncio NOT IN ('$idAnuncio') AND imagensprodutos.idPessoa = lojas.idPessoa
ORDER BY RAND() LIMIT 4";

@$erro = $mysqli->error;

//echo $erro;

@$executaQueryProdutos = $mysqli->query($query);

    @$linhasP = $executaQueryProdutos->num_rows;

        if($linhasP>0){
                ?>
                <h1 class="text-center" style="margin-top: 10px;font-weight: bold;">Produtos relacionados</h1>

                 <div class="container">

        <div class="row">

                <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
             while($dados= $executaQueryProdutos->fetch_assoc())
            {//inicio do while

              $precoFinal = $dados['Preco'] - $dados['Desconto'];?>

 <!-- Page Content -->

 <?php if (!empty($dados['Caminho'])) {
    $fotoProduto = $dados['Caminho'];
  }
else{
  $fotoProduto = "padraoProdutos.jpeg";
}

?>


<div class="col-sm-3" style="margin-bottom:30px;">
                <div class="col-item">
                    <div class="photo">
                        <a href="verProdutos.php?idAnuncio=<?php echo base64_encode($dados['idAnuncio']); ?>" > <img src="imagens/imgProdutos/<?php echo $fotoProduto; ?>" class="img-responsive" style="height:200px;width:300px;" alt="<?php echo $dados['NomeProduto']; ?>" /></a>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12 col-xs-12" >
                                <h5 style="margin-bottom: 5px;font-weight: bold;font-size: 1.2em;"><?php echo $dados['NomeProduto']; ?></h5>
                                <h5 style="margin-bottom:2px;font-weight:bold;font-size:1.2em;"><?php echo $dados['NomeMarca']?></h5>
                                <h5 class="price-text-color" style="margin-bottom: 5px;font-size: 1.4em;font-weight: bold;">
                                    R$<?php echo number_format($precoFinal,2) ; ?></h5>
                            </div>
                           <!--  <div class="rating hidden-sm col-md-6">
                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                </i><i class="fa fa-star"></i>
                            </div> -->
                            <p style="font-size: 1em;margin-bottom: 5px;font-weight: bold;">Vendido por:<a href="perfilEmpresa.php?idLoja=<?php echo base64_encode($dados['idLoja']); ?>"><?php echo $dados['NomeLoja']; ?></a>
                            </p>
                        </div>
                        <div class="separator clear-left">
                            <p class="btn-add">
                                <a href="adicionaLista.php?idAnuncio=<?php echo base64_encode($dados['idAnuncio']); ?>" class="hidden-sm linkPopover" id="linkPopover">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </p>
                            <p class="btn-details" style="font-size: 0.8em;">
                            <i class="fa fa-list"></i><a href="verProdutos.php?idAnuncio=<?php echo base64_encode($dados['idAnuncio']); ?>" class="hidden-sm">Ver mais</a>
                            </p>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>

    <?php     } //fim do while
            ?>

            </div>
    </div>

            <?php

            }//fim do if

      // else{
      //   echo "<div class='col-sm-4 col-sm-offset-4' style=''><h3 class='text-center'>Nenhum produto cadastrado</h3></div>";
      // }
