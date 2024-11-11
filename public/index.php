<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Estrutura\Campo;
use App\Estrutura\Principal;

class Home
{
	private $aCampos = [];

	public function __construct()
	{
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

	//ISSO TUDO AQ É UM TESTE SHOW DE BOLA
	private function setCampoTeste()
	{
		$this->setCampo(new Campo(Campo::TEXT, 'teste', 'pao'));
		$this->getCampo('teste')->set_onclick("alert('teste')");
		$this->getCampo('teste')->set_suggest('teste rsrs');
		$this->getCampo('teste')->set_style('color', 'red');
		$this->getCampo('teste')->set_style('width', '300px');
		Principal::getInstance()->criaArquivoTexto($this->getCampo('teste'));
	}

	//AQUI FICA A PARTE DO HTML
	private function renderizaForm()
	{
		?>
		<!DOCTYPE html>
		<html lang="pt-br">

		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Casa da Amizade</title>

			<!-- Bootstrap CSS -->
			<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />-->

			<!-- Font Stylesheets -->
			<script src="https://kit.fontawesome.com/a41648155f.js" crossorigin="anonymous"></script>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">

			<!-- Additional Stylesheets -->
			<link rel="stylesheet" href="assets/css/style.css">
			<link rel="stylesheet" href="assets/css/normalize.css">
			<link rel="stylesheet" href="assets/css/footer.css">
			<link rel="stylesheet" href="assets/css/navbar.css">
			
		</head>

		<body>
			<!-- Header section -->
			<header>
				<div class="n-container">
					<div class="n-idv-site">
						<a href="index.php"><img src="../assets/img/logo.png" alt="logo" class="n-logo"></a>
					</div>
					<nav class="n-menu-upper">
						<a href="/pages/about.php"><button class="n-btn">Quem Somos</button></a>
						<a href="/pages/activities.php"><button class="n-btn">Atividade</button></a>
						<div class="n-dropdown">
							<a href="/pages/transparency.php"><button class="n-dropbtn">Transparência</button></a>
							<div class="n-dropdown-content">
								<a href="/pages/ethics.php">Ética</a>
							</div>
						</div>
						<a href="/pages/contact.php"><button class="n-btn">Fale Conosco</button></a>
					</nav>
					<div class="n-but-contact">
						<a href="/pages/donations.php"><button class="n-donation">Doe Agora!</button></a>
					</div>
				</div>
			</header>

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
				<a href="/pages/news.php" class="principal_botao">Últimas notícias</a>
			</main>

			<!-- Footer section -->
			<?php include __DIR__ . '/includes/footer.php'; ?>
		
			<!-- Bootstrap JS -->
			<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
				integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
				crossorigin="anonymous"></script>-->
			<!-- Popper.js -->
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
				integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
				crossorigin="anonymous"></script>

			<!-- Additional Scripts -->
			<script src="/assets/js/script.js"></script>
		</body>

		</html>
		<?php
	}
}

$frm_consulta = new Home;



