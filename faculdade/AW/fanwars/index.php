<!DOCTYPE html>
<html>
	<head>
		<title>Fan Wars - Bem vindo</title>
		<meta charset="utf-8">
    <meta name="author" content="Matheus Gouveia">

		<?php 
			//o arquivo config.php é onde são definidas as constantes do projeto
			include "includes/config.php";
			//A constante HEADERS tem o caminho do arquivo headers.php que é onde estão os links do projeto
			include HEADERS; 
		?>
    <link rel="stylesheet" type="text/css" href="css/resetBody.css">
	</head>

	<body class="resetBody">
		<?php include TOPO; ?>

		<section id="principal">
			<!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
          <img class="img-fluid rounded" src="imagens/sw.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h1>Teorias para o episódio IX</h1>
          <p>Oscar Isaac, que interpreta o piloto da Resistência Poe Dameron desde Star Wars: O Despertar da Força, revelou que Star Wars: Episódio 9 lida com Leia, personagem de Carrie Fisher, de uma "forma realmente linda".</p>
          <a class="btn btn-primary btn-lg" href="https://br.ign.com/star-wars-episode-ix/68558/news/star-wars-episodio-9-lida-com-legado-de-carrie-fisher-de-for" target="blank">Ver notícia</a>
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->

      <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">Discussões em alta</p>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Solo</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer">
              <a href="filmes.php" class="btn btn-primary">Discussão</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Episódio VIII</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
            </div>
            <div class="card-footer">
              <a href="filmes.php" class="btn btn-primary">Discussão</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Rogue One</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer">
              <a href="filmes.php" class="btn btn-primary">Discussão</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
		</section>

		<?php include RODAPE; ?>
	</body>
</html>