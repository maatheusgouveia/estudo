<!DOCTYPE html>
<html>
	<head>
		<title>Filmes - Star Wars Episódio VI: O Retorno do Jedi</title>
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
				        		<h4>Star Wars Episódio VI: O Retorno do Jedi</h4>
		              		</div>
							<div class="row my-4 tirarMarginRow">
							    <div class="col-lg-3 filmesCapa" >
							    	<img class="img-fluid rounded" src="<?php echo URL ?>/imagens/filmes/O Retorno do Jedi/O Retorno do Jedi - Capa.png">
							    </div>
							    <div class="filmesUlInfos col-lg-9">
							    	<ul>
							    		<li><span class="negrito">Título Traduzido:</span> Star Wars Episódio VI: O Retorno do Jedi</li>
							    		<li><span class="negrito">Título Original:</span> Star Wars: Episode VI – Return of the Jedi</li>
										<br>
										<li><span class="negrito">Gênero:</span> Ação, Aventura, Drama, Ficção Científica, Guerra</li>
										<li><span class="negrito">Ano de Lançamento:</span> 1983</li>
										<li><span class="negrito">Duração:</span> 2h 11 Min.</li>
										<li><span class="negrito">País de origem:</span> EUA</li>
							    	</ul>
							    </div>
							</div>
							<div class="divFilmeSinopse">
								<div class="linkFilmeSinopse">
									<ul>
										<li><span class="linkFilmeSinopseTexto">Sinopse:</span></li>
											<li>					
											<span class="linkFilmeSinopseTextoC">O imperador está supervisionando a construção de uma nova Estrela da Morte. Enquanto isso Luke Skywalker liberta Hans Solo e a Princesa Leia das mãos de Jaba, o pior bandido das galáxias. Luke só se tornará um cavaleiro jedi quando destruir Darth Vader, que ainda pretende atraí-lo para o lado negro da "Força". No entanto a luta entre os dois vai revelar um inesperado segredo.</span>
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
										  <source src="<?php echo URL ?>/videos/Trailler - O Retorno do Jedi.mp4" type="video/mp4">
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
													O ano era 1983. A saga criada por George Lucas já era sucesso só pela simples menção do nome. Os personagens e cenários já haviam ultrapassado o limite das telonas e seus brinquedos e outras formas de merchandising vendiam como água. Mesmo assim, restava a dúvida: como superar o episódio anterior, ainda mais com o aumento da carga dramática da série com a revelação dos conflitos familiares de Luke Skywalker e Darth Vader? Pois se O Retorno de Jedi não alcança voos mais altos neste quesito, por outro o episódio consegue encerrar de forma coerente a história, ainda que com algumas ressalvas.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/O Retorno do Jedi/O Retorno do Jedi - foto 1.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													O filme já começa resolvendo uma das questões pendentes de O Império Contra-Ataca: o resgate de Han Solo (Harrison Ford). Congelado e preso em carbonita, ele é prisioneiro/enfeite do bar exótico de Jabba. C3PO e R2D2 são enviados por Luke (Mark Hamill) para negociar sua libertação. O androide e o robô são presos, assim como Leia (Carrie Fisher), que tenta salvar seu amado disfarçada, mas também é pega pelo verme do deserto. Quando o futuro Jedi reaparece para salvar a pátria, todos entram em dúvida sobre sua personalidade, ainda mais que seus poderes estão bem mais avançados e o personagem veste trajes pretos. Han é solto, uma grande batalha de encher os olhos toma conta da tela e Leia, com trajes sumários que viraram fetiche por toda uma geração, dá cabo do primeiro vilão do capítulo. Com isso, é preciso partir para lutar contra o Império mais uma vez, já que há uma nova Estrela da Morte surgindo como grande ameaça.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													O grande problema (ou seriam vários?) deste longa de encerramento é justamente o miolo de história entre o resgate de Solo até seu clímax com o destino final do impasse entre pai e filho. O episódio dirigido por Richard Marquand sofre de ser... episódico. É como se vários capítulos de histórias diferentes fossem agregados em um só, inclusive tornando este o mais longo dos filmes da trilogia original. Até que tudo aconteça, o roteiro é bombardeado por situações que poderiam ter sido cortadas, ou em parte ou de forma definitiva. É só lembrar da extensa cena do encontro com os Ewoks, o desenvolvimento da relação com a tribo e a questão (essa com humor relativamente interessante) de C3PO ser adorado por eles, que tanto causaram dor de cabeça para os fãs mais ardorosos. Inclusive muitos comparam os “fofinhos” (ou Ursinhos Carinhosos, como muitos adoram debochar) com Jar Jar Binks, o mais irritante personagem do primeiro episódio da saga. Um alívio cômico que de engraçado não tem nada. Mas sejamos justos com os Ewoks: eles não são dos piores (ainda que beirem demais ao pastiche), além de ter grande importância no combate final.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/O Retorno do Jedi/O Retorno do Jedi - foto 2.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Com isto, o foco da verdadeira história é desviado: Luke se tornou Jedi ou não no fim das contas? Apesar do seu treinamento avançado, visível em sua maior segurança com o poder, a todo momento se afirma que ele ainda não está pronto. É preciso resolver sua situação com Vader. E neste ínterim de cenas aleatórias, justamente uma das mais emocionantes da saga acaba perdendo um pouco de seu brilho: o diálogo de um já moribundo mestre Yoda com um esperançoso e enraivado Skywalker. Além de lembrar e confirmar que, sim, o lorde do Lado Negro da Força é pai do protagonista, o pequeno mestre Jedi de 800 anos solta outra grande revelação, que é a existência de uma irmã. Nem preciso dizer quem é, não é mesmo?
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Neste meio tempo, outro ponto importante também quase tem sua relevância negada pelos diversos problemas da produção, que é, finalmente, a aparição do Lorde Sith, o imperador Palpatine. Demorou, mas acabamos conhecendo de fato as feições do mestre de Vader e as sugestões lançadas de como ele levou Anakin Skywalker para o Lado Negro da Força. Também é graças a seu surgimento em carne e osso que a balança moral do pai de Luke se torna cada vez mais ambígua, levando ao fatídico desfecho de um dos mais complexos vilões da história do cinema. E a Estrela da Morte? Bom, para algo tão aterrador anteriormente, este novo complexo estelar é destruído mais facilmente do que o primeiro exemplar, deixando um gostinho de falta de criatividade na hora de procurar boas ameaças para os heróis.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/O Retorno do Jedi/O Retorno do Jedi - foto 3.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Apesar destes furos de roteiro, direção e edição, as lutas e cenas de ação parecem mais bem coreografadas e preparadas do que nos longas anteriores, mesmo que muitas sejam gratuitas e sem propósito além de encher linguiça. Em resumo, o grande problema de verdade em O Retorno de Jedi é querer contar demais em tão pouco e sem necessidade. A dosagem nos detalhes não foi bem realizada, tornando este o episódio mais sonolento de todos os produzidos até então. Ganha por saber terminar a história e pelo carisma de seus personagens, mas nota-se que envelheceu um pouco mais que os capítulos anteriores. Porém, vale ressaltar: nada que tire o prazer de ouvir, mais uma vez, “que a Força esteja com vocês”.
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
												<img src="<?php echo URL ?>/imagens/filmes/Biografias/Matheus Bonez.jpg">
											</div>
											<div class="biografiaCont">
												<span class="biografiaAuthor">Matheus Bonez</span>
												<br>
												<span class="biografiaTexto">
													é crítico de cinema, apresentador do Espaço Público Cinema exibido nas TVAL-RS e TVE e membro da ACCIRS - Associação de Críticos de Cinema do Rio Grande do Sul. Jornalista e especialista em Cinema Expandido pela PUCRS.
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
				              						<span>Richard Marquand</span>
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
				              						<span>Lawrence Kasdan</span>
				              					</td>
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
				              					<td class="padding">
				              						<span>Howard G. Kazanjian</span>
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
				              						<span>Aggie Guerard Rodgers</span>
				              					</td>
				              					<td class="padding">
				              						<span>Nilo Rodis-Jamero</span>
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
				              						<span>Fred Hole</span>
				              					</td>
				              					<td class="padding">
				              						<span>James L. Schoppe</span>
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
				              						<span>Alan Hume</span>
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
				              						<span>Sean Barton</span>
				              					</td>
				              					<td class="padding">
				              						<span>Duwayne Dunham</span>
				              					</td>
				              					<td class="padding">
				              						<span>Marcia Lucas</span>
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
											<li>- Oscar 1984: premiado como Melhores Efeitos Visuais e indicado a Melhor Direção de Arte, Som, Edição de Som e Trilha Sonora;</li>
											<li>- Orçamento: US$ 32,5 milhões;</li>
											<li>- Bilheteria: US$ 472,9 milhões;</li>
											<li>- Quando Leia (Carrie Fisher) é baleada, é possível ver, por um momento, Han Solo (Harrison Ford), pegando em seu peito;</li>
											<li>- O título original seria A Vingança do Jedi, mas foi alterado meses antes do lançamento;</li>
											<li>- Precedido por Star Wars: Episódio V - O Império Contra-Ataca (1980);</li>
											<li>- Seguido, pela ordem de eventos, por Star Wars: O Despertar da Força (2015);</li>
											<li>- Seguido, pela ordem de realizações, por Star Wars: Episódio I - A Ameaça Fantasma (1999);</li>
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