<!DOCTYPE html>
<html>
	<head>
		<title>Filmes - Star Wars Episódio V: O Império Contra Ataca</title>
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

		<?php include TOPO; ?>

		<section id="principal">
			<div class="container" align="center">
		<!-- Content Row -->
		      	<div class="row">

					<div class="col-md-14 mb-4 div-filmes div-principal">
		         		<div class="card h-100">
		       				<div class="filmesTitulo">
				        		<h4>Star Wars Episódio V: O Império Contra Ataca</h4>
		              		</div>
							<div class="row my-4 tirarMarginRow">
							    <div class="col-lg-3 filmesCapa" >
							    	<img class="img-fluid rounded" src="<?php echo URL ?>/imagens/filmes/O Império Contra Ataca/O Império Contra Ataca - Capa.png">
							    </div>
							    <div class="filmesUlInfos col-lg-9">
							    	<ul>
							    		<li><span class="negrito">Título Traduzido:</span> Star Wars Episódio V: O Império Contra Ataca</li>
							    		<li><span class="negrito">Título Original:</span> Star Wars: Episode V – The Empire Strikes Back</li>
										<br>
										<li><span class="negrito">Gênero:</span> Ação, Aventura, Drama, Ficção Científica, Guerra</li>
										<li><span class="negrito">Ano de Lançamento:</span> 1980</li>
										<li><span class="negrito">Duração:</span> 2h 4 Min.</li>
										<li><span class="negrito">País de origem:</span> EUA</li>
							    	</ul>
							    </div>
							</div>
							<div class="divFilmeSinopse">
								<div class="linkFilmeSinopse">
									<ul>
										<li><span class="linkFilmeSinopseTexto">Sinopse:</span></li>
											<li>					
											<span class="linkFilmeSinopseTextoC">As forças imperais comandadas por Darth Vader lançam um ataque contra os membros da resistência, que são obrigados a fugir. Enquanto isso Luke Skywalker tenta encontrar o Mestre Yoda, que poderá ensiná-lo a dominar a "Força" e torná-lo um cavaleiro jedi. No entanto, Darth Vader planeja levá-lo para o lado negro da "Força".</span>
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
										  <source src="<?php echo URL ?>/videos/Trailler - O Império Contra Ataca.mp4" type="video/mp4">
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
													A trilogia original de Star Wars representa perfeitamente a estrutura da jornada do herói mítico. Todos os doze pontos estão lá. Eles se aplicam dentro de cada filme, mas também no arco completo. Em cada um dos episódios esse ciclo se repete. Porém, podemos observar que os três longas que compõem a série também são desenvolvidos a partir desse pressuposto. Em O Império Contra-Ataca, a quinta parte da hexologia que George Lucas concluiu anos depois, o herói Luke Skywalker (Mark Hamill) enfrenta alguns desses pressupostos.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/O Império Contra Ataca/O Império Contra Ataca - foto 1.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Depois que o trio formado por Luke, a princesa Leia (Carrie Fisher) e Han Solo (Harrison Ford), junto com os Rebeldes, conseguem destruir a Estrela da Morte em Uma Nova Esperança (1977), eles têm que enfrentar a retaliação do Império. O que nos permite, aí sim, ver todo o poder que tanto é comentado no episódio anterior. Só que a ostensiva do Governo traz motivos que até então passam desapercebidos pelos protagonistas da trama. Darth Vader (interpretado por David Prowse e dublado pelo inigualável James Earl Jones) não busca apenas encontrar aqueles que atrasaram seus planos, mas procura aquilo que há muito tempo não sentia: a Força presente no seu oponente, o jovem Skywalker. O que no final levará a história a um dos melhores desfechos que o cinema já produziu – você sabe a que me refiro. É dentro desse contexto que Luke precisará superar alguns dos dilemas presentes na jornada do herói. No caso, (re)encontrar o mentor, compreender quem são seus inimigos, quem são seus amigos e se aproximar do objetivo.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Esse primeiro ponto é que permite a inserção de um dos personagens mais marcantes de toda a saga, proporcionando os momentos mais divertidos e edificantes do filme. A referência é a um alienígena verde e baixinho: Mestre Yoda. Enquanto Luke dá seus primeiros sinais de tendência ao Lado Negro da Força, é guiado pelo fantasma de Obi-Wan Kenobi (Alec Guinness) ao encontro daquele que também fora seu tutor. O treinamento exigido por Yoda, além de divertir com as peripécias que esse apronta, procura extrair exatamente quem é esse jovem e mostrar a ele tudo que havia dentro de si. Só que ao mesmo tempo que o aprendiz se descobre, o espectador também. Um recurso que aprofunda a perspectiva do público gerando uma imersão quase total nos dilemas do personagem. Ponto para Lawrence Kasdan e Leigh Brackett, roteiristas de O Império Contra-Ataca.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/O Império Contra Ataca/O Império Contra Ataca - foto 2.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Entretanto, não é apenas Luke que um melhor desenvolvimento durante a trama. Han Solo e Leia também têm seus arcos muito bem construídos, tanto individualmente, quanto como casal. Inclusive, protagonizam um dos diálogos mais celebrados e lembrados de toda a saga: quando Leia coloca o orgulho de lado e grita "eu te amo" e Han Solo responde "eu sei". Esse é um marco que contribui decisivamente no processo de identificação com o personagem.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Visualmente, a série continua bela. Ou melhor, ainda mais. Com o sucesso do original, Lucas dispôs de mais verba, aperfeiçoou os efeitos técnicos e ainda permitiu uma visita a Horth, na Noruega, onde algumas cenas foram rodadas. Isso deu ao diretor Irvin Kershner a oportunidade de fugir um pouco do ambiente fechado dos estúdios. Tudo é maior nesse filme! Por mais que a trama se aprofunde na psique de Luke e, assim, assuma um caráter mais intimista e obscuro – este talvez seja o mais sombrio de todos os episódios – as épicas batalhas estão lá. Quer seja no espaço, entre as naves, ou no chão, entre os farrapos Rebeldes e o avançado Império, e até mesmo no homem a homem entre dois sabres de luz.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/O Império Contra Ataca/O Império Contra Ataca - foto 3.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													O único problema, realmente, é o seu final. Depois de todos os acontecimentos, a sensação de continuidade supera o sentimento de fechamento. Era notório que haveria mais um capítulo, mas a escolha de ligá-lo diretamente com um título que só seria lançado mais tarde prejudica a avaliação individual de O Império Contra-Ataca. Se é desconfortável para nós, que podemos apanhar a parte VI na estante de casa, imagina quem teve que esperar anos pelo lançamento de O Retorno do Jedi (1983)? A verdade, apesar de tudo, é que mais de trinta anos depois o filme continua divertido e cativante. Definitivamente, o melhor da saga.
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
												<img src="<?php echo URL ?>/imagens/filmes/Biografias/Eduardo Dorneles.jpg">
											</div>
											<div class="biografiaCont">
												<span class="biografiaAuthor">Eduardo Dorneles</span>
												<br>
												<span class="biografiaTexto">
													Eduardo Dorneles é estudante de letras, amante de cinema, literatura, HQs e mantém um blog de crônicas e contos (edorneles.blogspot.com) .
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
				              					<td class="padding">
				              						<span>Irvin Kershner</span>
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
				              					<td class="padding">
				              						<span>Leigh Brackett</span>
				              					</td>
				              					<td class="padding">
				              						<span>Lawrence Kasdan</span>
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
				              						<span>Jim Bloom</span>
				              					</td>
				              					<td class="padding">
				              						<span>Gary Kurtz</span>
				              					</td>
				              					<td class="padding">
				              						<span>Rick McCallum</span>
				              					</td>
				              					<td class="padding">
				              						<span>Robert Watts</span>
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
				              						<span>John Mollo</span>
				              					</td>
				              				</tr>
				              			</table>
				              			<div class="linkFilmeDiretoresRisco"></div>
				              		</div>

				              		<div class="linkFilmeDetalheIn">
				              			<div>
											<h4>Direção de Arte</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td class="padding">
				              						<span>Leslie Dilley</span>
				              					</td>
				              					<td class="padding">
				              						<span>Harry Lange</span>
				              					</td>
				              					<td class="padding">
				              						<span>Alan Tomkins</span>
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
				              						<span>Peter Suschitzky</span>
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
				              						<span>T. M. Christopher</span>
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

											<li>- Oscar 1981: premiado como Melhor Som e indicado a Melhor Direção de Arte e Melhor Trilha Sonora Original;</li>
											<li>- Globo de Ouro 1981: indicado a Melhor Trilha Sonora;</li>
											<li>- BAFTA 1981: premiado como Melhor Trilha Sonora e indicado a Melhor Direção de Arte e Melhor Som;</li>
											<li>- Orçamento: US$ 18 milhões;</li>
											<li>- Bilheteria: US$ 538 milhões;</li>
											<li>- Precedido por Star Wars: Episódio IV - Uma Nova Esperança (1977);</li>
											<li>- Seguido por Star Wars: Episódio VI - O Retorno de Jedi (1983);</li>
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