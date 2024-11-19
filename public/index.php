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
						<img src="assets/img/depo1.jpg" class="dp-img"alt="depoimento-1">
						<p class="nome">Katiane de Liz Santos</p>
						<p class="depoimento">“É gratificante participar da Casa da amizade, pois além de criarmos amizades ajudamos muitas pessoas, escolas, crianças e outras entidades. 
						Se conectamos com a comunidade buscando o melhor... 
					Às vezes sozinho não conseguimos e estar na casa, mulheres com mesmo  propósito, transformamos vidas!”</p>
					</div>

					<div class="dp">
						<img src="assets/img/depo2.jpg" class="dp-img"alt="depoimento-2">
						<p class="nome">Etla Weiss da Costa</p>
						<p class="depoimento">“Fazer parte desse grupo de mulheres que pensam no próximo, é gratificante;
							Um aprendizado constante de amor, amizade e caridade.”</p>
					</div>


					<div class="dp">
						<img src="assets/img/depo3.jpg" class="dp-img"alt="depoimento-3">
						<p class="nome">Eliete Waidlich Krzyzanowski</p>
						<p class="depoimento">“Estar ao lado de pessoas que pensam no próximo e no bem de uma comunidade como um todo, não tem preço.
							O que mais me motiva a ser voluntária, é ver um sorriso de esperança em cada criança e receber um abraço em forma de gratidão de cada família assistida.”</p>
					</div>

					<div class="dp">
						<img src="assets/img/depo4.jpg" class="dp-img"alt="depoimento-4">
						<p class="nome">Patrícia Adriano Ribeiro</p>
						<p class="depoimento">"Fazer parte da casa da amizade é gratificante! É fazer o bem sem olhar a quem, doar um pouquinho do nosso tempo para o próximo. 
							Sou grata por fazer parte desta história, ter a oportunidade de fazer a diferença por que juntas somos fortes!"</p>
					</div>
				</div>
			</main>

			<!-- Footer section -->
			<footer>
				<div class="f-tudo">
					<div class="f-footer-image">
						<img src="assets/img/logo.png" alt="Logo">
					</div>
					<!-- form -->
					<div class="f-formulario-contato" action="#">
						<h5 class="f-tit" id="categoria">Fale Conosco</h5>
						<form method="post">
							<div id="campos-contato">
								<!-- nome -->
								<input class="f-input1" type="text" id="nome" name="nome" placeholder="Nome" required>

								<!-- email -->
								<input class="f-input2" type="email" id="email" name="email" placeholder="E-mail" required>
							</div>
							<!-- checkbox -->
							<label for="anonimo">
								Mensagem Anônima:
								<input type="checkbox" id="anonimo" name="anonimo">
							</label>
							<br>
							<!-- textarea -->
							<textarea class="f-textarea" id="mensagem" name="mensagem" rows="5" placeholder="Mensagem . . ."
								required></textarea>

							<!-- enviar -->
							<input class="f-button" type="submit" value="Enviar">
						</form>
					</div>

					<div class="f-split"><!-- deixar bonito ❤️ --></div>

					<div class="f-detalhes-contato">
						<h5 class="f-tit">Contatos</h5>
						<p><img src="assets/img/telefone.png" alt="" style="width: 3.5vh;"><strong>Telefone:</strong> (47)
							99938-3195
						</p>
						<p><img src="assets/img/email.png" alt="" style="width: 3.5vh;"><strong>Email:</strong>
							casaamizade@gmail.com
						</p>
					</div>

					<div class="f-split"><!-- deixar bonito ❤️ --></div>

					<div class="f-localizacao">
						<h5 class="f-tit">Localização</h5>
						<p><img src="assets/img/local.png" alt="" style="width: 3vh;">Lontras, Centro</p>
					</div>

					<div class="f-split"><!-- deixar bonito ❤️ --></div>

					<div class="f-redes-sociais">
						<h5 class="f-tit">Redes Sociais</h5>
						<a href="#"><img src="assets/img/facebook.png" alt="Facebook"></a>
						<a href="#"><img src="assets/img/instagram.png" alt="Instagram"></a>
					</div>
				</div>

				<div class="f-rodape-inferior">
					<p>Todos os Direitos Reservados Casa da Amizade © 2024</p>
				</div>

			</footer>

			<!-- Popper.js -->
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
				integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
				crossorigin="anonymous"></script>
			</body>

		</html>
		<?php
	}

	private function setRequiresJs(){
		Principal::getInstance()->requireJS([
			'/assets/js/script.js'
		]);
	}
}

$frm_consulta = new Home;



