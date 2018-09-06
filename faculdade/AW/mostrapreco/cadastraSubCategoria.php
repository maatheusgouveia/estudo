<?php
@session_start();
require_once "includes/config.php";
require_once conexao;
$_SESSION['pagina'] = "cadastraSubCategoria.php";
$idPessoa = $_SESSION['idPessoa'];
include verificaPermissao; ?>
<div class="col-md-10" style="background-color:#FFF;">

  <button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome')" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Nova Subcategoria</button>

  <div id="DivQueSome" class="well-lg" style="background-color: #fff;margin-top: 20px;display:none;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">

    <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Cadastrar Subcategoria</h1>

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

   <form method="POST" action="acoes/executaCadastraSubCategoria.php" enctype="multipart/form-data">
 <div class="form-group">
 <label style="font-weight: bold;">Nome da Subcategoria:<span class="asterisco" style="color:	#9400D3;">*</span></label>
 <input type="text" id="NomeSubCategoria" name="NomeSubCategoria" required size="25" class="form-control" style="height: 40px;">
 </div>

 <div class="form-group">
 <label id="for" style="font-weight: bold;">Selecione a Categoria :</label>
                <select  name="idCategoria" class="form-control" style=" border: 1px solid #eee;height: 40px;">
                	<option value="">Selecione uma Categoria</option>

               <?php

                echo $sql_categoria = "SELECT * FROM  categorias ORDER BY  NomeCategoria  ASC";
                $exe_categoria = $mysqli->query($sql_categoria);
                 while( $categoria = $exe_categoria->fetch_assoc()){?>

                  <option value="<?php echo $categoria['idCategoria'];?>" > <?php echo @$categoria['NomeCategoria'];?> </option>
                  <?php  }?>
               </select>
 </div>

<div class="">
    <input type="submit" class="btn  btn-lg  " style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;color: #fff;">

      <input type="reset" class="btn  btn-lg" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;color: #fff;">


      <button type="button" class="btn  btn-lg" data-dismiss="modal" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;margin-bottom: 10px;margin-top: 35px;color: #fff; ">Fechar</button>

</div>
      </form>

</div>

  <div class="well-lg" style="background-color: #fff;margin-top: 20px;min-height:;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">
     <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

    <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Subcategorias cadastradas</h1>

    </div>
    <?php

      //num_rows obtem o nº de linhas retornado pela consulta
  $query ="SELECT * FROM subcategorias
  INNER JOIN categorias ON subcategorias.idCategoria = categorias.idCategoria";

  $executaQuery = $mysqli->query($query);

    $linhas = $executaQuery->num_rows;

      if($linhas>0){
          ?>
                   <table class=" table table-striped table-responsive center-block" id="tabCategorias" style="margin-top: -10px;">
      <thead>
        <tr>

          <th style="width: 200px;">Nome</th>
          <th style="width: 200px;">Categoria</th>
          <th style="width: 200px;">Editar</th>
          <th style="width: 200px;">Excluir</th>
        </tr>
      </thead>
     <tbody>
                  <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
         while($dados= $executaQuery->fetch_assoc())
        {//inicio do while?>
              <tr>

          <td><?php echo $dados['NomeSubCategoria']; ?></td>
          <td><?php echo $dados['NomeCategoria']; ?></td>
          <td><button class="btn-warning  btn-sm" style="color: #fff;">Editar</button></td>
          <td><a href="excluiSubCategoria.php?idSubCategoria=<?php echo $dados['idSubCategoria']; ?>"><button class="btn btn-danger btn-sm" style="color: #fff;">Excluir</button></a></td>
        </tr>
        <?php }   //fim do while


        }//fim do if
        else{
          echo "<div class='col-sm-4 col-sm-offset-4'><h3 class='text-center'>Nenhuma loja cadastrada</h3></div>";
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
