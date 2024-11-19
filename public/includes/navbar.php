<header>
    <nav class="navbar">
        <div><a href="../index.php"><img src="      /assets/img/logo.png" class="logo" alt="logo"></a></div>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        <ul class="nav-links">
            <li class="nav"><a href="../pages/about.php" style="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'background-color: #d1d1d3; padding: 12px 18px; border: none; border-radius: 8px' : ''; ?>">Quem Somos</a></li>
            <li class="nav"><a href="../pages/activities.php"  style="<?= basename($_SERVER['PHP_SELF']) == 'activities.php' ? 'background-color: #d1d1d3; padding: 12px 18px; border: none; border-radius: 8px' : ''; ?>">Atividade</a></li>
            <li class="nav"><a href="../pages/transparency.php"  style="<?= basename($_SERVER['PHP_SELF']) == 'transparency.php' ? 'background-color: #d1d1d3; padding: 12px 18px; border: none; border-radius: 8px' : ''; ?>">Transparência</a></li>
            <li class="nav"><a href="../pages/ethics.php"  style="<?= basename($_SERVER['PHP_SELF']) == 'ethics.php' ? 'background-color: #d1d1d3; padding: 12px 18px; border: none; border-radius: 8px' : ''; ?>">Ética</a></li>
            <li><a href="../pages/donations.php" class="donate-btn">DOE AGORA!</a></li>
        </ul>
    </nav>
</header>