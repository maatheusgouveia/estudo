<?php
@session_start();
require_once "includes/config.php";
$_SESSION['pagina'] = "cadastraAnuncio.php";
$idPessoa = $_SESSION['idPessoa'];
$idUsuario = $_SESSION['idUsuario'];
include verificaPermissao;
?>
<div class="col-md-10" style="background-color:#FFF;">

  <button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome')" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Novo anúncio</button>

  <div id="DivQueSome" class="well-lg" style="background-color: #fff;margin-top: 20px;display:none;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">

    <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Criar Anúncio</h1>

    </div>
<script type="text/javascript">
function Mudarestado(el) {
       var display = document.getElementById(el).style.display;
       if(display == "none")
           document.getElementById(el).style.display = 'block';
       else
           document.getElementById(el).style.display = 'none';
   }
</script>

<form method="POST" action="acoes/executaCadastraAnuncio.php" enctype="multipart/form-data">

  <div class="form-group">
    <label id="for" style="font-weight: bold;">Vendedor :</label>
                  <select  name="idLoja" class="form-control" style="height: 40px;">
                   <option value="">Loja em que o produto está</option>

                 <?php
                 require_once conexao;

                  $sql = "SELECT * FROM lojas WHERE idPessoa = $idPessoa";
                  $executa = $mysqli->query($sql);
                    while( $loja = $executa->fetch_assoc()){?>

                    <option value="<?php echo $loja['idLoja'];?>" > <?php echo @$loja['NomeLoja'];?> </option>
                 <?php  }?>
                 </select>
  </div>

  <div class="form-group">
    <label id="for" style="font-weight: bold;">Produto :</label>
                  <select  name="idProduto" class="form-control" style="height: 40px;">
                   <option value="">Selecione um produto</option>

                 <?php

                  $sql = "SELECT * FROM produtos
                  INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
                  ORDER BY NomeProduto ASC";
                  $executa = $mysqli->query($sql);
                    while( $produto = $executa->fetch_assoc()){?>

                    <option value="<?php echo $produto['idProduto'];?>" > <?php echo @$produto['NomeProduto'].' '.$produto['NomeMarca'];?> </option>
                 <?php  }?>
                 </select>
  </div>

  <div class="form-group">
    <label id="for" style="font-weight: bold;">Descrição :</label> <br>
                  <textarea name="Descricao" rows="8" cols="80" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <label id="for" style="font-weight: bold;">Preço :</label>
    <input type="number" name="Preco" step="0.001" value="" class="form-control" style="height: 40px;" min="0" >
  </div>

<!-- colocar na mesma linha -->

  <div class="form-group">
    <label id="for" style="font-weight: bold;">Desconto em R$ :</label>
    <input type="number" name="Desconto" step="0.01" value="" class="form-control" style="height: 40px;" >
  </div>

  <!-- <div class="form-group">
    <label id="for" style="font-weight: bold;">Desconto em % :</label>
    <input type="number" name="Desconto" step="5" value="" class="form-control" style="height: 40px;" >
  </div> -->

  <!-- colocar na mesma linha -->

  <div class="form-group">
    <label id="for" style="font-weight: bold;">Valido de :</label>
    <input type="date" name="ValidoDe" step="0.01" value="" class="form-control" style="height: 40px;">
  </div>

  <div class="form-group">
    <label id="for" style="font-weight: bold;">Valido até :</label>
    <input type="date" name="ValidoAte" step="0.01" value="" class="form-control" style="height: 40px;">
  </div>

  <div class="form-group">
    <label id="for" style="font-weight: bold;">Imagem :</label>
    <input type="file" name="ImagemProduto" step="0.01" value="" class="form-control" style="height: 40px;">
  </div>

<div class="">
    <input type="submit" class="btn btn-lg  " style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;color: #fff;">

    <input type="reset" class="btn btn-lg" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;color: #fff;">

</div>

</form>

</div>

  <div class="well-lg" style="background-color: #fff;margin-top: 20px;min-height:;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">
     <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

     <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Anúncios cadastrados</h1>

     </div>
    <?php

    require_once conexao;

      //num_rows obtem o nº de linhas retornado pela consulta
  $queryAnuncio ="SELECT * FROM `anuncios`
INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
INNER JOIN produtos ON anuncios.idProduto = produtos.idProduto
INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
WHERE lojas.idPessoa = $idPessoa";

  $executaQuery = $mysqli->query($queryAnuncio);

    $linhas = $executaQuery->num_rows;

      if($linhas>0){
          ?>
    <table class=" table table-striped table-responsive center-block" id="tabAnuncios" style="margin-top: -10px;">
      <thead>
        <tr>

          <th style="width: 200px;">Nome</th>
          <th style="width: 200px;">Vendedor</th>
          <th style="width: 200px;">Promoção</th>
          <th style="width: 200px;">Editar</th>
          <th style="width: 200px;">Excluir</th>
        </tr>
      </thead>
     <tbody>
                  <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
         while($dados= $executaQuery->fetch_assoc())
        {//inicio do while?>
              <tr>

          <td><?php echo $dados['NomeProduto'].' '.$dados['NomeMarca']; ?></td>
          <td><?php echo $dados['NomeLoja']; ?></td>
          <td><?php if ($dados['Desconto'] > 0) {
            echo "Sim";
          }
          else {
            echo "Não";
          } ?></td>
          <td><?php include "modalEditaAnuncio.php";?></td>
           <td><a href="acoes/excluiAnuncio.php?idAnuncio=<?php echo base64_encode($dados['idAnuncio']); ?>"><button class="btn-danger  btn-sm" style="color: #fff;">Excluir</button></a></td>
        </tr>
        <?php }   //fim do while


        }//fim do if
        else{
          echo "<div class='col-sm-4 col-sm-offset-4'><h3 class='text-center'>Nenhum anúncio cadastrado</h3></div>";
        }

   ?>

  </tbody>
  </table>

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    <script>$(document).ready(function(){
      $('#tabAnuncios').DataTable();
      });
    </script>

    <script src="libs/maskedinput/src/jquery.maskedinput.js"></script>

    <script>

      $(document).ready(function() {

      $("#DescPorcentagem").mask("999.999.999-99");

      });

    </script>

  </div>

</div>
