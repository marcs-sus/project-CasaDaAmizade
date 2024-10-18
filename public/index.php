<?php 
// Carregar o autoloader do Composer
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Models\User;

$controller = new HomeController();
$controller->index(); 


$user = new User();
echo $user->getName();

// Isso é so um teste, so ignora rs <3 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Casa da Amizade</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- Additional Stylesheets -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="/assets/css/footer.css">
  <link rel="stylesheet" href="/assets/css/navbar.css">
</head>

<body>
  <!-- Header section -->
  <header>
    <div class="container">
      <div class="idv-site">
        <a href="#"><img src="/assets/img/logo.png" alt="logo" class="logo"></a>
      </div>
      <nav class="menu-upper">
        <a href="/pages/about.php"><button class="btn">Quem Somos</button></a>
        <a href="/pages/activities.php"><button class="btn">Atividade</button></a>
        <div class="dropdown">
          <a href="/pages/transparency.php"><button class="dropbtn">Transparência</button></a>
          <div class="dropdown-content">
            <a href="#">Ética</a>
          </div>
        </div>
        <a href="/pages/contact.php"><button class="btn">Fale Conosco</button></a>
      </nav>
      <div class="but-contact">
        <a href="/pages/donations.php"><button class="donation">Doe Agora!</button></a>
      </div>
    </div>
  </header>

  <!-- Main section -->
  <main>
    <!-- Banner/Hero section -->
    <section id="hero">
      <div class="principal_imagem">
        <img src="/assets/img/banner.jpg" alt="Casa da Amizade">
      </div>
    </section>

    <!-- News Section -->
    <section class="principal_noticias" id="news">
      <h3 class="principal_noticias_titulo">Notícias</h3>
      <div class="principal_noticias_grid">
        <div class="principal_noticias_grid_grande">
          <!-- placeholder for future code -->
        </div>
      </div>
    </section>

    <!-- Intro section -->
    <section id="intro">
      <!-- código da seção intro aqui -->
    </section>
  </main>

  <!-- Footer section -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <!-- Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <!-- Additional Scripts -->
  <script src="/assets/js/script.js"></script>
</body>

</html>
