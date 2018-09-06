<?php
  @session_start();
  require_once "includes/config.php";
  $_SESSION['pagina'] = "cadastraProduto.php";
  $idPessoa = $_SESSION['idPessoa'];
  $idUsuario = $_SESSION['idUsuario'];
  include verificaPermissao;
  require_once conexao;
?>
<script src="<?php echo funcoesJs; ?>"></script>
<div class="col-md-10" style="background-color:#FFF;">

  <button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome')" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Novo Produto</button>

  <div id="DivQueSome" class="well-lg" style="background-color: #fff;margin-top: 20px;display:none;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">

      <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

        <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Cadastrar Produto</h1>

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

       <form method="post" action="acoes/executaProduto.php" class="form-group" enctype="multipart/form-data">
            <div class="form-group">
                 <label style="font-weight: bold;">Nome Produto:<span class="asterisco" style="color:	#9400D3;">*</span></label>
                 <input type="text" name="NomeProduto" class="form-control form" size="50" autofocus placeholder="Nome do Produto" required style="height: 40px;">
            </div>

      <div class="form-group">
       <label id="for" style="font-weight: bold;">Selecione a Categoria :</label>
                      <select  name="idCategoria" class="form-control"  onchange="javascript:enviaDados(this.value,'subcategorias','subcategoria');" style="height: 40px;">
      <option value="">Selecione uma Categoria</option>
                     <?php

                      echo $sql_categoria = "SELECT * FROM  categorias ORDER BY  NomeCategoria  ASC";
                      $exe_categoria = $mysqli->query($sql_categoria);
                       while( $categoria = $exe_categoria->fetch_assoc()){?>

                        <option value="<?php echo $categoria['idCategoria'];?>" > <?php echo @$categoria['NomeCategoria'];?> </option>
                        <?php  }?>
                     </select>
      </div>

<div class="form-group">
 <label id="for" style="font-weight: bold;">Selecione a Subcategoria :</label>
                <select  name="idSubCategoria" class="form-control" id="subcategoria" style="height: 40px;">
                  <option value="">Selecione uma Subcategoria</option>

                </select>
</div>

<div class="form-group">
 <label style="font-weight: bold;">Descrição:</label>
 <textarea name="DescricaoProduto" id="" cols="30" rows="5" class="form-control form" placeholder="Descrição do produto " ></textarea>
</div>

<div class="form-group">
  <label id="for" style="font-weight: bold;">Selecione a Marca :</label>
                <select  name="idMarca" class="form-control" style="height: 40px;">

                 <?php
                echo $sql_marca = "SELECT * FROM  marcas ORDER BY  NomeMarca  ASC";
                $exe_marca = $mysqli->query($sql_marca);
                while( $marca = $exe_marca->fetch_assoc()){?>

                <option value="<?php echo $marca['idMarca'];?>" > <?php echo @$marca['NomeMarca'];?> </option>
                <?php  }?>
                </select>
</div>
<div class="row">

          <label id="for" style="font-weight: bold;margin-left:15px;">Selecione a Quantidade :</label>
          <div class="form-group">
          <div class="row">
           <div class="col-md-5 col-xs-5">
            <input type="number" name="QuantidadeProduto" placeholder="Quantidade" class="col-md-12" style="height: 40px;margin-left:14px;border-radius:5px;">
           </div>

          <div class="col-md-6 col-xs-4">
                          <select  name="idUnidadeMedida" class="col-md-12" style="height: 40px;border-radius:5px;">

                           <?php
                          $sql_unidadeMedida = "SELECT * FROM  unidadesmedida ORDER BY  NomeUnidadeMedida  ASC";
                          $exe_unidadeMedida = $mysqli->query($sql_unidadeMedida);
                          while( $idUnidadeMedida = $exe_unidadeMedida->fetch_assoc()){?>

                          <option value="<?php echo $idUnidadeMedida['idUnidadeMedida'];?>" > <?php echo @$idUnidadeMedida['NomeUnidadeMedida'];?> </option>
                          <?php  }?>
                          </select>
          </div> 
          </div>               
          </div>
          </div>

          <div class="form-group">
           <label style="font-weight: bold;margin-top:20px;">Código de barras:</label>
           <input type="text" name="CodBarras" class="form-control form" style="height: 40px;">

          </div>

<div class="form-group">
 <label style="font-weight: bold;">Imagem do Produto:</label>
 <input type="file" name="imagemProduto" class="form-control form" style="height: 40px;">

</div>

<input type="submit" class="btn btn btn-lg  " style=" background-color: #8A2BE2;color: #fff;border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;">

       <input type="reset" class="btn btn btn-lg" style=" background-color: #8A2BE2;color: #fff;border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;">

       </form>

</div>

  <div class="well-lg" style="background-color: #fff;margin-top: 20px;min-height:;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">
     <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

    <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Produtos cadastrados</h1>

    </div>
    <?php

    include conexao;

      //num_rows obtem o nº de linhas retornado pela consulta
  $queryAnuncio ="SELECT * FROM `produtos`
INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
INNER JOIN subcategorias ON produtos.idSubCategoria = subcategorias.idSubCategoria
INNER JOIN categorias ON subcategorias.idCategoria = categorias.idCategoria
INNER JOIN unidadesmedida ON produtos.idUnidadeMedida = unidadesmedida.idUnidadeMedida";

  $executaQuery = $mysqli->query($queryAnuncio);

    $linhas = $executaQuery->num_rows;

      if($linhas>0){
          ?>
                   <table class=" table table-striped table-responsive center-block" id="tabCategorias" style="margin-top: -10px;">
      <thead>
        <tr>

          <th style="width: 200px;">Nome</th>
          <th style="width: 200px;">Detalhes</th>
          <th style="width: 200px;">Editar</th>
          <th style="width: 200px;">Excluir</th>
        </tr>
      </thead>
     <tbody>
                  <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
         while($dados= $executaQuery->fetch_assoc())
        {//inicio do while?>
              <tr>

          <td><?php echo $dados['NomeProduto']; ?></td>
          <td><button class="btn-info  btn-sm">Detalhes</button></td>
          <td><button class="btn-warning btn-sm" style="color: #fff;">Editar</button></td>
          <td><a href="acoes/excluiProduto.php?idProduto=<?php echo base64_encode($dados['idProduto']); ?>"><button class="btn-danger  btn-sm" style="color: #fff;">Excluir</button></a></td>
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
      $('#tabCategorias').DataTable();
      });
    </script>

  </div>

</div>
