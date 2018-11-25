<!DOCTYPE html>
<html>
	<head>
		<title>Filmes - Star Wars Episódio I: A Ameaça Fantasma</title>
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
				        		<h4>Star Wars Episódio I: A Ameaça Fantasma</h4>
		              		</div>
							<div class="row my-4 tirarMarginRow">
							    <div class="col-lg-3 filmesCapa" >
							    	<img class="img-fluid rounded" src="<?php echo URL ?>/imagens/filmes/A Ameaça Fantasma/A Ameaça Fantasma - Capa.png">
							    </div>
							    <div class="filmesUlInfos col-lg-9">
							    	<ul>
							    		<li><span class="negrito">Título Traduzido:</span> Star Wars Episódio I: A Ameaça Fantasma</li>
							    		<li><span class="negrito">Título Original:</span> Star Wars: Episode I - The Phantom Menace</li>
										<br>
										<li><span class="negrito">Gênero:</span> Ação, Aventura, Drama, Ficção Científica</li>
										<li><span class="negrito">Ano de Lançamento:</span> 1999</li>
										<li><span class="negrito">Duração:</span> 2h 16 Min.</li>
										<li><span class="negrito">País de origem:</span> EUA</li>
							    	</ul>
							    </div>
							</div>
							<div class="divFilmeSinopse">
								<div class="linkFilmeSinopse">
									<ul>
										<li><span class="linkFilmeSinopseTexto">Sinopse:</span></li>
											<li>					
											<span class="linkFilmeSinopseTextoC">Quando a maquiavélica Federação Comercial planeja invadir o pacífico planeta Naboo, o guerreiro Jedi Qui-Gon Jinn e seu aprendiz Obi-Wan Kenobi embarcam em uma aventura para tentar salvar o planeta. Viajam com eles a jovem Rainha Amidala, que é visada pela Federação pois querem forçá-la a assinar um tratado político. Eles têm de viajar para os distantes planetas Tatooine e Coruscant em uma desesperada tentativa de salvar o mundo de Darth Sidious, o demoníaco líder da Federação que sempre surge em imagens tridimensionais (a ameaça fantasma). Durante a viagem, Qui-Gon Jinn conhece um garoto de nove anos que deseja treiná-lo para ser tornar um Jedi, pois o menino tem todas as qualidades para isto. Mas o tempo revelará que nem sempre as coisas são o que aparentam.</span>
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
										  <source src="<?php echo URL ?>/videos/Trailler - A Ameaca Fantasma.mp4" type="video/mp4">
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
													São tantos momentos icônicos durante os seis episódios desta que é uma das sagas cinematográficas mais bem sucedidas de todos os tempos que é uma tarefa árdua eleger um ou outro como de maior impacto. Mas uma coisa é certa: nenhum destes melhores momentos se encontra em Star Wars: Episódio 1 – A Ameaça Fantasma, longa que, dentre outros defeitos, marcou a volta de George Lucas como realizador após 22 anos atuando somente como produtor. Ele deu o passo inicial em 1977 com Star Wars: Episódio IV – Uma Nova Esperança (ou, como foi lançado originalmente no Brasil, apenas Guerra nas Estrelas). Os episódios V e VI foram entregues à colaboradores amigos de Lucas, que por sua vez estava mais preocupado com os aspectos mercadológicos de toda essa história. E depois de mais de duas décadas voltou à ativa para contar como tudo havia começando, dessa vez com mais ânimo, sendo responsável pelos três capítulos da segunda trilogia, lançados em 1999, 2002 e 2005. Se Lucas, como diretor, é um ótimo produtor, suas falhas ao menos ficaram menos nítidas nos dois filmes posteriores. Aqui, no entanto, esse efeito não foi possível, e todos os deslizes e ataques de megalomania ficaram absurdamente evidentes, fazendo dessa uma experiência nada memorável.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/A Ameaça Fantasma/A Ameaça Fantasma - foto 1.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													Star Wars: Episódio 1 – A Ameaça Fantasma é um filme que não soube envelhecer. Se treze anos atrás sua trama já soava estranha, hoje ela parece ainda mais confusa e sem sentido. Para quem está perdido, um resumo rápido: a Federação Galáctica quer cobrar um novo imposto para o transporte de mercadorias aos setores mais afastados do universo, o que gera um bloqueio interplanetário. Em Naboo e Rainha Amidala (Natalie Portman) sofre com os prejuízos que seu povo enfrenta com tantas carências e tenta negociar com o Senado uma solução, mas é atacada por representantes de um planeta invasor. Vão ao seu socorro dois cavaleiros Jedi, Qui-Gon Jinn (Liam Neeson) e Obi-Wan Kenobi (Ewan McGregor). Em sua rota de fuga acabam aterrissando num pequeno e insignificante planeta chamado Tattoine, onde encontram um garoto que pode ser a resposta de uma importante profecia. Seu nome é Anakin Skywalker, e ele é tomado por Qui-Gon como seu aprendiz. Mas no encalço destes está o terrível Darth Sidious, cuja identidade é mantida em segredo, e seu braço direito, Darth Maul. Os dois são representantes dos até então extintos Sith, principal força contrária ao desejo de paz representado pelos Jedi.
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Mas então surge a dúvida: por quê estamos falando de Star Wars tanto tempo depois do seu lançamento nos cinemas, em dvd e até mesmo em blu-ray? Pelo simples fato de que a galinha dos ovos de ouro do Sr. Lucas não para nunca de gerar novos frutos, mesmo estando ela mais do que morta e enterrada há muito tempo. O golpe da vez são os tais efeitos tridimensionais, ou como popularmente ficaram conhecidos, a versão 3D. Sim, Star Wars: Episódio 1 – A Ameaça Fantasma está de volta às telas, e agora em 3D. Mas a pergunta que todos querem fazer é: tais modificações se justificam? O filme ficou em algum aspecto diferente – e, principalmente, melhor? A resposta, por sua vez, é bastante simples e objetiva: não. O que vemos é exatamente igual ao que foi visto há mais de uma década, com o acréscimo do incômodo destes óculos escuros. Não há um efeito particularmente interessante que seja realçado com a tecnologia 3D. E sabe por quê? Simplesmente porque este não é um filme feito em 3D, e sim apenas convertido! E isso, acreditem, faz toda a diferença!
												</span>
											</li><br>
											<li class="linkFilmeCriticaText">
												<span>
													Assim como as animações Disney O Rei Leão (1994) e A Bela e a Fera (1991) - terão outras nos próximos meses - e sucessos do passado como Titanic (1997), tudo que um dia foi relevante está renascendo das trevas para tentar somar mais alguns trocados através da picaretagem institucional do 3D convertido. Star Wars: Episódio 1 – A Ameaça Fantasma não é o primeiro e nem será o último. Mas parece, sim, ser um dos que mais está sofrendo com o processo. Ao invés de aparecer mais moderno e adequado à atual geração, o filme que vemos agora, sob a perspectiva do século XXI, é de uma infantilidade atroz e de uma ingenuidade galopante. Personagens como Jar Jar Binks e seu povo submarino, ou o alienígena apostador Boss Nass, são feitos para agradar as crianças – e somente a elas! O pequeno Jake Lloyd, que dá vida ao jovem que no futuro será o mítico Darth Vader, é tão irritante que seus “oops” e “iupiiiee” chegam a provocar náuseas. Nem os geralmente competentes Neeson, McGregor e Portman conseguem escapar da pasmaceira com diálogos amadores e reações infantis, reflexo mais do que direto de uma falta de direção incisiva.
												</span>
											</li>
											<li class="linkFilmeCriticaIMG1">
												<img src="<?php echo URL ?>/imagens/filmes/A Ameaça Fantasma/A Ameaça Fantasma - foto 2.jpg">
											</li>
											<li class="linkFilmeCriticaText">
												<span>
													A despeito de tudo, Star Wars: Episódio 1 – A Ameaça Fantasma é o filme da série que mais faturou nos cinemas, tendo arrecadado mais de US$ 900 milhões em todo o mundo (metade disso apenas nos Estados Unidos). Foi, na época, também bem recebido pela indústria, que lhe concedeu três indicações técnicas ao Oscar, nas categorias de Efeitos Visuais, Som e Edição de Som. Um fato curioso foi que estas três estatuetas acabaram indo a um mesmo filme – Matrix – e se naquela época isso já evidenciava o caráter ultrapassado da criação de George Lucas, imagina agora, tanto tempo depois. O 3D até pode servir para histórias que sejam criadas tendo-o em mente – o melhor exemplo ainda é o fantástico Avatar, de 2009 – mas está sendo tão prostituído em Hollywood que chegará um momento em que se tornará sinônimo de enganação e desvio de reais defeitos, como falta de um roteiro consistente e bons intérpretes. Isso tudo está ausente aqui, ao contrário do 3D. Sintomático, não?
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
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Liam Neeson.jpg">
				              						<span>Liam Neeson</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Ewan McGregor.jpg">
				              						<span>Ewan McGregor</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Natalie Portman.jpg">
				              						<span>Natalie Portman</span>
				              					</td>
				              					<td class="padding">
				              						<span>Jake Lloyd</span>
				              					</td>
				              					<td class="padding">
				              						<span>Ian McDiarmid</span>
				              					</td>
				              					<td class="padding">
				              						<span>Pernilla August</span>
				              					</td>
				              					<td class="padding">
				              						<span>Oliver Ford Davies</span>
				              					</td>
				              					<td class="padding">
				              						<span>Hugh Quarshie</span>
				              					</td>
				              					<td class="padding">
				              						<span>Ahmed Best</span>
				              					</td>
				              					<td class="padding">
				              						<span>Anthony Daniels</span>
				              					</td>
				              					<td class="padding">
				              						<span>Kenny Baker</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Terence Stamp.jpg">
				              						<span>Terence Stamp</span>
				              					</td>
				              					<td class="padding">
				              						<span>Brian Blessed</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Richard Armitage.jpg">
				              						<span>Richard Armitage</span>
				              					</td>
				              					<td class="padding">
				              						<span>Andrew Secombe</span>
				              					</td>
				              					<td class="padding">
				              						<span>Ray Park</span>
				              					</td>
				              					<td class="padding">
				              						<span>Lewis Macleod</span>
				              					</td>
				              					<td class="padding">
				              						<span>Warwick Davis</span>
				              					</td>
				              					<td class="padding">
				              						<span>Steve Speirs</span>
				              					</td>
				              					<td class="padding">
				              						<span>Silas Carson</span>
				              					</td>
				              					<td class="padding">
				              						<span>Jerome Blake</span>
				              					</td>
				              					<td class="padding">
				              						<span>Alan Ruscoe</span>
				              					</td>
				              					<td class="padding">
				              						<span>Ralph Brown</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Sofia Coppola.jpg">
				              						<span>Sofia Coppola</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Dominic West.jpg">
				              						<span>Dominic West</span>
				              					</td>
				              					<td>
				              						<img src="<?php echo URL ?>/imagens/filmes/Biografias/Keira Knightley.jpg">
				              						<span>Keira Knightley</span>
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
				              						<span>Ben Burt</span>
				              					</td>
				              					<td class="padding">
				              						<span>Paul Martin Smith</span>
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
				              				<li>- Oscar 2000: indicado a Melhor Som, Efeitos Sonoros e Efeitos Especiais;</li>
				              				<li>- Framboesa de Ouro 2000: indicado a Pior Filme, Direção, Ator Coadjuvante (Jar Jar Binks), Atriz Coadjuvante (Sofia Coppola), Dupla (Natalie Portman e Jake Lloyd) e Pior Roteiro;</li>
				              				<li>- Orçamento: US$ 115 milhões;</li>
				              				<li>- Bilheteria: US$ 924 milhões;</li>
				              				<li>- Seguido por Star Wars: Episódio II - Ataque dos Clones (2002);</li>
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