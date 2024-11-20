<?php

// Test Area --------------------------------------------------------------

require __DIR__ . '/../vendor/autoload.php';

use App\Estrutura\Campo;
use App\Estrutura\Principal;

class Home
{
	private $aCampos = [];

	public function __construct()
	{
		$this->setRequiresJs();
		$this->renderiza();
	}

	private function getCampo($sId)
	{
		return $this->aCampos[$sId] ?? null;
	}

	private function setCampo($oCampo)
	{
		$this->aCampos[$oCampo->sId] = $oCampo;
	}

	private function renderiza()
	{
		$this->renderizaCampos();
		$this->renderizaForm();
	}

	private function renderizaCampos()
	{
		$this->setCampoTeste();
	}

	private function setCampoTeste()
	{
		$this->setCampo(new Campo(Campo::TEXT, 'teste', 'pao'));
		$this->getCampo('teste')->set_onclick("alert('teste')");
		$this->getCampo('teste')->set_suggest('teste rsrs');
		$this->getCampo('teste')->set_style('color', 'red');
		$this->getCampo('teste')->set_style('width', '300px');
	}

	//Html Part ------------------------------------------------------------
	private function renderizaForm()
	{
		?>
		<!DOCTYPE html>
		<html lang="pt-br">

		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
			<title>Casa da Amizade</title>

			<!-- Font Stylesheets -->
			<script src="https://kit.fontawesome.com/a41648155f.js" crossorigin="anonymous"></script>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">

			<!--Additional Stylesheets-->
			<link rel="stylesheet" href="assets/css/style.css">
			<link rel="stylesheet" href="assets/css/normalize.css">
			<link rel="stylesheet" href="assets/css/footer.css">
			<link rel="stylesheet" href="assets/css/navbar.css">
			<link rel="stylesheet" href="assets/css/testimony.css">

			<!-- JavaScript -->
			<script src="assets/js/script.js"></script>
		</head>

		<!-- Header section -->
		<header>
			<nav class="navbar">
				<div><a href="index.php"><img src="assets/img/logo.png" class="logo" alt="logo"></a></div>
				<div class="menu-toggle" onclick="toggleMenu()">☰</div>
				<ul class="nav-links">
					<li class="nav"><a href="pages/about.php">Quem Somos</a></li>
					<li class="nav"><a href="pages/activities.php">Atividade</a></li>
					<li class="nav"><a href="pages/transparency.php">Transparência</a></li>
					<li class="nav"><a href="pages/ethics.php">Ética</a></li>
					<li><a href="pages/donations.php" class="donate-btn">DOE AGORA!</a></li>
				</ul>
			</nav>
		</header>

		<body>
			<!-- Main section -->
			<main class="principal">
				<div class="principal_capa">
					<h1>Casa da Amizade</h1>
					<span>Lontras</span>
				</div>
				<h2 class="principal_subtitulo">Notícias</h2>

				<!-- Main Grid -->
				<section class="principal_grid">
					<div class="principal_grid_not_grande">
						<span class="principal_grid_not_grande_caixa">
							<img src="assets/img/noticia01.jpeg" alt="Notícia 1">
							<p>Posse da nova diretoria Gestão 2024/2025. Quadro composto por presidente, vice-presidente, duas
								secretárias, duas tesoureiras e dois protocolos.</p><span><i class="fa-regular fa-clock"></i>
								07/10/2024 15h30</span>
						</span>

					</div>
					<div class="principal_grid_not_conjunto">
						<div class="principal_grid_not_conjunto_1">
							<span class="principal_grid_not_grande_caixa">
								<img src="assets/img/noticia02.jpeg" alt="Notícia 2">
								<p>Venda de Pastéis da Casa da Amizade para arrecadação de Fundos em auxilio aos Bombeiros
									Voluntários de Lontras.</p><span><i class="fa-regular fa-clock"></i> 07/10/2024 15h30</span>
							</span>

						</div>
						<div class="principal_grid_not_conjunto_2">
							<span class="principal_grid_not_grande_caixa">
								<img src="assets/img/noticia03.jpeg" alt="Notícia 3">
								<p>Projeto da Casa da Amizade de Lontras envolve escola e consegue materiais esportivos e
									pedagógicos para os alunos! </p><span><i class="fa-regular fa-clock"></i> 07/10/2024
									15h30</span>
							</span>

						</div>
					</div>
				</section>
				<a href="pages/news.php" class="principal_botao">Últimas notícias</a>
			</main>

			<!-- Testimony section -->
			<main class="testimony-sec">
				<div class="testimony-title">
					<p class="title1">Confira os depoimentos</p>
					<p class="title2">Recordar é viver...</p>
				</div>
				<div class="dp-dad">
					<div class="dp">
						<img src="assets/img/depo1.jpg" class="dp-img" alt="depoimento-1">
						<p class="nome">Katiane de Liz Santos</p>
						<p class="depoimento">“É gratificante participar da Casa da amizade, pois além de criarmos amizades
							ajudamos muitas pessoas, escolas, crianças e outras entidades.
							Se conectamos com a comunidade buscando o melhor...
							Às vezes sozinho não conseguimos e estar na casa, mulheres com mesmo propósito, transformamos
							vidas!”</p>
					</div>

					<div class="dp">
						<img src="assets/img/depo2.jpg" class="dp-img" alt="depoimento-2">
						<p class="nome">Etla Weiss da Costa</p>
						<p class="depoimento">“Fazer parte desse grupo de mulheres que pensam no próximo, é gratificante;
							Um aprendizado constante de amor, amizade e caridade.”</p>
					</div>


					<div class="dp">
						<img src="assets/img/depo3.jpg" class="dp-img" alt="depoimento-3">
						<p class="nome">Eliete Waidlich Krzyzanowski</p>
						<p class="depoimento">“Estar ao lado de pessoas que pensam no próximo e no bem de uma comunidade como um
							todo, não tem preço.
							O que mais me motiva a ser voluntária, é ver um sorriso de esperança em cada criança e receber um
							abraço em forma de gratidão de cada família assistida.”</p>
					</div>

					<div class="dp">
						<img src="assets/img/depo4.jpg" class="dp-img" alt="depoimento-4">
						<p class="nome">Patrícia Adriano Ribeiro</p>
						<p class="depoimento">"Fazer parte da casa da amizade é gratificante! É fazer o bem sem olhar a quem,
							doar um pouquinho do nosso tempo para o próximo.
							Sou grata por fazer parte desta história, ter a oportunidade de fazer a diferença por que juntas
							somos fortes!"</p>
					</div>
				</div>
			</main>

			<!-- Footer section -->
			
			<footer>
				<div class="f-tudo">
					<!-- Logo -->
					<div class="f-footer-image">
						<img src="assets/img/logo.png" alt="Logo">
					</div>
					<!-- Form -->
					<div class="f-formulario-contato" action="#">
						<h5 class="f-tit" id="categoria">Fale Conosco</h5>
						<form method="post">
							<div class="f-campos-contato" id="campos-contato">
								<!-- Name -->
								<input class="f-input1" type="text" id="nome" name="nome" placeholder="Nome" required>
									<br>
								<!-- E-mail -->
								<input class="f-input2" type="email" id="email" name="email" placeholder="E-mail" required>
							</div>

							<!-- Checkbox -->
							<label for="anonimo">
								Mensagem Anônima:
								<input type="checkbox" id="anonimo" name="anonimo">
							</label>
							<br>

							<!-- Textarea -->
							<textarea class="f-textarea" id="mensagem" name="mensagem" rows="5" placeholder="Mensagem . . ."
								required></textarea>

							<!-- Submit -->
							<br>
							<input class="f-button" type="submit" value="Enviar">
						</form>
					</div>

					<div class="f-split"></div>

					<!-- Contato -->
					<div class="f-detalhes-contato">
						<h5 class="f-tit">Contatos</h5>
						<p><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
								fill="#FFFFFF">
								<path
									d="M796-120q-119 0-240-55.5T333-333Q231-435 175.5-556T120-796q0-18.86 12.57-31.43T164-840h147.33q14 0 24.34 9.83Q346-820.33 349.33-806l26.62 130.43q2.05 14.9-.62 26.24-2.66 11.33-10.82 19.48L265.67-530q24 41.67 52.5 78.5T381-381.33q35 35.66 73.67 65.5Q493.33-286 536-262.67l94.67-96.66q9.66-10.34 23.26-14.5 13.61-4.17 26.74-2.17L806-349.33q14.67 4 24.33 15.53Q840-322.27 840-308v144q0 18.86-12.57 31.43T796-120ZM233-592l76-76.67-21-104.66H187q3 41.66 13.67 86Q211.33-643 233-592Zm365.33 361.33q40.34 18.34 85.84 29.67 45.5 11.33 89.16 13.67V-288l-100-20.33-75 77.66ZM233-592Zm365.33 361.33Z" />
							</svg><strong> Telefone:</strong> (47)
							99938-3195
						</p>
						<p><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
								fill="#FFFFFF">
								<path
									d="M146.67-160q-27 0-46.84-19.83Q80-199.67 80-226.67v-506.66q0-27 19.83-46.84Q119.67-800 146.67-800h666.66q27 0 46.84 19.83Q880-760.33 880-733.33v506.66q0 27-19.83 46.84Q840.33-160 813.33-160H146.67ZM480-454.67 146.67-670v443.33h666.66V-670L480-454.67Zm0-66.66 330.67-212H150l330 212ZM146.67-670v-63.33V-226.67-670Z" />
							</svg><strong> Email:</strong>
							casaamizade@gmail.com
						</p>
					</div>

					<div class="f-split"></div>

					<!-- Localização -->
					<div class="f-localizacao">
						<h5 class="f-tit">Localização</h5>
						<p><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
								fill="#FFFFFF">
								<path
									d="M480.06-486.67q30.27 0 51.77-21.56 21.5-21.55 21.5-51.83 0-30.27-21.56-51.77-21.55-21.5-51.83-21.5-30.27 0-51.77 21.56-21.5 21.55-21.5 51.83 0 30.27 21.56 51.77 21.55 21.5 51.83 21.5ZM480-168q129.33-118 191.33-214.17 62-96.16 62-169.83 0-114.86-73.36-188.1-73.36-73.23-179.97-73.23T300.03-740.1q-73.36 73.24-73.36 188.1 0 73.67 63 169.83Q352.67-286 480-168Zm0 88Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
							</svg> Lontras, Centro</p>
					</div>

					<div class="f-split"></div>

					<!-- Redes Sociais -->
					<div class="f-redes-sociais">
						<h5 class="f-tit">Redes Sociais</h5>
						<a href="#"><img src="assets/img/facebook.png" alt="Facebook"></a>
						<a href="#"><img src="assets/img/instagram.png" alt="Instagram"></a>
					</div>
				</div>

				<!-- Rodape Inferior -->
				<div class="f-rodape-inferior">
					<p>Todos os Direitos Reservados Casa da Amizade © 2024</p>
				</div>
			</footer>

		</body>

		</html>
		<?php
	}

	private function setRequiresJs()
	{
		Principal::getInstance()->requireJS([
			'/assets/js/script.js'
		]);
	}
}

$frm_consulta = new Home;