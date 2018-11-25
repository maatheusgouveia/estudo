<!DOCTYPE html>
<html>
	<head>
		<title>Fan Wars - Novidades</title>
		<meta charset="utf-8">
		<meta name="author" content="Osni de Oliveira Melo">
		<?php
			//o arquivo config.php é onde são definidas as constantes do projeto
			include "includes/config.php";
		?>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/css/novfilStyle.css">
		<?php
			//A constante HEADERS tem o caminho do arquivo headers.php que é onde estão os links do projeto
			include HEADERS; 
		?>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/css/novidades.css">
	</head>
	<body class="body">
		<?php include TOPO; ?>
		<section id="principal">
			<div class="container">
		<!-- Content Row -->
		      <div class="row">	
		        <div class="col-md-14 mb-4 margin-15pxTop">
		          <div class="card h-100">
		            <div class="card-body">
		            	<div class="col-lg-13 capa">
			          		<img class="img-fluid rounded" src="<?php echo URL?>/imagens/novidades/disney.jpg" alt="">
			        	</div>
			        	<div>
		              		<a href="<?php echo URL?>/novidades/Disney-recuperou-os-US$4bilhões-que-pagou-pela-Lucasfilm-só-com-Star-Wars.php" class="linkNovidade"><h2 class="card-title">Disney recuperou os US$ 4 bilhões que pagou pela Lucasfilm só com Star Wars</h2></a>
		              		<p class="textFont">06 nov 2018 - 11h 52</p>
		              	</div>
		            </div>
		          </div>
		        </div>

		        <div class="col-md-14 mb-4 divc">
		          <div class="card h-100">
		            <div class="card-body">
		            	<div class="col-lg-13 capa">
			          		<img class="img-fluid rounded" src="<?php echo URL?>/imagens/novidades/capacete.jpg" alt="">
			        	</div>
			        	<div>
		              		<a href="<?php echo URL?>/novidades/Star-Wars-Capacete-original-de-Darth-Vader-vai-a-leilão.php" class="linkNovidade"><h2 class="card-title">Star Wars: Capacete original de Darth Vader vai a leilão</h2></a>
		              		<p class="textFont">01 nov 2018 - 18h 00</p>
		              	</div>
		            </div>
		          </div>
		        </div>

		        <div class="col-md-14 mb-4 divc">
		          <div class="card h-100">
		            <div class="card-body">
		            	<div class="col-lg-13 capa">
			          		<img class="img-fluid rounded" src="<?php echo URL?>/imagens/novidades/novaserie.jpg" alt="">
			        	</div>
			        	<div>
		              		<a href="<?php echo URL?>/novidades/Nova-série-sobre-Star-Wars-vai-se-chamar-The-Mandalorian.php" class="linkNovidade"><h2 class="card-title">Nova série sobre Star Wars vai se chamar The Mandalorian</h2></a>
		              		<p class="textFont">04 out 2018 - 16h 00</p>
		              	</div>
		            </div>
		          </div>
		        </div>
		        <!-- /.col-md-4 -->

		      </div>
			</div>
		</section>
		<?php include RODAPE; ?>
	</body>
</html>