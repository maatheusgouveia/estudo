<?php
include "includes/config.php";
include verificaLogado ; ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<?php
include conexao;

@session_start();

$idUsuario = $_SESSION['idUsuario'];

@$NomeExibicao = $_SESSION['NomeExibicao'];

@$TipoUsuario = $_SESSION['TipoUsuario'];

$idAnuncio = base64_decode($_GET['idAnuncio']);

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    a:focus, a:hover {
     /* color:#fff; */
    text-decoration: none;
}

html{
  font-family: arial;
}

h1{
  font-size: 2em;
  margin-bottom: 10px;
}

/* btn.focus, .btn:focus, .btn:hover {
    color:#fff;
    text-decoration: none;
     border-color: #60338E;
    background-color: #60338E;

  } */


  </style>

  <title>Adicionar Produto - Mostra Preço</title>

<?php include headers; ?>


</head>
<body >

<?php include topo; ?>

<div class="container" style="min-height: 500px;background-color: #fff;">

<div class="row">

		<div class="col-md-12" style="border:2px solid lightgray;margin-top:5px;border-radius:5px;">
<?php
$query = "SELECT * FROM anuncios
INNER JOIN produtos ON anuncios.idProduto = produtos.idProduto
INNER JOIN imagensprodutos ON produtos.idProduto = imagensprodutos.idProduto
WHERE anuncios.idAnuncio = $idAnuncio";

$executa = $mysqli->query($query);

        ?>
<div style="background-color: #8A2BE2;color: #fff;border-radius: 5px;margin-bottom: 20px;margin-top: 20px;">
                <div class="row">
                    <h1 class="text-center" style="margin-top: 10px;font-size: 2.5em;font-weight: bold;">Adicionar Produtos</h1>
        <br>
                </div>
            </div>
        <h1 class="text-center" style="margin-top: 20px;"></h1>
    <div class="table-responsive">
            <table class="table table-sm table-bordered">
    <thead>
      <tr>
        <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Produto</th>
        <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Quantidade</th>
        <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Preço Un.</th>
        <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Desconto Un.</th>
        <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Impostos</th>
        <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Total</th>
        <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Adicionar A:</th>
        <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Adicionar</th>
      </tr>
    </thead>




                <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array

$dados= $executa->fetch_assoc();

if (!empty($dados['Caminho'])) {
    $fotoProduto = $dados['Caminho'];
  }
else{
  $fotoProduto = "padraoProdutos.jpeg";
}

$precoFinal = $dados['Preco'] - $dados['Desconto'];

//inicio do while?>

      <form action="acoes/executaAdicionaLista.php" method="POST" id="formAdicionaProduto">

  <tbody>
        <tr>

        <input type="hidden" name="idAnuncio" value="<?php echo $idAnuncio; ?>">
        <input type="hidden" id="Desconto" value="<?php echo $dados['Desconto'] ?>">
        <input type="hidden" id="Preco" value="<?php echo $dados['Preco'] ?>">
        <input type="hidden" id="Imposto" value="<?php echo $dados['Imposto'] ?>">

        <td style="text-align: center;"><span style="font-weight: bold;"><?php echo $dados['NomeProduto']; ?></span><br><img src="imagens/imgProdutos/<?php echo $fotoProduto; ?>" width='100' height='100'></td>
        <td style="text-align: center;"><input type="number" name="Quantidade" id="Quantidade" style="border-radius: 6px;border: 2px solid #666;width: 150px; height: 30px; text-align:center;" min="1" value="1" onchange="javascript:valorTotal();"></td>
        <td style="text-align: center;font-weight: bold;color: #23A0D1;font-size: 1.5em;">R$<?php echo number_format($dados['Preco'],2) ; ?></td>
        <td style="text-align: center;font-weight: bold;color: green;font-size: 1.5em;">R$<?php echo number_format($dados['Desconto'],2) ; ?></td>
        <td style="text-align: center;font-weight: bold;color: red;font-size: 1.5em;" id="ImpostoTotal">R$<?php echo number_format((($dados['Preco']-$dados['Desconto'])*$dados['Imposto']),2) ; ?></td>
        <td style="text-align: center;font-weight: bold;color: #23A0D1;font-size: 1.5em;" id="valorTotal">R$<?php echo number_format($dados['Preco']-$dados['Desconto'],2) ; ?></td>
        <td style="text-align: center;"><select name="idListaCompra" style="border-radius: 6px;border: 2px solid #666;width: 150px; height: 30px;"><?php include "optionsListas.php"; ?></select></td>
        <td style="text-align: center;"><button type="submit" class="btn btn-success" >Enviar</button></td>

        <script>
          function valorTotal(){
            var desconto = document.getElementById('Desconto');
            var quantidade = document.getElementById('Quantidade');
            var preco = document.getElementById('Preco');
            var imposto = document.getElementById('Imposto');
            var impostoTotal = document.getElementById('ImpostoTotal');
            var valorTotal = document.getElementById('valorTotal');
            var total = (preco.value * quantidade.value)-(desconto.value * quantidade.value);
            valorTotal.innerHTML ="R$"+parseFloat(total.toFixed(2));
            var totalImposto = (imposto.value * total);
            impostoTotal.innerHTML ="R$"+parseFloat(totalImposto.toFixed(2));
          }
        </script>

      </tr>

    </form>

</tbody>
</table>

<button type="button" class="btn btn btn-md col-xs-12 col-sm-12 col-md-12 btn-modal" data-toggle="modal" data-target="#myModalLista" data-whatever="batima" title="Cadastrar uma Lista de Compras" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-top: 20px;margin-bottom: 20px;color: #fff;">
  Nova Lista
</button>

<?php include "modalListaCompras.php"; ?>

		</div>

</div>

	</div>

  <div class="container" id="retorno">

</div>

</div>
<?php //@include "modalLista.php"; ?>

</section>

<?php include rodape ;
?>

</body>
</html>

<script>
  $(document).ready(function(e){
     $("#formAdicionaProduto").submit(function(){
         $.ajax({
          //caminho/nome do arquivo que irá receber o form
            url:'acoes/executaAdicionaLista.php',
            type:'POST',
            data:$(this).serialize(),
            beforeSend:function(){
              $('#retorno').html("<img src='load.gif'>");
            }, //o que aconteceao enviar dados
            success:function(data){
              $("#retorno").html(data);
            } ,// dados de retorno do arquivo que recebe o form
         }); //fim ajax
         return false;
     }); //fim form exemplo
  }) // fim jquery
</script>
