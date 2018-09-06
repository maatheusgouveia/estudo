<!-- Gráficos -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- Gráficos -->

<?php
require_once "includes/config.php";
require_once conexao;
require_once funcoesPhp; ?>
<?php
@session_start();

$idPessoa = $_SESSION['idPessoa'];

$_SESSION['pagina'] = "feedback.php";

$pagina = $_SESSION['pagina'];

require_once "includes/config.php";

?>
<div class="container-fluid">

 <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top: 20px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Feedback</h1>

 </div>

<button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome')" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Diário</button>

<button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome2');" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Mensal</button>

<button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome3');" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Anual</button>

<div class="row" id="DivQueSome" style="margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-top: 20px;"> <!-- row desempenho diário -->

<div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top: 20px;margin-left: 10px;margin-right: 10px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Feedback <?php echo formatadata(date("Y-m-d")); ?></h1>

 </div>


   <?php
   date_default_timezone_set("America/Sao_Paulo");

   $hoje = date("Y-m-d");

   $mesAtual = date("m");

   $anoAtual = date("Y");


   $queryFavoritosHoje ="SELECT * FROM `favoritos`
INNER JOIN lojas ON favoritos.idLoja = lojas.idLoja
INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
WHERE lojas.idPessoa = $idPessoa AND date(DataFavorito)= '$hoje'";

   $executaQueryFavoritosHoje = $mysqli->query($queryFavoritosHoje);

   $FavoritosHoje = $executaQueryFavoritosHoje->num_rows;


   $queryComentariosHoje ="SELECT * FROM `comentarios`
INNER JOIN lojas ON comentarios.idLoja = lojas.idLoja
INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
WHERE date(DataComentario)= '$hoje' AND lojas.idPessoa = $idPessoa";

   $executaQueryComentariosHoje = $mysqli->query($queryComentariosHoje);

   $ComentariosHoje = $executaQueryComentariosHoje->num_rows;


   $queryVisualizadosHoje ="SELECT * FROM `visualizados`
INNER JOIN anuncios ON visualizados.idAnuncio = anuncios.idAnuncio
INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
WHERE lojas.idPessoa = $idPessoa AND date(DataVisualizado)= '$hoje'";

   $executaQueryVisualizadosHoje = $mysqli->query($queryVisualizadosHoje);

   $VisualizadosHoje = $executaQueryVisualizadosHoje->num_rows;


   $queryVisualizacoesDePerfilHoje ="SELECT * FROM `visualizacoesperfil`
   INNER JOIN lojas ON visualizacoesperfil.idLoja = lojas.idLoja
   INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
   WHERE date(DataVisualizacao)= '$hoje' AND lojas.idPessoa = $idPessoa";

   $executaQueryVisualizacoesDePerfilHoje = $mysqli->query($queryVisualizacoesDePerfilHoje);

   $VisualizacoesDePerfilHoje = $executaQueryVisualizacoesDePerfilHoje->num_rows;


    ?>


