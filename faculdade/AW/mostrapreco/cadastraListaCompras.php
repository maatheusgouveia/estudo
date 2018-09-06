<?php
@session_start();
$NomeExibicao = $_SESSION['NomeExibicao'];
$Email = $_SESSION['Email'];

require_once 'includes/config.php';
require_once funcoesPhp;

$_SESSION['pagina'] = "cadastraListaCompras.php";
$pagina = $_SESSION['pagina'];
?>

<div class="col-md-10 "  style="border: 2px solid lightgray;border-radius: 4px;margin-top: 5px;" >

<div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top: 20px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Minhas Listas</h1>

    </div>

<button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome')" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Nova Lista de compras</button>

<script type="text/javascript">
function Mudarestado(el) {
       var display = document.getElementById(el).style.display;
       if(display == "none")
           document.getElementById(el).style.display = 'block';
       else
           document.getElementById(el).style.display = 'none';
   }
</script>

<div class="col-md-10" id="DivQueSome" style="display:none;margin-top: 10px;">

	<form method="POST" action="acoes/executaLista.php">
		<div class="form-group">
<label style="font-weight: bold;margin-bottom: 10px;">Nome da lista de compras:<span class="asterisco" style="color:	#9400D3;">*</span></label>
<input type="text" name="NomeLista" class="form-control form" placeholder="Nome da lista de compras" required>

    </div>

       <input type="submit" class="btn btn btn-lg  " style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 5px;color: #fff;">
	</form>

</div>

<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12 col-xl-12 usuario">

<hr>

	<?php

require_once conexao;

$idUsuario = $_SESSION['idUsuario'];
$idPessoa = $_SESSION['idPessoa'];

//num_rows obtem o nº de linhas retornado pela consulta
$query ="SELECT idListaCompra, NomeLista FROM `listascompra`
WHERE listascompra.idPessoa=$idPessoa";

$executaQuery = $mysqli->query($query);

	$linhas = $executaQuery->num_rows;

		if($linhas>0){

				?>

    <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
			 while($dados= $executaQuery->fetch_assoc())
			{//inicio do while?>
				<div class="col-sm-10 col-sm-offset-1">
    	<div class="well-sm text-center" style="background-color: #fff;border:2px solid #eee;">


            <div style="background-color: #8A2BE2;color: #fff;border-radius: 5px;margin-bottom: 20px;height: 60px;">
                <div class="row">
                    <h1 class="text-center" style="margin-top: 10px;font-size: 2em;font-weight: bold;"><?php echo $dados['NomeLista']; ?></h1>
        <br>
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
         <h5 style="font-weight: bold;font-size: 2.5em;color: #23A0D1;"><i class="fa fa-tag" aria-hidden="true"></i> <?php echo 'Total R$'.number_format($total,2);?></h5>

          <h5 style="font-weight: bold;font-size: 1.2em;color: Red;"><?php echo 'Impostos R$'.number_format($impostos,2);?></h5>

         <?php
$assunto = $dados['NomeLista'];
 ?>
    	<br>
        <a href="enviaListaCompras.php?assunto=<?php echo base64_encode($dados['NomeLista']); ?>&idListaCompra=<?php echo base64_encode($dados['idListaCompra']); ?> "><button class="btn btn-sm" style="background-color: #8A2BE2;color: #fff;border:#8A2BE2;font-size:13px;">Enviar <?php echo $dados['NomeLista']; ?> por email</button></a>

    	</div>
    </div>
    	<br>

			<?php } 	//fim do while

			}//fim do if

      else{
        echo "<h3 class='text-center'>Você ainda não criou nenhuma lista</h3>";
      }

 ?>

<div class="col-sm-4 col-sm-offset-4">

	<br>
</div>
</div>

</div>

</div>
</div>
