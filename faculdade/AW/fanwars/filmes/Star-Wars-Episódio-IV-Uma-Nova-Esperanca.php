<!DOCTYPE html>
<html>
	<head>
		<title>Filmes - Star Wars Episódio IV: Uma Nova Esperança</title>
		<meta charset="utf-8">
		<meta name="author" content="Alan">
		<?php 
			//o arquivo config.php é onde são definidas as constantes do projeto
			include "../includes/config.php";
		?>
		<link rel="stylesheet" type="text/css" href="<?php echo URL ?>/css/novfilStyle.css">
		<?php
			//A constante HEADERS tem o caminho do arquivo headers.php que é onde estão os links do projeto
			include HEADERS; 
		?>
		<link rel="stylesheet" type="text/css" href="<?php echo URL ?>/css/bootstrapEdit.css">
	</head>
	<body>
		<button onclick="topFunction()" id="myBtn" class="btn-dark" title="Go to top">Top</button>

		<?php include TOPO; ?>

		<section id="principal">
			<div class="container" align="center">
		<!-- Content Row -->
		      	<div class="row">

					<div class="col-md-14 mb-4 div-filmes div-principal">
		         		<div class="card h-100">
		       				<div class="filmesTitulo">
				        		<h4>Star Wars Episódio IV: Uma Nova Esperança</h4>
		              		</div>
							<div class="row my-4 tirarMarginRow">
							    <div class="col-lg-3 filmesCapa" >
							    	<img class="img-fluid rounded" src="<?php echo URL ?>/imagens/filmes/Uma Nova Esperança/Uma Nova Esperança - Capa.png">
							    </div>
							    <div class="filmesUlInfos col-lg-9">
							    	<ul>
							    		<li><span class="negrito">Título Traduzido:</span> Star Wars Episódio IV: Uma Nova Esperança</li>
							    		<li><span class="negrito">Título Original:</span> Star Wars: Episode IV - A New Hope</li>
										<br>
										<li><span class="negrito">Gênero:</span> Ação, Aventura, Drama, Ficção Científica, Guerra</li>
										<li><span class="negrito">Ano de Lançamento:</span> 1977</li>
										<li><span class="negrito">Duração:</span> 2h 1 Min.</li>
										<li><span class="negrito">País de origem:</span> EUA</li>
							    	</ul>
							    </div>
							</div>
							<div class="divFilmeSinopse">
								<div class="linkFilmeSinopse">
									<ul>
										<li><span class="linkFilmeSinopseTexto">Sinopse:</span></li>
											<li>					
											<span class="linkFilmeSinopseTextoC">Luke Skywalker sonha ir para a Academia como seus amigos, mas se vê envolvido em uma guerra intergalática quando seu tio compra dois robôs e com eles encontra uma mensagem da princesa Leia Organa para o jedi Obi-Wan Kenobi sobre os planos da construção da Estrela da Morte, uma gigantesca estação espacial com capacidade para destruir um planeta. Luke então se junta aos cavaleiros jedi e a Hans Solo, um mercenário, e junto com membros da resistência tentam destruir esta terrível ameaça.</span>
										</li>
									</ul>
								</div>
								<div class="linkFilmeOpcoes">
									<br>
									<ul>
										<li><span class="btn btn-dark btn-lg btnsInfoFilme" id="btnTrailler">Trailler</span></li>
										<li><span class="btn btn-dark btn-lg btnsInfoFilme" id="btnCritica">Crítica</span></li>
										<li><span class="btn btn-dark btn-lg btnsInfoFilme" id="btnDetalhes">Detalhes</span></li>
										<li><span class="btn btn-dark btn-lg btnsInfoFilme" id="btnCuriosidades">Curiosidades</span></li>
									</ul>
								</div>
								<div id="divTrailler" class="linkFilmeCont">
									<br>
									<div>		              		  
										<span>Trailler:</span>
									</div>
				              		<div class="embed-responsive embed-responsive-16by9">
									  <video width="300" height="220" controls>
										  <source src="<?php echo URL ?>/videos/Trailler - Uma Nova Esperança.mp4" type="video/mp4">
										</video>
									</div>
								</div>

								<div id="divCritica" class="linkFilmeCont">
									<br>
									<div>		              		  
										<span>Crítica:</span>
									</div>
									<div class="linkFilmeCriticaCont">
										<ul>
											<li class="linkFilmeCriticaText">
												<span>
													Em outubro de 2012, meios de comunicação especializados deram uma notícia que pegou a todos de surpresa: Star Wars, a franquia multimilionária de George Lucas, havia sido vendida para a Disney por US$ 4 bilhões, em um negócio que não só consumava a aposentadoria do criador da saga como sinalizava a continuação das histórias da família Skywalker nos cinemas. Passado o susto e sendo bombardeados com notícias diárias sobre o making dos episódios VII, VIII e IX – bem como de filmes separados sobre personagens icônicos – os fãs da série devem se perguntar qual será o resultado final deste retorno da franquia intergaláctica aos cinemas. Teremos produções do nível da trilogia clássica? Ou apenas longas-metragens anabolizados com efeitos especiais como vimos nos episódios I, II e III? Especular o caminho a ser seguido é um exercício de futurologia que não me atreverei a fazer aqui. No entanto, é louvável que tenhamos a oportunidade de conferir a continuação para as aventuras de personagens tão marcantes quanto Luke Skywalker, Han Solo e Princesa Leia. Mesmo que eles não sejam os protagonistas dos novos filmes, será uma sensação agradável revê-los em novas tramas.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/Uma Nova Esperança/Uma Nova Esperança - foto 1.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													O que nos faz voltar a 1977, quando o primeiro Star Wars foi lançado – época em que, aqui no Brasil, a produção ainda utilizava seu simpático título em português Guerra nas Estrelas. Em um tempo em que os filmes-evento estavam começando a surgir (sendo Tubarão, em 1975, o marco zero dos blockbusters), Star Wars: Episódio IV – Uma Nova Esperança era um verdadeiro colírio para os olhos de qualquer fã de ficção científica. Com efeitos especiais fantásticos para a época e com uma história que empregava de forma muito competente a jornada do herói, George Lucas mostrou-se um sujeito de visão, empregando os conceitos das antigas matinés seriadas com tudo que uma grande produção hollywoodiana poderia contar.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Na trama, o temível Império constrói uma unidade bélica capaz de destruir planetas num piscar de olhos, chamada Estrela da Morte. As forças rebeldes contrárias ao totalitarismo do imperador conseguem diagramas que revelam os pontos fracos desta arma – e que são colocados dentro do dróide R2-D2 antes de Leia (Carrie Fisher) ser capturada pelo temível Darth Vader. O robô, ao lado do seu eterno parceiro C-3PO, tem uma missão: encontrar Obi-Wan Kenobi (Alec Guinness), um velho Jedi que, agora, vive como um eremita no planeta Tatooine. O caminho desses dróides se chocará com o jovem Luke Skywalker (Mark Hamill), uma figura que se mostrará chave na batalha contra o Império. Contando ainda com a ajuda do audacioso e petulante Han Solo (Harrison Ford) e com o temperamental Chewbacca, a força rebelde terá de lutar arduamente para fazer frente ao perigoso Darth Vader.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Star Wars: Episódio IV – Uma Nova Esperança é uma aventura deliciosa, comandada de forma competente por George Lucas, cineasta que cria com maestria uma gama de personagens riquíssimos para acompanharmos. A saga não teria o sucesso que possui não fossem as corajosas peripécias de Luke Skywalker, o charme arrogante de Han Solo, a bravura precursora do girl power de Princesa Leia e, claro, a ameaça sempre presente de um dos maiores vilões do século XX, Darth Vader. Tudo no personagem funciona de forma perfeita – a voz de trovão (de um, na época, não creditado James Earl Jones), o chiado de sua respiração, a capa preta, a máscara. Não é a toa que em qualquer lista de grandes bad guys do cinema, Vader não raro está as encabeçando.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/Uma Nova Esperança/Uma Nova Esperança - foto 2.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Ainda que diálogos não sejam a expertise de Lucas, que falha por vezes ao telegrafar os sentimentos dos personagens em diálogos desnecessários (“Não sei se atiro nela ou começo a me apaixonar”, diz um Han Solo após conhecer a Princesa), a criação de algumas falas icônicas acabam por desculpar alguns deslizes (“Que a Força esteja com você” está entranhado em nossa cultura, por exemplo). Ao misturar efeitos especiais de primeira com uma aventura cativante – e que tem até um ritmo lento para os parâmetros atuais – Star Wars: Episódio IV – Uma Nova Esperança foi o pontapé inicial para uma franquia que até hoje rende frutos, conquista novos fãs e que continua passando mensagens edificantes como coragem, amizade e respeito. Nada mal para uma produção que, tão desacreditada na época pelo estúdio, viu seu criador conseguir todos os direitos para si, em um negócio que poderia ser de risco para Lucas caso o filme fosse um fracasso. 35 anos depois e 4 bilhões de dólares mais rico, o criador de Star Wars não poderia ser mais bem sucedido.
												</span>
											</li><br>
										</ul>
									</div>
									<div>
										<div class="biografiaTit">
											<ul>
												<li><span>Biografia</span></li>
												<li class="biografiaRisco"></li>
											</ul>
										</div>

										<div class="biografiaDetalhes">
											<div class="biografiaFoto">
												<img src="<?php echo URL ?>/imagens/filmes/Biografias/Rodrigo de Oliveira.jpg">
											</div>
											<div class="biografiaCont">
												<span class="biografiaAuthor">Rodrigo de Oliveira</span>
												<br>
												<span class="biografiaTexto">
													é crítico de cinema, membro da ACCIRS - Associação de Críticos de Cinema do Rio Grande do Sul. Jornalista, produz e apresenta o programa de cinema Moviola, transmitido pela Rádio Unisinos FM 103.3. É também editor do blog Paradoxo.
												</span>
											</div>
										</div>
									</div>
								</div>

								<div id="divDetalhes" class="linkFilmeContA">
									<br>
									<div class="linkFilmeDetalheTit">		              		  
										<span>Detalhes:</span>
									</div>

				              		<div class="linkFilmeDetalheIn">
				              			<div>
											<h4>Direção</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/George Lucas.jpg">
				              						<span>George Lucas</span>
				              					</td>
				              				</tr>
				              			</table>
				              			<div class="linkFilmeDiretoresRisco"></div>
				              		</div>

				              		<div class="linkFilmeDetalheIn">
				              			<div>
											<h4>Roteiro</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/George Lucas.jpg">
				              						<span>George Lucas</span>
				              					</td>
				              				</tr>
				              			</table>
				              			<div class="linkFilmeDiretoresRisco"></div>
				              		</div>

				              		<div class="linkFilmeDetalheIn">
				              			<div>
											<h4>Elenco</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Mark Hamill.jpg">
				              						<span>Mark Hamill</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Harrison Ford.jpg">
				              						<span>Harrison Ford</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Carrie Fisher.jpg">
				              						<span>Carrie Fisher</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Alec Guinness.jpg">
				              						<span>Alec Guinness</span>
				              					</td>
				              				</tr>
				              			</table>
				              			<div class="linkFilmeDiretoresRisco"></div>
				              		</div>

				              		<div class="linkFilmeDetalheIn">
				              			<div>
											<h4>Produção</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/George Lucas.jpg">
				              						<span>George Lucas</span>
				              					</td>
				              					<td class="padding">
				              						<span>Gary Kurtz</span>
				              					</td>
				              				</tr>
				              			</table>
				              			<div class="linkFilmeDiretoresRisco"></div>
				              		</div>

				              		<div class="linkFilmeDetalheIn">
				              			<div>
											<h4>Estúdio</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td class="padding">
				              						<span>Lucasfilm</span>
				              					</td>
				              					<td class="padding">
				              						<span>Twentieth Century Fox Film Corporation</span>
				              					</td>
				              				</tr>
				              			</table>
				              			<div class="linkFilmeDiretoresRisco"></div>
				              		</div>

									<div class="linkFilmeDetalheIn">
				              			<div>
											<h4>Figurino</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td class="padding">
				              						<span>Leslie Dilley</span>
				              					</td>
				              					<td class="padding">
				              						<span>Norman Reynolds</span>
				              					</td>
				              				</tr>
				              			</table>
				              			<div class="linkFilmeDiretoresRisco"></div>
				              		</div>

									<div class="linkFilmeDetalheIn">
				              			<div>
											<h4>Trilha Sonora</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td class="padding">
				              						<span>John Williams</span>
				              					</td>
				              				</tr>
				              			</table>
				              			<div class="linkFilmeDiretoresRisco"></div>
				              		</div>

				              		<div class="linkFilmeDetalheIn">
				              			<div>
											<h4>Fotografia</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td class="padding">
				              						<span>David Tattersall</span>
				              					</td>
				              				</tr>
				              			</table>
				              			<div class="linkFilmeDiretoresRisco"></div>
				              		</div>

				              		<div class="linkFilmeDetalheIn">
				              			<div>
											<h4>Montagem</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td class="padding">
				              						<span>Richard Chew Richard Chew</span>
				              					</td>
				              					<td class="padding">
				              						<span>Paul Hirsch</span>
				              					</td>
				              					<td class="padding">
				              						<span>Marcia Lucas</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/George Lucas.jpg">
				              						<span>George Lucas</span>
				              					</td>
				              				</tr>
				              			</table>
				              			<div class="linkFilmeDiretoresRisco"></div>
				              		</div><br>
								</div>

								<div id="divCuriosidades" class="linkFilmeContB">
									<br>
									<div class="til">		              		  
										<span>Curiosidades:</span>
									</div>
				              		<div class="divCuriosidadesCont">
				              			<ul>
											<li>- Oscar 1978: premiado como Melhor Direção de Arte, Figurino, Trilha Sonora, Som, Efeitos Especiais e Montagem. Recebeu ainda um prêmio técnico especial pelos Efeitos Sonoros. Foi indicado também aos prêmios de Melhor Filme, Diretor, Ator Coadjuvante (Alec Guinness) e Roteiro Original;</li>
											<li>- Globo de Ouro 1978: premiado como Melhor Trilha Sonora e indicado a Melhor Filme em Drama, Direção e Ator Coadjuvante (Alec Guinness);</li>
											<li>- Eleito um dos 10 melhores filmes de 1978 pelo National Board of Review;</li>
											<li>- Uma Nova Esperança é o 4º episódio da saga Star Wars idealizada por George Lucas. Os demais são Star Wars: Episódio I - A Ameaça Fantasma (1999), Star Wars: Episódio II - Ataque dos Clones (2002), Star Wars: Episódio III - A Vingança dos Sith (2005), Star Wars: Episódio V - O Império Contra-ataca (1980) e Star Wars: Episódio VI - O Retorno de Jedi (1983);</li>
											<li>- Orçamento: US$ 11 milhões;</li>
											<li>- Bilheteria: US$ 775 milhões;</li>
											<li>- Seguido por Star Wars: Episódio V - O Império Contra-Ataca (1980);</li>
											<li>- Precedido, pela ordem de eventos, por Rogue One: Uma História Star Wars (2016);</li>
				              			</ul>
				              		</div>
								</div>
							</div>
		            		<div class="card-footer" align="center">
		              			<a href="<?php echo URL ?>/filmes.php" class="btn btn-primary">Voltar</a>
		            		</div>

		          		</div>
		        	</div>
		      	</div>
			</div>
		</section>
		<?php include RODAPE; ?>
		
	</body>
	<script type="text/javascript" src="<?php echo URL;?>/js/js.js"></script>
</html>