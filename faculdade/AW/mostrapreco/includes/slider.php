<?php

//require_once "includes/config.php";

require_once conexao;
require_once funcoesPhp;

$dataAtual = date("Y-m-d");

@$idUsuario = $_SESSION['idUsuario'];

// SELECT idProduto,NomeProduto FROM `produtos`

//num_rows obtem o nº de linhas retornado pela consulta
$query ="SELECT * FROM `anuncios`
INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
INNER JOIN produtos ON anuncios.idProduto = produtos.idProduto
INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
INNER JOIN subcategorias ON produtos.idSubCategoria = subcategorias.idSubCategoria
INNER JOIN categorias ON subcategorias.idCategoria = categorias.idCategoria
INNER JOIN imagensprodutos ON produtos.idProduto = imagensprodutos.idProduto
WHERE ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual' AND Desconto > 0 AND imagensprodutos.idPessoa = lojas.idPessoa
ORDER BY RAND() LIMIT 4";

$erro = $mysqli->error;

echo $erro;

$executaQueryProdutos = $mysqli->query($query);
    $linhasP = $executaQueryProdutos->num_rows;
        if($linhasP>0){ ?>

                 <div class="container">
        <div class="row">

                <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
             while($dados= $executaQueryProdutos->fetch_assoc())
            {//inicio do while?>
 <!-- Page Content -->
 <?php
$precoFinal = $dados['Preco'] - $dados['Desconto'];

  if (!empty($dados['Caminho'])) {
    $fotoProduto = $dados['Caminho'];
  }
else{
  $fotoProduto = "padraoProdutos.jpeg";
}

?>

 <!-- Estilo da Oferta -->

<style>

.content-oferta {
   float:left;
}

.content-oferta span {
    color: gold;
    font-size: 60px; /* ajuste o tamanho do ICONE aqui*/
    position: absolute; /* é necessário para enquadrar o ::after */
    left:1;
    top:-10;

}

.fa-certificate::after {
    font-size: 16px; /* ajuste o tamanho do texto aqui */
    top: 20px; /* ajusta no centro e vertical */
    content: attr(data-qtd); /*pega o valor do atributo */
    font-style:Arial;
    text-align: center;
    color: white;
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
}

</style>

<!-- Fim do Estilo Oferta -->


            <div class="col-sm-3" style="margin-bottom:5px;margin-top:10px;">
                            <div class="col-item">

                        <!-- Inicio Oferta -->
                        <div class="content-oferta ">
                        <span  class="fas fa-certificate fa-5x" data-qtd="Oferta"></span>
                        </div>
                        <!-- Fim Oferta -->

                                <div class="photo">
                                    <a href="verProdutos.php?idAnuncio=<?php echo base64_encode($dados['idAnuncio']); ?>" > <img src="imagens/imgProdutos/<?php echo $fotoProduto; ?>" class="img-responsive" style="height:200px;width:300px;" alt="<?php echo $dados['NomeProduto']; ?>" /></a>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12 col-xs-12" >
                                            <h5 style="margin-bottom: 2px;font-weight: bold;font-size: 1.2em;"><?php echo $dados['NomeProduto']; ?></h5>
                                            <h5 style="margin-bottom:2px;font-weight:bold;font-size:1.2em;"><?php echo $dados['NomeMarca']?></h5>
                                            <h5 class="price-text-color" style="margin-bottom: 5px;font-size: 1.4em;font-weight: bold;">

      R$<?php echo number_format($precoFinal,casaDecimal($dados['NomeSubCategoria']), ',', '.') ; ?></h5>
                                        </div>

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

    <!-- /.container -->

    <?php     } //fim do while
            ?>

            </div>
    </div>

            <?php

            }//fim do if

      else{
        echo "<div class='col-sm-4 col-sm-offset-4' style=''><h3 class='text-center'>Nenhum produto cadastrado</h3></div>";
      }
