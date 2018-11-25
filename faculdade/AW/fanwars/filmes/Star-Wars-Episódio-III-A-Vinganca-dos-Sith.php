<!DOCTYPE html>
<html>
	<head>
		<title>Filmes - Star Wars Episódio III: A Vingança dos Sith</title>
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
				        		<h4>Star Wars Episódio III: A Vingança dos Sith</h4>
		              		</div>
							<div class="row my-4 tirarMarginRow">
							    <div class="col-lg-3 filmesCapa" >
							    	<img class="img-fluid rounded" src="<?php echo URL ?>/imagens/filmes/A Vinganca dos Sith/A Vinganca dos Sith - Capa.png">
							    </div>
							    <div class="filmesUlInfos col-lg-9">
							    	<ul>
							    		<li><span class="negrito">Título Traduzido:</span> Star Wars Episódio III: A Vingança dos Sith</li>
							    		<li><span class="negrito">Título Original:</span> Star Wars: Episode III - Revenge of the Sith</li>
										<br>
										<li><span class="negrito">Gênero:</span> Ação, Aventura, Drama, Ficção Científica</li>
										<li><span class="negrito">Ano de Lançamento:</span> 2005</li>
										<li><span class="negrito">Duração:</span> 2h 20 Min.</li>
										<li><span class="negrito">País de origem:</span> EUA</li>
							    	</ul>
							    </div>
							</div>
							<div class="divFilmeSinopse">
								<div class="linkFilmeSinopse">
									<ul>
										<li><span class="linkFilmeSinopseTexto">Sinopse:</span></li>
											<li>					
											<span class="linkFilmeSinopseTextoC">Atormentado pela lealdade a seu mentor, Obi-Wan Kenobi em oposição aos sedutores poderes dos Sith, Anakin Skywalker acaba se voltando contra os Jedi, assim completando sua jornada rumo ao lado sombrio e sua transformação em Darth Vader. Acompanhe o emocionante capítulo final com a espetacular tecnologia digital e reviva todas as batalhas épicas incluindo o inesquecível e decisivo duelo entre Anakin e Obi-Wan.</span>
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
										  <source src="<?php echo URL ?>/videos/Trailler - A Vinganca dos Sith.mp4" type="video/mp4">
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
													Foram quase 30 anos de espera, mas a saga finalmente foi completada: o épico espacial Star Wars, idealizado pelo visionário George Lucas no início dos anos 1970 e levado às telas pela primeira vez em 1977, com Star Wars: Episódio IV – Uma Nova Esperança (antigamente conhecido somente por Guerra nas Estrelas), chegou a sua conclusão (ou ao menos a ordem cronológica se fechou) em 2005 com Star Wars: Episódio III – A Vingança dos Sith. Pela numeração dos episódios a trama parece ser confusa – e realmente é, mas não na proporção que se imagina. Lucas começou no meio por motivos diversos (falta de recursos técnicos disponíveis na época, pouca credibilidade dele enquanto realizador etc etc etc). Como todo mundo sabe, a coisa deu certo – Uma Nova Esperança arrecadou mais de US$ 460 milhões nos EUA, com um custo de US$ 11 milhões (!!), e recebeu 10 indicações ao Oscar (inclusive Melhor Filme, Direção e Roteiro Original), levando 6 estatuetas (foi o maior vencedor daquele ano) – ele continuou do ponto onde estava, lançando nos anos seguintes se sequências V – O Império Contra-Ataca (1980) e VI – O Retorno de Jedi (1983).
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/A Vinganca dos Sith/A Vinganca dos Sith - foto 1.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Muito tempo se passou, e no final dos anos 90, com o espírito setentista em alta, a mitologia Star Wars voltou à cena. Foi, então, a ocasião ideal para contar o início da história. Em 1999 chegava aos cinemas o aguardado Star Wars: Episódio I – A Ameaça Fantasma, frustrando público e crítica. Mas o alarde estava feito, e o negócio era seguir em frente. 2002 foi a vez de Star Wars: Episódio II – Ataque dos Clones, que levantou um pouco a moral e preparou o terreno para o atual Star Wars: Episódio III – A Vingança dos Sith, o melhor desta nova trilogia.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Nos primeiros filmes, Lucas narrava como havia se dado a luta da Aliança Rebelde – liderada pelos irmãos Luke Skywalker e Leia Organa – contra o Império do mal representado na figura do vilanesco Darth Vader (que, num dos momentos mais climáticos da história, revelava-se pai dos heróis). A segunda trilogia, que revela eventos anteriores, se concentra em mostrar como o homem Anakin Skywalker descobre o poder da “Força” e, infelizmente, decide usá-la da pior maneira possível, aliando-se ao Lado Sombrio, exterminando todos os Cavaleiros Jedi (guardiões da paz no universo) e acabando de vez com a democracia.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Se o A Ameaça Fantasma era um deslumbre tecnológico, com muito papo e pouca ação, e o Ataque dos Clones ficava no meio termo entre a ousadia e a tradição, A Vingança dos Sith é o que os fãs da série sempre sonharam. Aqui se tem as respostas que instigaram gerações de curiosos e cinéfilos, apresentadas de modo lógico e inteligente. Isso, no entanto, não faz deste um filme perfeito, e muitas falhas já sentidas nas produções anteriores continuam se fazendo presente – a inabilidade do diretor com os atores, os diálogos primários, o excesso de efeitos especiais em detrimento do desenvolvimento da trama. Mas isso, é claro, diz respeito somente ao espectador comum, que vai ao cinema em busca de diversão e entretenimento. Aos “starwarmaníacos” isso tudo pouco deve importar, pois o essencial está lá, e muito bem feito: Anakin Skywalker finalmente virando Darth Vader.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/A Vinganca dos Sith/A Vinganca dos Sith - foto 2.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Talvez o maior e principal problema de A Vingança dos Sith seja justamente este, o fato do filme ter sido feito de e para fãs, exclusivamente. Um espectador que não esteja minimamente familiarizado com o universo criado por George Lucas irá considerar tudo uma grande confusão, pois são oferecidos poucos pontos de apoio para um entendimento mais global do enredo. Levando em conta a teoria que afirma que toda e qualquer obra deve se bastar por si só – ou seja, compreensível pelos argumentos que possui, sem necessidade de auxílios externos, como explicações, livros e outros meios – este filme é extremamente deficiente e incompleto. Há, no entanto, a urgência de compreender que Star Wars é mais do que somente um longa, afirmando-se como um fenômeno pop com diversas camadas de entendimento. Espetáculo, exagero ou meramente divertido, a conclusão é que Lucas conseguiu encerrar sua novela em grande estilo, dando ao seu público aquilo que ele quer. Agora, basta decidir se você pertence ou não a esta seleta audiência.
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
				              						<span>Trisha Biggar</span>
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
				              						<span>David Lee</span>
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
				              						<span>Roger Barton</span>
				              					</td>
				              					<td class="padding">
				              						<span>Ben Burtt</span>
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
											<li>- Oscar 2006: indicado a Melhor Maquiagem;</li>
											<li>- Framboesa de Ouro 2006: indicado a Pior Ator (Hayden Christensen);</li>
											<li>- MTV Movie Awards 2006: premiado como Melhor Vilão (Hayden Christensen) e indicado a Melhor Herói (Ewan McGregor) e a Melhor Luta (Hayden Christensen e Ewan McGregor);</li>
											<li>- Há 2.200 cenas com efeitos especiais em todo o filme, mais do que A Ameaça Fantasma e Ataque dos Clones combinados. Uma Nova Esperança tinha ao todo 350 efeitos especiais;</li>
											<li>- Este é o único filme de toda a saga Star Wars que não foi indicado ao Oscar na categoria de Efeitos Visuais;</li>
											<li>- Filme de maior bilheteria em 2005;</li>
											<li>- Orçamento: US$ 113 milhões;</li>
											<li>- Bilheteria: US$ 848 milhões;</li>
											<li>- Precedido por Star Wars: Episódio II - Ataque dos Clones (2002);</li>
											<li>- Seguido, segundo a linha narrativa dos eventos, por Rogue One: Uma História Star Wars (2016);</li>
											<li>- Seguido, pela cronologia de realizações, por Star Wars: O Despertar da Força (2015);</li>
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