<div class="col-md-10 col-md-offset-1">


	<canvas id="myChartD" width="100" height="60"></canvas>
	<script>
	var ctx = document.getElementById("myChartD").getContext('2d');
	var myChartD = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["Favoritos", "Comentários", "Anúncios visualizados", "Cliques no Perfil"],
	        datasets: [{
	            label: 'Quantidade ',
	            data: [<?php echo $FavoritosHoje; ?>, <?php echo $ComentariosHoje; ?>, <?php echo $VisualizadosHoje; ?>, <?php echo $VisualizacoesDePerfilHoje; ?>],
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
	            borderWidth: 1,

				height:['60'],
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



</div><!-- row desempenho diário -->

<!-- fim desempenho diário -->

<!-- inicio desempenho mensal	 -->

<div class="row" id="DivQueSome2" style="display:none;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-top: 20px;"> <!-- row desempenho mensal -->

<div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top: 20px;margin-left: 10px;margin-right: 10px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Feedback <?php echo converteMes(date('n')); ?></h1>

 </div>

<div class="col-md-10 col-md-offset-1" >

  <?php
  $queryFavoritosMes ="SELECT * FROM `favoritos`
INNER JOIN lojas ON favoritos.idLoja = lojas.idLoja
INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
WHERE lojas.idPessoa = $idPessoa AND date(DataFavorito) BETWEEN '$anoAtual-$mesAtual-01' AND '$anoAtual-$mesAtual-31'";

  $executaQueryFavoritosMes = $mysqli->query($queryFavoritosMes);

  $FavoritosMes = $executaQueryFavoritosMes->num_rows;


  $queryComentariosMes ="SELECT * FROM `comentarios`
INNER JOIN lojas ON comentarios.idLoja = lojas.idLoja
INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
WHERE date(DataComentario) BETWEEN '$anoAtual-$mesAtual-01' AND '$anoAtual-$mesAtual-31' AND lojas.idPessoa = $idPessoa";

  $executaQueryComentariosMes = $mysqli->query($queryComentariosMes);

  $ComentariosMes = $executaQueryComentariosMes->num_rows;


  $queryVisualizadosMes ="SELECT * FROM `visualizados`
INNER JOIN anuncios ON visualizados.idAnuncio = anuncios.idAnuncio
INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
WHERE lojas.idPessoa = $idPessoa AND date(DataVisualizado)BETWEEN '$anoAtual-$mesAtual-01' AND '$anoAtual-$mesAtual-31'";

  $executaQueryVisualizadosMes = $mysqli->query($queryVisualizadosMes);

  $VisualizadosMes = $executaQueryVisualizadosMes->num_rows;


  $queryVisualizacoesDePerfilMes ="SELECT * FROM `visualizacoesperfil`
  INNER JOIN lojas ON visualizacoesperfil.idLoja = lojas.idLoja
  INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
  WHERE date(DataVisualizacao)BETWEEN '$anoAtual-$mesAtual-01' AND '$anoAtual-$mesAtual-31' AND lojas.idPessoa = $idPessoa";

  $executaQueryVisualizacoesDePerfilMes = $mysqli->query($queryVisualizacoesDePerfilMes);

  $VisualizacoesDePerfilMes = $executaQueryVisualizacoesDePerfilMes->num_rows;
   ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js">

	</script>
	<canvas id="myChartM" width="100" height="60" ></canvas>
	<script>
	var ctx = document.getElementById("myChartM").getContext('2d');
	var myChartM = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["Favoritos", "Comentários", "Anúncios visualizados", "Cliques no perfil"],
	        datasets: [{
	            label: 'Quantidade ',
	            data: [<?php echo $FavoritosMes; ?>, <?php echo $ComentariosMes; ?>, <?php echo $VisualizadosMes; ?>, <?php echo $VisualizacoesDePerfilMes; ?>],
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



</div> <!-- row desempenho mensal -->

<!-- fim desempenho mensal -->

<!-- inicio desempenho anual	 -->

<div class="row" id="DivQueSome3" style="display:none;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-top: 20px;"> <!-- row desempenho anual -->

	<div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top: 20px;margin-left: 10px;margin-right: 10px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Feedback <?php echo $anoAtual; ?></h1>

 </div>

 <?php
 $queryFavoritosAno ="SELECT * FROM `favoritos` WHERE date(DataFavorito) BETWEEN '$anoAtual-01-01' AND '$anoAtual-12-31'";

 $executaQueryFavoritosAno = $mysqli->query($queryFavoritosAno);

 $FavoritosAno = $executaQueryFavoritosAno->num_rows;


 $queryComentariosAno ="SELECT * FROM `comentarios` WHERE date(DataComentario) BETWEEN '$anoAtual-01-01' AND '$anoAtual-12-31'";

 $executaQueryComentariosAno = $mysqli->query($queryComentariosAno);

 $ComentariosAno = $executaQueryComentariosAno->num_rows;

 $queryVisualizadosAno ="SELECT * FROM `visualizados`
INNER JOIN anuncios ON visualizados.idAnuncio = anuncios.idAnuncio
INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
WHERE lojas.idPessoa = $idPessoa AND date(DataVisualizado)BETWEEN '$anoAtual-01-01' AND '$anoAtual-12-31'";

 $executaQueryVisualizadosAno = $mysqli->query($queryVisualizadosAno);

 $VisualizadosAno = $executaQueryVisualizadosAno->num_rows;


 $queryVisualizacoesDePerfilAno ="SELECT * FROM `visualizacoesperfil`
 INNER JOIN lojas ON visualizacoesperfil.idLoja = lojas.idLoja
 INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
 WHERE date(DataVisualizacao)BETWEEN '$anoAtual-01-01' AND '$anoAtual-12-31' AND lojas.idPessoa = $idPessoa";

 $executaQueryVisualizacoesDePerfilAno = $mysqli->query($queryVisualizacoesDePerfilAno);

 $VisualizacoesDePerfilAno = $executaQueryVisualizacoesDePerfilAno->num_rows;
  ?>

<div class="col-md-10 col-md-offset-1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js">

	</script>
	<canvas id="myChartA" width="100" height="60" ></canvas>
	<script>
	var ctx = document.getElementById("myChartA").getContext('2d');
	var myChartA = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["Favoritos", "Comentários", "Anúncios visualizados", "Cliques no perfil"],
	        datasets: [{
	            label: 'Quantidade ',
	            data: [<?php echo $FavoritosAno; ?>, <?php echo $ComentariosAno; ?>, <?php echo $VisualizadosAno; ?>, <?php echo $VisualizacoesDePerfilAno; ?>],
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



</div> <!-- row desempenho aanual -->

<!-- fim desempenho anual -->



</div>


             <script>$(document).ready(function(){
    $('#tabFeedback').DataTable();
});</script>



</div>


</div>

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
