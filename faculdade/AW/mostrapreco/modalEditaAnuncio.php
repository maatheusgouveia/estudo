<!-- Button trigger modal -->
<button type="button" class=" btn-warning btn-sm " data-toggle="modal" data-target="#myModalM<?php echo $dados['idAnuncio']; ?>" title="Cadastrar um endereço" style="color:#fff;">
  Editar
</button>

<style>
.alert {
    padding: 20px;
    background-color: #FF8C00;
    color: white;
}


.close {
    margin-left: 15px;
    color: #000;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.close:hover {
    color: #000;
}
</style>

<!-- Modal -->
<div class="modal fade" id="myModalM<?php echo $dados['idAnuncio']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#8A2BE2 ;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#000;font-weight:bold;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="background-color:#8A2BE2 ;color: #fff;text-align: center;font-size: 2em;font-weight:bold;">Mostra Preço</h4>
      </div>
      <div class="modal-body">
      <h2  style="text-align: center;font-size: 1.8em;font-weight:bold;">Editar Anúncio </h2>
  <hr>

  <form method="POST" action="acoes/editaAnuncio.php" enctype="multipart/form-data">

    <input type="hidden" name="idAnuncio" value="<?php echo $dados['idAnuncio']; ?>">

    <div class="form-group">
      <label id="for" style="font-weight: bold;">Vendedor :</label>
                    <select  name="idLoja" class="form-control" style="height: 40px;">
                     <option value="">Loja em que o produto está</option>

                   <?php
                   require_once conexao;

                    $sql = "SELECT * FROM lojas WHERE idPessoa = $idPessoa";
                    $executa = $mysqli->query($sql);
                      while( $loja = $executa->fetch_assoc()){?>

                      <option value="<?php echo $loja['idLoja'];?>" <?php if($loja['idLoja'] == $dados['idLoja']){echo "selected";} ?> > <?php echo @$loja['NomeLoja'];?> </option>
                   <?php  }?>
                   </select>
    </div>

    <div class="form-group">
      <label id="for" style="font-weight: bold;">Produto :</label>
                    <select  name="idProduto" class="form-control" style="height: 40px;">
                     <option value="">Selecione um produto</option>

                   <?php

                    $sql = "SELECT * FROM produtos ORDER BY NomeProduto ASC";
                    $executa = $mysqli->query($sql);
                      while( $produto = $executa->fetch_assoc()){?>

                      <option value="<?php echo $produto['idProduto'];?>" <?php if($produto['idProduto'] == $dados['idProduto']){echo "selected";} ?>> <?php echo @$produto['NomeProduto'];?> </option>
                   <?php  }?>
                   </select>
    </div>

    <div class="form-group">
      <label id="for" style="font-weight: bold;">Descrição :</label> <br>
                    <textarea name="Descricao" rows="8" cols="80" class="form-control"><?php echo $dados['DescricaoAnuncio'] ?></textarea>
    </div>

    <div class="form-group">
      <label id="for" style="font-weight: bold;">Preço :</label>
      <input type="number" name="Preco" step="0.01" value="<?php echo $dados['Preco'] ?>" class="form-control" style="height: 40px;" >
    </div>




  <!-- colocar na mesma linha -->


    <div class="form-group">
      <label id="for" style="font-weight: bold;">Desconto em R$ :</label>
      <input type="number" name="Desconto" step="0.01" value="<?php echo $dados['Desconto'] ?>" class="form-control" style="height: 40px;" >
    </div>

    <!-- <div class="form-group">
      <label id="for" style="font-weight: bold;">Desconto em % :</label>
      <input type="number" name="Desconto" step="5" value="" class="form-control" style="height: 40px;" >
    </div> -->



    <!-- colocar na mesma linha -->



    <div class="form-group">
      <label id="for" style="font-weight: bold;">Valido de :</label>
      <input type="date" name="ValidoDe" step="0.01" value="<?php echo $dados['ValidoDe']; ?>" class="form-control" style="height: 40px;">
    </div>

    <div class="form-group">
      <label id="for" style="font-weight: bold;">Valido até :</label>
      <input type="date" name="ValidoAte" step="0.01" value="<?php echo $dados['ValidoAte']; ?>" class="form-control" style="height: 40px;">
    </div>

    <?php
    $idProduto = $dados['idProduto'];
    $queryImagem="SELECT Caminho FROM imagensprodutos WHERE idProduto = $idProduto AND idPessoa = $idPessoa";

    $executaQueryImagem = $mysqli->query($queryImagem);

    $dados = $executaQueryImagem->fetch_assoc();

    if ($dados['Caminho'] != "padraoProdutos.jpeg") {
      echo "<div class='alert' style='font-weight:bold;font-size:12px;text-align:justify;'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Você já cadastrou uma imagem para este anuncio, deixe este campo em branco para mantê-la ou selecione uma nova.
    </div>";
    } ?>

    <div class="form-group">
      <label style="font-weight: bold;">Imagem :</label>
      <input type="file" name="ImagemProduto" value="" class="form-control" style="height: 40px;">
    </div>

<hr>
<div class="row">
   <div class="footer col-md-5 col-md-offset-4 col-xs-12 col-xs-offset-3" >

<input type="submit" class="btn  btn-lg " style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;">

<input type="reset" class="btn  btn-lg" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;">

<!-- <button type="button" class="btn  btn-lg" data-dismiss="modal" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;">Fechar</button> -->

 </div>
</div>


  </form>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
