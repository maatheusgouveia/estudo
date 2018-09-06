<?php

@session_start();

$idListaCompra = base64_decode($_GET['idListaCompra']);

$NomeExibicao = $_SESSION['NomeExibicao'];

$Email = $_SESSION['Email'];

require_once conexao;

?>

<div class="container" id="ConteudoLista">
  <div class="row">
      <?php
         $idPessoa = $_SESSION['idPessoa'];
         $query ="SELECT idListaCompra, NomeLista
                  FROM `listascompra`
                  WHERE idListaCompra=$idListaCompra";
         $executaQuery = $mysqli->query($query);
         $linhas = $executaQuery->num_rows;
         $dados= $executaQuery->fetch_assoc();
        ?>


     <div class="col-sm-10 col-sm-offset-1">
      <div class="well-sm text-center" style="background-color: #fff;border:2px solid #eee;">
          <div style="background-color: #8A2BE2;color: #fff;border-radius: 5px;">

              <div class="row">
                 <div class="col-sm-4">
                  <br>
                  <img src="https://www.mostrapreco.com.br/image/logo-nome.png" alt="" class="img-responsive"  width="80"  height="80">
                </div>
                <div class="col-sm-4">
                   <h1 class="text-center " style="font-size: 2.5em;font-weight: bold;"><?php echo $dados['NomeLista']; ?></h1>

                </div>
                 <div class="col-sm-4">
                  <br><br>

                </div>

             </div>
          </div>
          <div class="table-responsive">
                    <table class="table table-sm table-danger">
          <thead>
            <tr>
              <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Nome Produto</th>
              <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Quantidade</th>
              <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Preço Unitário</th>
              <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Desconto</th>
              <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Preço</th>
              <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Impostos</th>
              <th style="background-color: #eee;color: #666;font-weight: bold;text-align: center;">Remover</th>
            </tr>
          </thead>

              <?php

              $total = 0;
              $impostos = 0;

            $query2 = "SELECT * FROM `produtoslista`
      INNER JOIN listascompra ON produtoslista.idListaCompra = listascompra.idListaCompra
      INNER JOIN anuncios ON produtoslista.idAnuncio = anuncios.idAnuncio
      INNER JOIN produtos ON anuncios.idProduto = produtos.idProduto
      INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
      WHERE listascompra.idPessoa=$idPessoa AND listascompra.idListaCompra=".$dados['idListaCompra'];

      $executaQuery2 = $mysqli->query($query2);

               while ($dados2= $executaQuery2->fetch_assoc()) {
                $Preco = ($dados2['Preco'] - $dados2['Desconto'])*($dados2['Quantidade']);

               ?>
       <tbody>
               <tr>
              <td style="text-align: center;font-weight: bold;color:#333;"><?php echo $dados2['NomeProduto']." ".$dados2['NomeMarca']; ?></td>
              <td style="text-align: center;"><?php echo $dados2['Quantidade']."x"; ?></td>
              <td style="text-align: center;font-weight: bold;color: #23A0D1;">R$<?php echo number_format($dados2['Preco'],2) ; ?></td>
              <td style="text-align: center;font-weight: bold;color: #23A0D1;">R$<?php echo number_format($dados2['Desconto'],2) ; ?></td>
              <td style="text-align: center;font-weight: bold;color: #23A0D1;"><?php echo "R$".number_format($Preco,2);
              $total = $total + $Preco; ?></td>
              <td style="text-align: center;font-weight: bold;color: #23A0D1;"><?php echo "R$".number_format(($dados2['Preco'] - $dados2['Desconto']) * $dados2['Imposto'] * $dados2['Quantidade'],2);
              $impostos = $impostos + (($dados2['Preco'] - $dados2['Desconto']) * $dados2['Imposto'] * $dados2['Quantidade']); ?></td>
              <td style="text-align: center;"><a href="acoes/excluiProdutosLista.php?idProdutoLista=<?php echo base64_encode($dados2['idProdutoLista']); ?> " style="color: red;">Excluir</a></td>
            </tr>

      <?php
              }

               ?>

        </tbody>
        </table>

      </div>

          <br>
          <h5 style="font-weight: bold;font-size: 2.5em;color: #23A0D1;"><i class="fa fa-tag" aria-hidden="true"></i> <?php echo 'Total R$'.number_format($total,2);?></h5>

           <h5 style="font-weight: bold;font-size: 1.2em;color: Red;"><?php echo 'Impostos R$'.number_format($impostos,2);?></h5>
          <br>

      </div>
    </div>
      <br>
   </div><!-- row -->
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>

<div class="col-sm-2 ">

<form action="EnvialistaComprasEmail.php?idListaCompra=<?php echo  $idListaCompra;?>"  method="post">

      <input type="hidden" name="html"  class="html">
      <button type="submit" class="btn btn col-md-offset-8" style="background-color: #8A2BE2;color: #fff;border:#8A2BE2;">Enviar por email</button>
</form>


</div>



    <div class="col-sm-4">
      <a href="javascript:window.history.go(-1)"><button class="btn btn col-md-offset-8" style="background-color: #8A2BE2;color: #fff;border:#8A2BE2;">Voltar</button></a>
    </div>
  </div>
</div>
