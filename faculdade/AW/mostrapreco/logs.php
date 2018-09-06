<?php
@session_start();
require_once "includes/config.php";
$_SESSION['pagina'] = "logs.php";
$idPessoa = $_SESSION['idPessoa'];
include verificaPermissao;
 ?>

  <div class="well-lg" style="background-color: #fff;margin-top: 5px;min-height:;border: 2px solid lightgray;border-radius: 5px;">

     <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">
    <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 10px;">Logs de Usuários</h1>

    </div>

    <?php

    include conexao;

    include funcoesPhp;

      //num_rows obtem o nº de linhas retornado pela consulta
  $queryLogs ="SELECT NomeExibicao,DataHora,Acao FROM `logs`
INNER JOIN usuarios ON logs.idUsuario = usuarios.idUsuario
ORDER BY DataHora DESC";

  $executaQueryLogs = $mysqli->query($queryLogs);

    $linhasL = $executaQueryLogs->num_rows;

      if($linhasL>0){
          ?>
                   <table class=" table table-striped table-responsive center-block" id="tabLogs" style="margin-top: -10px;">
      <thead>
        <tr>
          <th style="width: 200px;">Usuário</th>
          <th style="width: 200px;">Ação</th>
          <th style="width: 200px;">Data</th>
          <th style="width: 200px;">Hora</th>
        </tr>
      </thead>
     <tbody>
                  <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
         while($dadosL= $executaQueryLogs->fetch_assoc())
        {//inicio do while?>
              <tr>

          <td><?php echo $dadosL['NomeExibicao']; ?></td>
          <td><?php echo $dadosL['Acao']; ?></td>
          <td><?php echo formataData($dadosL['DataHora']); ?></td>
          <td><?php echo mostraHora($dadosL['DataHora']); ?></td>

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
      $('#tabLogs').DataTable();
      });
    </script>

  </div>
