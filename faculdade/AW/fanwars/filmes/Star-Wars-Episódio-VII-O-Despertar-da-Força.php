<!DOCTYPE html>
<html>
	<head>
		<title>Filmes - Star Wars Episódio VII: O Despertar da Força</title>
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
				        		<h4>Star Wars Episódio VII: O Despertar da Força</h4>
		              		</div>
							<div class="row my-4 tirarMarginRow">
							    <div class="col-lg-3 filmesCapa" >
							    	<img class="img-fluid rounded" src="<?php echo URL ?>/imagens/filmes/O Despertar da Força/O Despertar da Força - Capa.png">
							    </div>
							    <div class="filmesUlInfos col-lg-9">
							    	<ul>
							    		<li><span class="negrito">Título Traduzido:</span> Star Wars Episódio VII: O Despertar da Força</li>
							    		<li><span class="negrito">Título Original:</span> Star Wars: The Force Awakens</li>
										<br>
										<li><span class="negrito">Gênero:</span> Ação, Aventura, Drama, Ficção Científica</li>
										<li><span class="negrito">Ano de Lançamento:</span> 2015</li>
										<li><span class="negrito">Duração:</span> 2h 18 Min.</li>
										<li><span class="negrito">País de origem:</span> EUA</li>
							    	</ul>
							    </div>
							</div>
							<div class="divFilmeSinopse">
								<div class="linkFilmeSinopse">
									<ul>
										<li><span class="linkFilmeSinopseTexto">Sinopse:</span></li>
											<li>					
											<span class="linkFilmeSinopseTextoC">Luke Skywalker está desaparecido há anos, e acredita-se que somente ele poderá restaurar a ordem dos cavaleiros Jedi. Uma nova força do mal surge nesse período, a Primeira Ordem, ao passo que a Resistência, liderada pela Princesa Leia, luta com o que pode para impedir seu avanço. Um exímio piloto da Resistência consegue completar o mapa que os levará até Luke, mas Kylo Ren, um misterioso agente da Primeira Ordem que domina os poderes dos Sith, está em seu encalço. Quem ajudará a preservar o segredo será um stormtropper em crise de consciência, Finn, e uma catadora de ferro velho, Rey. Os dois se unirão ainda à Han Solo e Chewbacca, que os encontrarão à bordo da Millennium Falcon e, juntos, partirão em busca de ajuda.</span>
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
										  <source src="<?php echo URL ?>/videos/Trailler - O Despertar da Força.mp4" type="video/mp4">
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
													A espera acabou. Depois de muita expectativa, finalmente Star Wars: O Despertar da Força chega às telonas, sob o comando da Disney e de J.J. Abrams. Desde o início fica clara a intenção do diretor de aliar renovação e nostalgia, duas necessidades básicas que, uma vez garantidas, já haviam tornado exitosa a reinvenção cinematográfica de Star Trek, por ele também capitaneada. Não é preciso muito tempo para que nos sintamos devidamente em casa, com X-Wings cortando os céus, droides se deslocando de lá para cá, vilões enigmáticos tentando subjugar o movimento intenso dos rebeldes, entre outras características que fizeram de Star Wars um verdadeiro objeto de culto. A modernização fica por conta da linguagem, sobretudo a visual, mas não somente. A maneira como Abrams conjuga cenários, ação e personagens, por exemplo, confere ao todo uma grandiosidade sem igual na série. Por mais estranho que pareça, há uma pitada de verossimilhança nessa construção essencial e inegavelmente fantasiosa.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/O Despertar da Força/O Despertar da Força - foto 1.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Um homem toma a decisão de seguir o bem, largando para trás o destino ao qual parecia irremediavelmente fadado. A mulher que ele logo encontra tampouco aspirava ao extraordinário, levando até então uma vida penosa. Arrastados pela conjuntura das coisas, dos encontros que têm mais adiante em virtude de ocasiões diversas e aparentemente aleatórias, eles se veem no meio de uma batalha milenar, do bem contra o mal, feita fundamentalmente de luz e sombra. Kylo Ren (Adam Driver) assume o posto de comandante das tropas de uma organização nefasta denominada Primeira Ordem, que faz às vezes do Império visto nos filmes anteriores. Outras figuras importantes são inseridas na trama, que se desenrola num ritmo acelerado, conduzido pela cadência da excelente e quase onipresente trilha sonora de John Williams. Poe Dameron (Oscar Isaac) é o melhor piloto da revolução, peça-chave no intuito de frustrar os planos maléficos. BB-8 é o carismático e novato entre os droides que continuam servindo de apoio e alívio cômico, muitas vezes. Não raro ele rouba a cena.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Os dois protagonistas de Star Wars: O Despertar da Força são Rey (Daisy Ridley), uma catadora de sucata, e Finn (John Boyega) um ex-soldado. Ambos possuem os pré-requisitos para dar conta da tarefa de encabeçar a nova fase de Star Wars. Ela é forte, durona, mas ao mesmo tempo sensível e repleta de questões a resolver, remetendo assim à Amidala e Leia. Ele é um tipo cheio de boas intenções, não quer se envolver demais, prioritariamente busca preservar-se, mas, quando preciso, entra na briga com valentia. É uma espécie de Han Solo da nova era. E por falar nos rostos das antigas, é especialmente emocionante quando o próprio Solo (Harrison Ford), Chewbacca (Peter Mayhew), Leia (Carrie Fisher) e outros reaparecem, para passar o bastão aos calouros e sustentar a mitologia que se pretende sequenciar. Mesmo morto, Vader está ali, evocado pela obsessão de Kylo Ren, algo que justifica a indumentária e a voz cavernosa do jovem que sucumbiu ao lado negro.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/O Despertar da Força/O Despertar da Força - foto 2.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													O único senão do roteiro é a reutilização de um velho expediente da saga como ameaça universal. Ainda que desta vez a proporção seja maior e a missão soe mais complexa, as resoluções ocorrem com menos dificuldades do que se presume. Contudo, isso não chega a arranhar o prazer de assistir a Star Wars: O Despertar da Força, um filme empenhado em apresentar algo novo, ao passo em que exibe uma reverência muitas vezes comovente às bases nas quais está fundado. O fator família continua preponderante para adensar as relações. Determinadas surpresas só confirmam que Skywalker é uma linhagem fadada à tragédia. As batalhas são empolgantes, principalmente as aéreas, que, inclusive, se valem de um inteligente 3D para aproximar o espectador da ação. Já a história propriamente dita lança diversas questões para o futuro e prepara com grande eficiência o caminho às próximas aventuras, possivelmente nas quais testemunharemos, quem sabe, o retorno efetivo da mística dos Jedi. J. J. Abrams conseguiu novamente.
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
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/J. J. Abrams.jpg">
				              						<span>J. J. Abrams</span>
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
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/J. J. Abrams.jpg">
				              						<span>J. J. Abrams</span>
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
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Harrison Ford.jpg">
				              						<span>Harrison Ford</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Domhnall Gleeson.jpg">
				              						<span>Domhnall Gleeson</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Simon Pegg.jpg">
				              						<span>Simon Pegg</span>
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
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Max von Sydow.jpg">
				              						<span>Max von Sydow</span>
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
				              						<span>Bryan Burk</span>
				              					</td>
				              					<td class="padding">
				              						<span>Kathleen Kennedy</span>
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
				              						<span>Bad Robot</span>
				              					</td>
				              					<td class="padding">
				              						<span>Truenorth Productions</span>
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
											<h4>Direção de Arte</h4>
										</div>
				              			<table class="linkFilmeDirecao">
				              				<tr class="linkFilmeDiretores">
				              					<td class="padding">
				              						<span>Rick Carter</span>
				              					</td>
				              					<td class="padding">
				              						<span>Darren Gilford</span>
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
				              						<span>Daniel Mindel</span>
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
				              						<span>Maryann Brandon</span>
				              					</td>
				              					<td class="padding">
				              						<span>Mary Jo Markey</span>
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
											<li>- Oscar 2016: indicado a Melhor Efeitos Visuais, Montagem, Trilha Sonora, Mixagem de Som e Edição de Som;</li>
											<li>- Precedido, pela linha narrativa de eventos, por Star Wars: Episódio VI – O Retorno de Jedi (1983);</li>
											<li>- Seguido, pela linha narrativa de eventos, por Star Wars: Os Últimos Jedi (2017);</li>
											<li>- Precedido, pela cronologia de realizações, por Star Wars: Episódio III - A Vingança dos Sith (2005);</li>
											<li>- Seguido, pela cronologia de realizações, por Rogue One: Uma História Star Wars (2016);</li>
											<li>- J. J. Abrams sempre foi um fã declarado de Star Wars, entretanto, não foi a primeira, nem mesmo a segunda escolha da Disney para comandar o filme. Antes dele foram chamados Brad Bird e Matthew Vaughn. Ambos recusaram e Abrams acabou ficando com a tarefa;</li>
											<li>- Em suas medidas pra fazer jus a saga, Abrams, pela primeira vez em toda sua carreira no cinema, dispensou Michael Giacchino como compositor para chamar John Williams, que compôs a trilha de todos os outros 6 episódios;</li>
											<li>- Também escalou novamente em seus papéis clássicos Harrison Ford, Mark Hamill, Carrie Fisher, Anthony Davis, Kenny Baker e Peter Meyhew;</li>
											<li>- Orçamento: US$ 245 milhões;</li>
											<li>- Bilheteria mundial: US$ 2,068 bilhões;</li>
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