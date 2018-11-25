<!DOCTYPE html>
<html>
	<head>
		<title>Filmes - Star Wars Episódio II: Ataque dos Clones</title>
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
				        		<h4>Star Wars Episódio II: Ataque dos Clones</h4>
		              		</div>
							<div class="row my-4 tirarMarginRow">
							    <div class="col-lg-3 filmesCapa" >
							    	<img class="img-fluid rounded" src="<?php echo URL ?>/imagens/filmes/Ataque dos Clones/Ataque dos Clones - Capa.png">
							    </div>
							    <div class="filmesUlInfos col-lg-9">
							    	<ul>
							    		<li><span class="negrito">Título Traduzido:</span> Star Wars Episódio II: Ataque dos Clones</li>
							    		<li><span class="negrito">Título Original:</span> Star Wars: Episode II - Attack of the Clones</li>
										<br>
										<li><span class="negrito">Gênero:</span> Ação, Aventura, Drama, Ficção Científica</li>
										<li><span class="negrito">Ano de Lançamento:</span> 2002</li>
										<li><span class="negrito">Duração:</span> 2h 2 Min.</li>
										<li><span class="negrito">País de origem:</span> EUA</li>
							    	</ul>
							    </div>
							</div>
							<div class="divFilmeSinopse">
								<div class="linkFilmeSinopse">
									<ul>
										<li><span class="linkFilmeSinopseTexto">Sinopse:</span></li>
											<li>					
											<span class="linkFilmeSinopseTextoC">Dez anos se passaram e a galáxia sofreu várias mudanças, assim como Anakin Skywalker, Obi-Wan, e Padmé Amidala. Anakin cresceu como um aprendiz de Obi-Wan, que de aluno, tornou-se mestre, enquanto Padmé é agora uma Senadora. Anakin e Obi-Wan são designados para proteger Padmé, cuja vida é ameaçada por um movimento separatista. Enquanto forças preparam para se colidirem em uma batalha épica, Anakin e Padmé encontram-se divididos entre o dever, a honra e o amor proibido. Estes heróis irão fazer escolhas que irão influenciar não apenas os seus destinos, mas também o destino da galáxia.</span>
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
										  <source src="<?php echo URL ?>/videos/Trailler - Ataque dos Clones.mp4" type="video/mp4">
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
													É uma das maiores franquias cinematográficas da história, tendo arrecadado milhões de dólares ao redor de todo o mundo em mais de trinta anos. Mas, antes disso tudo, é uma história envolvente, complexa e cativante, que aqui deu mais um passo em direção a sua conclusão final. Trata-se de Star Wars: Episódio II – Ataque dos Clones, uma produção que se mostrou melhor do que o esperado – ainda mais após o desastre que foi Star Wars: Episódio I – A Ameaça Fantasma (1999) – mas ainda assim aquém do que poderia ter sido.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/Ataque dos Clones/Ataque dos Clones - foto 1.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													A saga completa idealizada por Lucas era composta, segundo declarações do próprio, por nove filmes divididos em 3 trilogias. A primeira, chamada de “Trilogia Clássica”, é composta pelos filmes Uma Nova Esperança (1977), O Império Contra-Ataca (1980) e O Retorno de Jedi (1983), que na verdade são os episódios 4, 5 e 6 da trama. Ele decidiu começar pela metade por acreditar que essa era a fase mais aventuresca de toda a história – portanto, com mais possibilidades de arrebatar uma maior quantidade de fãs – e por julgar que na época ainda não existiam condições técnicas suficientes para a realização dos demais filmes.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Passados 25 anos depois da estreia do primeiro título, percebeu-se que Lucas tinha em mãos um grande – porém milionário – pepino. Afinal, em 1999 ele começou a trazer às telas a trilogia inicial, narrando o que teria acontecido antes dos eventos já conhecidos. Ou seja, além de ter que manter a alta qualidade técnica, visual e emocional dos anteriores, precisava também inovar na dose certa e fechar todas as “pontas” do roteiro que ficaram abertas. Foi preciso explicar muita coisa!
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Star Wars: Episódio I – A Ameaça Fantasma, que chegou aos cinemas interrompendo um hiato de dezesseis anos desde o último filme a ser lançado (O Retorno de Jedi), representou uma grande decepção para todos os aficionados na série. Infantil demais, com o acréscimo de um personagem irritante (Jar Jar Binks) e de um vilão nada carismático (Darth Maul), este episódio introdutório não acrescentou nada de especial à história. Começava com surgimento de Anakin Skywalker e com o início de seu treinamento como Cavaleiro Jedi. Para quem ignora, Anakin é o futuro Darth Vader, o vilão-mor da Trilogia Clássica. A Ameaça Fantasma, porém, carecia de cenas de batalhas impactantes e de momentos dramáticos relevantes. A impressão era de que Lucas estava tão maravilhado com as possibilidades técnicas atuais que sua preocupação ficou mais concentrada com o deslumbramento visual do que em contar uma boa história.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Três anos depois, no entanto, estreou Star Wars: Episódio II – Ataque dos Clones, com uma dupla missão: fazer os ajustes necessários que faltaram no Episódio I e encaminhar definitivamente a trama para os eventos previamente revelados e acontecidos nos capítulos 4, 5 e 6. Parecia complicado, mas o diretor se saiu relativamente bem em sua empreitada. Ataque dos Clones é um competente filme-evento, um legítimo blockbuster, que satisfez os fãs à altura e ainda atraiu novos curiosos para o legado jedi.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/Ataque dos Clones/Ataque dos Clones - foto 2.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Dessa vez a ação se desenvolve dez anos após o anterior, quando o jovem Anakin (Hayden Christensen) está cada vez mais balançado entre a razão, forte característica jedi, e a emoção, deixando-o inconstante e imprevisível. Dado a rompantes impensados, está constantemente em conflito com seu tutor, Obi-Wan Kenobi (Ewan McGregor). A trama começa quando ambos são chamados para proteger a senadora Amidala (Natalie Portman), antiga rainha do planeta Naboo, que está sendo ameaçada de morte. Logo descobrem que um antigo jedi, que há muito abandonou a causa, Conde Dookan (Christopher Lee), está associado à rebeldes num levante contra a república. Para impedir isso, o senado intergaláctico confere poderes supremos ao chanceler Palpatine (Ian McDiarmid), que tem como primeira medida a formação de um exército – os tais clones do título.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													O principal ponto positivo de Star Wars: Episódio II – Ataque dos Clones é que ele finalmente transforma em realidade cinematográfica fatos há muito esperados por todos os conhecedores da série. Descobrimos como começou o romance que originará os irmãos gêmeos Luke Skywalker e a Princesa Léia; presenciamos um combate com todos os cavaleiros jedi juntos e ao mesmo tempo; é desvendada a origem do cultuado caçador de recompensas Boba Fett; e entendemos porque o pequeno Yoda é reverenciado como o maior Mestre Jedi de todos os tempos. E essas são apenas algumas das novidades, pra não estragar as demais surpresas.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													E tem mais. Apesar de existirem alguns evidentes problemas de ritmo na condução do enredo (Lucas é melhor produtor do que diretor e roteirista), tudo se encaixa à contento, conferindo uma fluidez aos acontecimentos de forma muito mais natural. O lado cômico, tão importante na Trilogia Clássica, repousa mais uma vez em seus representantes originais, os dróides C-3PO e R2-D2, relegando o insuportável Jar Jar Binks a uma condição bem coadjuvante. E há também muito mais ação: são várias sequências de corridas espaciais, lutas de sabres de luz e de ataques guerreiros, para não deixar ninguém descontente. Mas o melhor é que, somado a tudo isso, temos um roteiro melhor elaborado, que desenvolve com maior profundidade temas caros à saga, como a aproximação cada vez mais forte de Anakin com o lado negro da força e da criação do Império, visualizado no avanço político do chanceler Palpatine.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/Ataque dos Clones/Ataque dos Clones - foto 3.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Se Star Wars: Episódio II – Ataque dos Clones não chega a ser o melhor filme da série (esse posto ainda pertence a O Império Contra-Ataca), seu resultado o deixa anos-luz distante da frustração provocada por A Ameaça Fantasma. É um belo produto hollywoodiano, que merece ser visto e celebrado de acordo com o que se propõe. Seu maior (e melhor) problema, no entanto, é o término em suspense, que vai causar em muitos a mesma sensação já provocada no encerramento de O Senhor dos Anéis: A Sociedade do Anel (2001): logo quando o crescente emocional está atingindo altos níveis, quando toda a platéia está ganha, entusiasmada com o que está prestes a acontecer, o filme acaba, justamente para provocar um desejo de “quero mais”. Levantando o astral, amarrou bem o caminho para uma conclusão que agora deverá ganhar novo fôlego, após o anúncio para a partir de 2015 dos lançamentos dos episódios 7, 8 e 9. A magia nunca acaba, e que a força esteja com todos nós!
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
												<img src="<?php echo URL ?>/imagens/filmes/Biografias/Robledo Milani.jpg">
											</div>
											<div class="biografiaCont">
												<span class="biografiaAuthor">Robledo Milani</span>
												<br>
												<span class="biografiaTexto">
													é crítico de cinema, presidente da ACCIRS - Associação de Críticos de Cinema do Rio Grande do Sul (gestão 2016-2018), e membro fundador da ABRACCINE - Associação Brasileira de Críticos de Cinema. Já atuou na televisão, jornal, rádio, revista e internet. Participou como autor dos livros Contos da Oficina 34 (2005) e 100 Melhores Filmes Brasileiros (2016). Criador e editor-chefe do portal Papo de Cinema.
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
				              					<td class="padding">
				              						<span>Jonathan Hales</span>
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
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Ewan McGregor.jpg">
				              						<span>Ewan McGregor</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Natalie Portman.jpg">
				              						<span>Natalie Portman</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Hayden Christensen.jpg">
				              						<span>Hayden Christensen</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Christopher Lee.jpg">
				              						<span>Christopher Lee</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Samuel L. Jackson.jpg">
				              						<span>Samuel L. Jackson</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Samuel L. Jackson.jpg">
				              						<span>Samuel L. Jackson</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Joel Edgerton.jpg">
				              						<span>Joel Edgerton</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Marton Csokas.jpg">
				              						<span>Marton Csokas</span>
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
				              						<span>Rick McCallum</span>
				              					</td>
				              					<td class="padding">
				              						<span>Lorne Orleans</span>
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
											<h4>Direção de Arte</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td class="padding">
				              						<span>Ian Gracie</span>
				              					</td>
				              					<td class="padding">
				              						<span>Phil Harvey</span>
				              					</td>
				              					<td class="padding">
				              						<span>Fred Hole</span>
				              					</td>
				              					<td class="padding">
				              						<span>Jonathan Lee</span>
				              					</td>
				              					<td class="padding">
				              						<span>Michelle McGahey</span>
				              					</td>
				              					<td class="padding">
				              						<span>Peter Russell</span>
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
				              						<span>Ben Burtt</span>
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
											<li>- Oscar 2003: indicado a Melhores Efeitos Visuais;</li>
											<li>- Framboesa de Ouro 2003: premiado como Pior Roteiro e Pior Ator Coadjuvante (Hayden Christensen);</li>
											<li>- Orçamento 2003: US$ 115 milhões;</li>
											<li>- Bilheteria: US$ 649 milhões;</li>
											<li>- Precedido por Star Wars: Episódio I - A Ameaça Fantasma (1999);</li>
											<li>- Seguido por Star Wars: Episódio III - A Vingança dos Sith (2005);</li>
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