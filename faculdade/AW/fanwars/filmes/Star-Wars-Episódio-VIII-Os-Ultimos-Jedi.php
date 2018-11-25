<!DOCTYPE html>
<html>
	<head>
		<title>Filmes - Star Wars Episódio VIII: Os Últimos Jedi.</title>
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
				        		<h4>Star Wars Episódio VIII: Os Últimos Jedi</h4>
		              		</div>
							<div class="row my-4 tirarMarginRow">
							    <div class="col-lg-3 filmesCapa" >
							    	<img class="img-fluid rounded" src="<?php echo URL ?>/imagens/filmes/Os Últimos Jedi/Os Últimos Jedi - Capa.png">
							    </div>
							    <div class="filmesUlInfos col-lg-9">
							    	<ul>
				        				<li><span class="negrito">Título Traduzido:</span> Star Wars Episódio VIII:  Os Últimos Jedi</li>
				        				<li><span class="negrito">Título Original:</span> Star Wars: The Last Jedi</li><br>
				        				<li><span class="negrito">Gênero:</span> Ação, Aventura, Fantasia, Ficção Científico, Guerra</li>
				        				<li><span class="negrito">Ano de Lançamento:</span> 2017</li>
				        				<li><span class="negrito">Duração:</span> 2h 32 Min.</li>
				        				<li><span class="negrito">País de origem:</span> EUA</li>
		              				</ul>
							    </div>
							</div>
							<div class="divFilmeSinopse">
								<div class="linkFilmeSinopse">
									<ul>
										<li><span class="linkFilmeSinopseTexto">Sinopse:</span></li>
											<li>					
											<span class="linkFilmeSinopseTextoC">Após encontrar o mítico e recluso Luke Skywalker em uma ilha isolada, a jovem Rey busca entender o balanço da Força a partir dos ensinamentos do mestre Jedi. Paralelamente, o Primeiro Império de Kylo Ren se reorganiza para enfrentar a Aliança Rebelde.</span>
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
										  <source src="<?php echo URL ?>/videos/Trailler - Os Últimos Jedi.mp4" type="video/mp4">
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
													No mundo de Star Wars, nessa mitologia criada por George Lucas, as coisas sempre foram bastante dicotômicas, vide a centralidade da luta entre a luz e o lado negro da Força. Portanto, é, antes de tudo, passível de celebração a abordagem do cineasta Rian Johnson, também autor do roteiro de Star Wars: Os Últimos Jedi, justamente porque a partir deste capítulo os arranjos tendem a não ser mais como antes, pois é instaurada uma bem-vinda área cinzenta. Tal guinada alinha uma das franquias mais importantes do cinema aos novos tempos, dando sequência ao trabalho bem feito por J. J. Abrams e companhia em Star Wars: O Despertar da Força (2015), ampliando a sensação de sincronia com as demandas do agora. Aliás, outro indício disso é a pluralidade étnica presente entre os pilotos da Resistência que se lançam num ataque praticamente suicida para evitar a aniquilação pela nefasta Primeira Ordem, isso no começo do filme. É uma cena de ação que carrega dramaticidade, um desespero latente.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/Os Últimos Jedi/Os Últimos Jedi - foto 1.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													O cenário é desolador. A galáxia está praticamente tomada pela horda de Snoke (Andy Serkis). Os rebeldes comandados pela General Leia Organa (Carrie Fisher) estão irremediavelmente encurralados, a mercê do poderio encabeçado no campo de batalha pelo General Hux (Domhnall Gleeson) e pela figura cada vez mais imponente e poderosa de Kylo Ren (Adam Driver). Star Wars: Os Últimos Jedi, se desenvolve, na maior parte do tempo, em diversas frentes. Fazendo alusão a um expediente clássico da franquia, há uma missão de invasão, de sucesso improvável. O realizador, porém, consegue ressaltar a bravura de quem arrisca a própria vida em função do ideal. Finn (John Boyega) ganha uma parceria carismática e tão corajosa quanto ele. Rose (Kelly Marie Tran) tem seus motivos para ir à luta e encontra no ex-stormtrooper um companheiro valoroso, com quem sua personalidade casa bem. Embora represente o elo frágil da narrativa, o encargo deles é imprescindível para o êxito de todos.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													No planeta sagrado dos Jedi, Rey (Daisy Ridley) tenta extrair do lendário Luke Skywalker (Mark Hamill) os ensinamentos acerca da Força, querendo aprender os passos para se tornar uma guerreira apta a tentar obliterar o lado sombrio representado pelo colérico filho do falecido Han Solo. Aliás, Rian Johnson investe numa ligação curiosa entre o líder da ordem de Ren e a novata em busca de orientação. É inteligente a maneira como o filme, em numerosos momentos, nos leva a acreditar na proximidade da verdade acerca da origem de Rey, num jogo cujo verdadeiro propósito é, exatamente, estabelecer uma ponte entre a luz e a escuridão, criando um espaço intermediário, ideal para a instituição de uma densidade psicológica e emocional pouco vista na Saga Star Wars. Luke também faz parte dessa ciranda, deixando expostas as suas fraquezas, depondo a si próprio do pedestal que a História da galáxia reservou a ele. Star Wars: Os Últimos Jedi atinge um fino equilíbrio entre ação e drama, algo raro em blockbusters.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/Os Últimos Jedi/Os Últimos Jedi - foto 2.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Em meio à tragédia anunciada, com a Resistência acossada, Rian Johnson abre espaço para brechas cômicas, bem assentadas no todo. Além disso, a reverência ao legado de Star Wars está presente em vários instantes, como no reaparecimento emblemático de alguém importante – atentem para a forma assumida por esse personagem tão querido – e alusões menores a episódios marcantes de filmes anteriores. Perguntas formuladas desde Star Wars: Episódio IV – Uma Nova Esperança (1977) são finalmente respondidas, reviravoltas impressionantes criam a possibilidade de novos e empolgantes cenários, além da haver despedidas de gente cara aos fãs da cinessérie. Star Wars: Os Últimos Jedi é, em certa medida, um filme de atores, haja vista a coesão do elenco. Mas, Daisy Ridley e Adam Driver sobressaem, provando que podem, muito bem, assumir a dianteira da Saga Star Wars, sem prejuízos, pelo contrário, apontando ao novo, mas reverenciando as tradições.
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
												<img src="<?php echo URL ?>/imagens/filmes/Biografias/Marcelo Muller.jpg">
											</div>
											<div class="biografiaCont">
												<span class="biografiaAuthor">Marcelo Muller</span>
												<br>
												<span class="biografiaTexto">
													é jornalista, crítico de cinema e membro da ABRACCINE (Associação Brasileira de Críticos de Cinema,). Ministra cursos na Escola de Cinema Darcy Ribeiro/RJ e no Sesc/RJ. Participou como autor dos livros "100 Melhores Filmes Brasileiros" (2016), "Documentários Brasileiros – 100 filmes Essenciais" (2017) e "Animação Brasileira – 100 Filmes Essenciais" (2018). É editor do Papo de Cinema.
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
				              						<span>Rian Johnson</span>
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
				              						<span>Rian Johnson</span>
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
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Daisy Ridley.jpg">
				              						<span>Daisy Ridley</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/John Boyega.jpg">
				              						<span>John Boyega</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Carrie Fisher.jpg">
				              						<span>Carrie Fisher</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Mark Hamill.jpg">
				              						<span>Mark Hamill</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Adam Driver.jpg">
				              						<span>Adam Driver</span>
				              					</td>
				              					<td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Domhnall Gleeson.jpg">
				              						<span>Domhnall Gleeson</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Oscar Isaac.jpg">
				              						<span>Oscar Isaac</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Andy Serkis.jpg">
				              						<span>Andy Serkis</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Lupita Nyong'o.jpg">
				              						<span>Lupita Nyong'o</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Benicio Del Toro.jpg">
				              						<span>Benicio Del Toro</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Justin Theroux.jpg">
				              						<span>Justin Theroux</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Laura Dern.jpg">
				              						<span>Laura Dern</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Joseph Gordon-Levitt.jpg">
				              						<span>Joseph Gordon-Levitt</span>
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
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/J. J. Abrams.jpg">
				              						<span>J. J. Abrams</span>
				              					</td>
				              					<td class="padding">
				              						<span>Ram Bergman</span>
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
				              						<span>Ram Bergman Productions</span>
				              					</td>
				              					<td class="padding">
				              						<span>Walt Disney Pictures</span>
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
				              						<span>Michael Kaplan</span>
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
				              						<span>Steve Yedlin</span>
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
				              						<span>Bob Ducsay</span>
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
											<li>- Oscar 2018: indicado a Melhor Efeitos Visuais; Trilha Sonora; Edição de Som e Mixagem de Som;</li>
											<li>- BAFTA 2018: indicado a Melhor Som;</li>
											<li>- Golden Trailer Awards 2017: premiado como Melhor Pôster de Fantasia ou Aventura;</li>
											<li>- 9º filme da saga Star Wars;</li>
											<li>- Joaquin Phoenix recusou o papel de DJ, que foi aceito por Benicio Del Toro;</li>
											<li>- Mesmo diretor de Looper: Assassinos do Futuro (2013) e da série Breaking Bad (2008-2013);</li>
											<li>- Durante a produção, Rian Johnson disse ter sido influenciado por Almas em Chamas (1949) e A Carta Que Não Se Enviou (1960);</li>
											<li>- Durante as filmagens, o príncipes britânicos William e Harry visitaram o set e tiveram a atriz Daisy Ridley como guia de uma turnê VIP na Pinewood Studios;</li>
											<li>- Precedido, pela linha narrativa de eventos, por Star Wars: O Despertar da Força (2015);</li>
											<li>- Precedido, pela cronologia de realizações, por Rogue One: Uma História Star Wars (2016);</li>
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