<?php
@session_start();
require_once "includes/config.php";
$_SESSION['pagina'] = "cadastraMarca.php";
$idPessoa = $_SESSION['idPessoa'];
include verificaPermissao;
 ?>
<div class="col-md-10" style="background-color:#FFF;">

  <button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome')" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Nova Marca</button>

  <div id="DivQueSome" class="well-lg" style="background-color: #fff;margin-top: 20px;display:none;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">

    <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Cadastrar Marca</h1>

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

   <form method="POST" action="acoes/executaCadastraMarca.php" enctype="multipart/form-data">
 <div class="form-group">
 <label style="font-weight: bold;">Nome da Marca:<span class="asterisco" style="color:	#9400D3;">*</span></label>
 <input type="text" id="NomeMarca" name="NomeMarca" required size="25" class="form-control" style="height: 40px;">
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

    <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Marcas cadastradas</h1>

    </div>
    <?php

    include conexao;

      //num_rows obtem o nº de linhas retornado pela consulta
  $query ="SELECT * FROM `marcas`";

  $executaQuery = $mysqli->query($query);

    $linhas = $executaQuery->num_rows;

      if($linhas>0){
          ?>
                   <table class=" table table-striped table-responsive center-block" id="tabCategorias" style="margin-top: -10px;">
      <thead>
        <tr>

          <th style="width: 300px;">Nome</th>
           <!-- <th>Detalhes</th> -->
          <th style="width: 300px;">Editar</th>
          <th style="width: 300px;">Excluir</th>
        </tr>
      </thead>
     <tbody>
                  <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
         while($dados= $executaQuery->fetch_assoc())
        {//inicio do while?>
              <tr>

          <td><?php echo $dados['NomeMarca']; ?></td>
         <!--  <td><button class="btn  btn-sm">Detalhes</button></td> -->
          <td><button class="btn-warning  btn-sm" style="color: #fff;">Editar</button></td>
           <td><a href="acoes/excluiMarca.php?idMarca=<?php echo $dados['idMarca']; ?>"><button class="btn btn-danger btn-sm" style="color: #fff;">Excluir</button></a></td>
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
