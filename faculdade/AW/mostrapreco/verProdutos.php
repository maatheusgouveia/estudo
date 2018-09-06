<?php include 'includes/config.php';
include conexao;

$idAnuncio=base64_decode($_GET['idAnuncio']);

@$idPessoa = $_SESSION['idPessoa'];

$query ="SELECT * FROM `anuncios`
INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
INNER JOIN produtos ON anuncios.idProduto = produtos.idProduto
INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
INNER JOIN subcategorias ON produtos.idSubCategoria = subcategorias.idSubCategoria
INNER JOIN categorias ON subcategorias.idCategoria = categorias.idCategoria
INNER JOIN imagensprodutos ON produtos.idProduto = imagensprodutos.idProduto
WHERE idAnuncio = '$idAnuncio'
ORDER BY RAND() LIMIT 4";

$erro = $mysqli->error;

// echo $erro;

$executaQueryProdutos = $mysqli->query($query);

$dados= $executaQueryProdutos->fetch_assoc();

$visualizado = "INSERT INTO visualizados (idPessoa, idAnuncio, DataVisualizado) VALUES ('$idPessoa', $idAnuncio, CURRENT_TIMESTAMP )";

$executaVisualizado = $mysqli->query($visualizado);

$erro = $mysqli->error;

// echo $erro;
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="libs/bootstrap/js/bootstrap.min.js"></script> -->


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
include headers;

include funcoesPhp;

?>

<?php
if (!empty($dados['Caminho'])) {
    $fotoProduto = $dados['Caminho'];
  }
else{
    $fotoProduto = "padraoProdutos.jpeg";
}
?>

	<title><?php echo $dados['NomeProduto']; ?> - Mostra Preço</title>

  <style>
    a:focus, a:hover {
     /* color:#ece411; */
    text-decoration: none;
}

html{
  font-family: arial;
}

h1{
  font-size: 2em;
  margin-bottom: 10px;
}

./* btn.focus, .btn:focus, .btn:hover {
    color:#fff;
    text-decoration: none;
     border-color: #60338E;
    background-color: #60338E;

  } */
  </style>
</head>
<body>

<?php include topo; ?>



<div class="container-fluid" style="background-color: #fff;" >
  <div class="row">

    <div class="col-sm-12" style="background-color: #fff;margin-bottom: 30px;">
    <div class="col-sm-3" style="margin: 50px;">

        <div class="thumbnail" style="background-color: #fff;border:2px solid #fff;border-color:#fff;">
          <img src="imagens/imgProdutos/<?php echo $fotoProduto; ?>" class="img-responsive img-logo center-block" alt="Mostra Preço" height="300" width="300">
        </div>


    </div>


    <div class="col-sm-7" style="margin: 20px;margin-top: 45px;">


      <h1 style="text-align: center;font-weight: bold;"><?php echo $dados['NomeProduto'].' '.$dados['NomeMarca']; ?></h1>

      <div class="well-sm" style="background-color: #fff;min-height: 250px;box-shadow:2px 2px 3px 3px lightgray; ">


        <div class="row">

            <div class="col-sm-6">

            <h3 style="font-weight: bold;font-size: 1em;text-align: center;"> Vendido por: <a href="perfilEmpresa.php?idLoja=<?php echo base64_encode($dados['idLoja']); ?>" name="lojaNome" id="lojaNome"> <?php echo $dados['NomeLoja']; ?> </a></h3>
            <br>

            <p class="price-text-color" style="font-size: 2.5em;text-align: center;font-weight: bold;">R$<?php echo number_format($dados['Preco']-$dados['Desconto'],casaDecimal($dados['NomeSubCategoria']), ',', '.'); ?></p>
            <br>

            <p style="font-size: 1.5em;text-align: center;font-weight: bold;color:red;">Impostos : R$<?php echo number_format(($dados['Preco']-$dados['Desconto'])*$dados['Imposto'],casaDecimal($dados['NomeSubCategoria']), ',', '.'); ?></p>
            <br>

            <p style="font-size: 1.2em;text-align: center;font-weight: bold;color: #32CD32">Preço sem impostos : R$<?php echo number_format(($dados['Preco']-$dados['Desconto'])-$dados['Imposto']*$dados['Preco'],casaDecimal($dados['NomeSubCategoria']), ',', '.'); ?></p>
            <br>
<?php if (!empty($dados['DescricaoAnuncio'])){ ?>
            <p style="font-size: 1em;font-weight: bold;text-align: left;">Descrição: <?php echo $dados['DescricaoAnuncio'] ?></p>
            <br>
<?php }?>
            <p style="font-size: 1em;font-weight: bold;text-align: left;">Preço válido de  <?php echo formataData($dados['ValidoDe']); ?> até <?php echo formataData($dados['ValidoAte']); ?></p>

            </div>

            <div class="col-sm-6" style="margin-top:-10px;">

            <a href="adicionaLista.php?idAnuncio=<?php echo base64_encode($idAnuncio); ?>" class="hidden-sm linkPopover" id="linkPopover">

              <button class="btn-success btn-lg  col-xs-10 col-xs-offset-1" style="margin-top:15%;font-size: 1em;border: #fff;">

                <i class="fa fa-plus-square" aria-hidden="true" ></i> Adicionar à minha lista

              </button>
            </a>

              <div id="retorno"></div>

            </div>

      </div>

 <div class="col-sm-12" style="margin-top: 10px;"><hr>

<p style="text-align: center;color: red;margin-top:-10px;">Todas as informações nos anúncios são responsabilidade do anunciante.  <a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></a></p>

       </div>
    </div>

    </div>
  </div>

</div>

</div>

<div class="container-fluid">
  <div class="col-sm-12 text-center" style="min-height: 200px;">

    <?php include 'includes/thumbnailSugestoes.php' ?>

  </div>
</div>

</div>

<?php include rodape; ?>



</body>
</html>

<!-- $var=file_get_contents('');
echo $var; -->

<!-- SELECT * FROM produtos WHERE ranking=$ranking -->
