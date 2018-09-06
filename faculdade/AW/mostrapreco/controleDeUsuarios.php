<?php
require_once "includes/config.php";
@$idUsuario = $_SESSION['idUsuario'];
include funcoesPhp;
$_SESSION['pagina'] = "controleDeUsuarios.php";
$pagina = $_SESSION['pagina'];
include verificaPermissao;
?>
<div class="col-md-10"  style="border: 2px solid lightgray;border-radius: 4px;margin-top: 5px;margin-bottom: 20px;">
<div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top: 20px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Painel de usuarios</h1>

 </div>

<div class="well-lg" style="background-color: #fff;margin-top: 20px;">

      <?php include conexao;


    //num_rows obtem o nº de linhas retornado pela consulta
$queryTotal ="SELECT * FROM usuarios ORDER BY DataTermos DESC";

$executaQueryTotal = $mysqli->query($queryTotal);

  $linhasTotal = $executaQueryTotal->num_rows; ?>

        <?php

 date_default_timezone_set("America/Sao_Paulo");

 $hoje = date("Y-m-d");

$queryHoje ="SELECT idUsuario FROM `usuarios` WHERE date(DataAtivacao)= '$hoje'";

$executaQueryHoje = $mysqli->query($queryHoje);

  $linhasHoje = $executaQueryHoje->num_rows; ?>


        <?php

$queryPj ="SELECT idUsuario FROM `usuarios` WHERE TipoUsuario='Organização'";

$executaQueryPj = $mysqli->query($queryPj);

$linhasPj = $executaQueryPj->num_rows;

$queryPf ="SELECT idUsuario FROM `usuarios` WHERE TipoUsuario='Cliente'";

$executaQueryPf = $mysqli->query($queryPf);

  $linhasPf = $executaQueryPf->num_rows;

  $queryInativos ="SELECT * FROM usuarios WHERE CodAtivacao IS NOT NULL AND DataAtivacao IS NULL";

  $executaQueryInativos = $mysqli->query($queryInativos);

  $linhasInativos = $executaQueryInativos->num_rows;
     ?>


        <div class="row">
        <div class="col-md-10 col-md-offset-1 " style="margin-bottom:10px;">

        	<canvas id="myChartD" width="100" height="60"></canvas>
        	<script>
        	var ctx = document.getElementById("myChartD").getContext('2d');
        	var myChartD = new Chart(ctx, {
        	    type: 'bar',
        	    data: {
        	        labels: ["Total", "Hoje", "Empresas", "Usuário  PF", "Inativos"],
        	        datasets: [{
        	            label: 'Quantidade ',
        	            data: [<?php echo $linhasTotal; ?>, <?php echo $linhasHoje; ?>, <?php echo $linhasPj; ?>, <?php echo $linhasPf; ?>, <?php echo $linhasInativos ?>],
        	            backgroundColor: [
        	                'rgba(255, 99, 132, 0.2)',
        	                'rgba(54, 162, 235, 0.2)',
        	                'rgba(255, 206, 86, 0.2)',
        	                'rgba(75, 192, 192, 0.2)',
        	                'rgba(153, 102, 255, 0.2)',
        	                'rgba(255, 159, 64, 0.2)'
        	            ],
        	            borderColor: [
        	                'rgba(255,99,132,1)',
        	                'rgba(54, 162, 235, 1)',
        	                'rgba(255, 206, 86, 1)',
        	                'rgba(75, 192, 192, 1)',
        	                'rgba(153, 102, 255, 1)',
        	                'rgba(255, 159, 64, 1)'
        	            ],
        	            borderWidth: 1
        	        }]
        	    },
        	    options: {
        	        scales: {
        	            yAxes: [{
        	                ticks: {
        	                    beginAtZero:true
        	                }
        	            }]
        	        }
        	    }
        	});
        	</script>


        </div>
</div>
<hr>
</div>




  <?php



    if($linhasTotal>0){

        ?>

      <?php

$query="SELECT * FROM pessoas
INNER JOIN usuarios ON pessoas.idPessoa = usuarios.idPessoa
INNER JOIN emails ON pessoas.idPessoa = emails.idPessoa";
$executa=$mysqli->query($query);

$erro=$mysqli->error;

if(empty($erro)){
  ?>
  
     <table class="table table-striped table-responsive center-block" id="tabUsuarios">
    <thead>
      <tr>

        <th>Nome</th>
        <th>Ativo</th>
        <th>Tipo</th>
        <th>Detalhes</th>
      </tr>
    </thead>
   <tbody>

<?php
  while ($dados=$executa->fetch_assoc()) { ?>



<tr>

        <td style="min-width: 220px;">
          <p><?php echo $dados['NomeExibicao']; ?></p>
        </td>
        <td style="min-width: 220px;"><?php if(!empty($dados['DataAtivacao'])){
          echo "SIM";
        }
        else{
          echo "NÃO";
        }
          ?>
        </td style="min-width: 220px;">

        <td style="min-width: 220px;"><?php echo $dados['TipoUsuario']; ?></td>

        <td style="min-width: 220px;"><?php include "visualizaUsuarios.php"; ?></td>

      </tr>




<?php

} //fim for paginacao

}

 ?>
</tbody>

  </table>


        <?php
      }//fim do if

      else{
        echo "<h3 class='text-center'>Nenhuma marca cadastrada</h3>";
      }


 ?>


</div>


</div>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    <script>$(document).ready(function(){
      $('#tabUsuarios').DataTable();
      });
    </script>
