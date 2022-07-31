<?php include 'mail.php';?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css"/>
	<script src="assets/js/script.js"></script> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<meta name="viewport" content="width=device-width,user-scalable=0" />
	<meta charset="UTF-8"/>
	<meta property="og:image" content="assets/img/allysson2.jpg" />
</head>
<body>
	<header>
		<div class="conteudo">
			<div class="conteudo_menu">
				<div class="box_logo">
					<img src="assets/img/logos.png" alt="logo" style="width:100%;height:100%"/>
				</div>

				<div class="box_menu_mobile">
					<nav>
						<div class="menu_mobile">
							<div class="line_menu"></div>
							<div class="line_menu"></div>
							<div class="line_menu"></div>
						</div>
					<ul class="option">
						<li><a href="#home">Home</a></li>
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#servicos">Serviços</a></li>
						<li><a href="#portfolio">Portfólio</a></li>
						<li><a href="#sessao_contato">Contato</a></li>
					</ul>
					</nav>
				</div>
					<div class="box_menu">
						<nav>
						<ul>
							<li><div class="hover"><!--<img src="assets/img/ball.png">--></div><a href="#home">Home</a></li>
							<li><a href="#sobre">Sobre</a></li>
							<li><a href="#servicos">Serviços</a></li>
							<li><a href="#portfolio">Portfólio</a></li>
							<li><a href="#sessao_contato">Contato</a></li>
						</ul>
						</nav>
					</div>
				</div>				
			</div>
		</div>
	</header>
	<section id="home" class="background">
		<div class="conteudo">
			<div class="box_textos">
				<div class="textomenor">
					Olá, eu sou
				</div>
				<div class="textomaior">
					Allysson Tolêdo
				</div>
				<div class="textomenor">
					Desenvolvedor
				</div>
			</div>			
		</div>
	</section>
	<section id="sobre">
		<div class="conteudo">
			<div class="box_sessao bg_sessao">
				<div class="avatar">
					<img src="assets/img/allysson2.jpg" alt="Foto de Allysson" style="width:100%;height:100%"/>
				</div>
				<div class="textos_avatar">
					<div class="title_avatar">
						<h1>Faço coisas para a internet</h1>
					</div>
					<div class="linha_avatar">
						<img src="assets/img/wave.png"/>
					</div>
					<div class="desc_avatar">
						<p>Estudante de Sistemas de Informação do Instituto Federal de Alagoas. Desenvolvo e desenho sites para empresas e pessoas que procuram marcar presença no mundo digital.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section >
		<div class="conteudo">
			<div class="titulo_sessao">
				<h2 id="servicos">Serviços</h2>
			</div>
			<div class="box_sessao">				
				<div class="caixas_servico">
					<div class="icon_servico">
						<img src="assets/img/website.png"/>
					</div>
					<div class="title_servico">
						Design
					</div>
					<div class="texto_servico">
					Seu site personalizado, de acordo com as características de seu negócio.
					</div>
				</div>
				<div class="caixas_servico">
					<div class="icon_servico">
						<img src="assets/img/code.png"/>
					</div>
					<div class="title_servico">
						Desenvolvimento
					</div>
					<div class="texto_servico">
					Funcionalidades específicas para o funcionamento da sua empresa online.
					</div>
				</div>
				<div class="caixas_servico">
					<div class="icon_servico">
						<img src="assets/img/support.png"/>
					</div>
					<div class="title_servico">
						Suporte
					</div>
					<div class="texto_servico">
					Apoio na manutenção e atualização do seu site.
					</div>
				</div>
				<div class="caixas_servico">
					<div class="icon_servico">
						<img src="assets/img/google.png"/>
					</div>
					<div class="title_servico">
						Google ADS
					</div>
					<div class="texto_servico">
					Criação e acompanhamento de campanhas e anúncios na plataforma ADS do Google.
					</div>
				</div>					
			</div>				
		</div>
	</section>
	<section id="portfolio">
		<div class="conteudo">
			<div class="titulo_sessao">
				<h2>Portfólio</h2>
			</div>
			<div class="box_sessao bg_sessao">				
				<div class="caixas_portfolio">
					<div class="img_portfolio">
						<img src="assets/img/fenix.jpg" style="width:100%;height:100%"/>
					</div>
					<div class="title_portfolio">
						Fênix Brasil - Proteção Veicular
					</div>
				</div>
				<div class="caixas_portfolio">
					<div class="img_portfolio">
						<img src="assets/img/tarologa.jpg" style="width:100%;height:100%"/>
					</div>
					<div class="title_portfolio">
						Taróloga da Bahia
					</div>
				</div>	
			</div>				
		</div>
	</section>
	<section id="sessao_contato">
		
		<div class="conteudo">
			<div class="titulo_sessao">
				<h2>Me escreva uma mensagem</h2>
			</div>
			<div class="box_sessao bg_sessao">	

				<div class="box_contato">
					<div class="box_contato_int">
						<div class="title_contato">
							<div class="img_marcador">
								<img src="assets/img/marker.png"/>
							</div>
							<div class="title_contato_int">
								Telefone
							</div>
						</div>
						<div class="contato_info">
							82-996461323
						</div>
					</div>
					<div class="box_contato_int">
						<div class="title_contato">
							<div class="img_marcador">
								<img src="assets/img/marker.png"/>
							</div>
							<div class="title_contato_int">
								E-mail
							</div>
						</div>
						<div class="contato_info">
							contato@allyssontoledo.com.br
						</div>
					</div>
				</div>
				
				<form method="POST">
					<div class="box_form">
						<div class="form_contato">						
							<div class="form_contato_int">
								<input name="nome" type="text" value="Nome" class="input1"><br>
								<input name="email" type="email" value="E-mail" class="input1">
							</div>
							<div class="area_mensagem">
								 <textarea name="msg" class="input2" placeholder="Conte-me o que precisa"></textarea>
							</div>
						</div>
						<div class="button_form">
							<input type="submit" value="ENVIAR MENSAGEM" class="enviar">
						</div>
					</div>
				</form>				
			</div>				
		</div>
	</section>
	<footer>
		<div class="conteudo">
			<a class="back_top" href="#home">							
				<img src="assets/img/arrow.png"/>				
			</a>			
			<div class="box_sessao bg_sessao rodape">
				<div class="box_social">
					<div class="icon_media">
						<img src="assets/img/linkedin.png" style="width:100%;height:100%"/>
					</div>
					<div class="icon_media">
						<img src="assets/img/instagram.png" style="width:100%;height:100%"/>
					</div>
				</div>
				<div class="copyright">
					<span style="color:#888888">© 2019</span> Allysson Toledo - <span style="color:#888888">Todos os direitos reservados.</span>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>