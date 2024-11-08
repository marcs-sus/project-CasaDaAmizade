<header>
    <nav class="navbar">
        <div><img src="../assets/img/logo.png" class="logo" alt="logo" href="../index.php"></div> 
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        <ul class="nav-links">
            <li class="nav"><a href="../pages/about.php">Quem Somos</a></li>
            <li class="nav"><a href="../pages/activities.php">Atividade</a></li>
                <li class="nav-dropdown">
                <a href="../pages/transparency.php">Transparência</a>
                <ul class="dropdown-content">
                    <li class="dpdw"><a href="../pages/ethics.php">Ética</a></li>
                </ul>
            </li>
            <li class="nav"><a href="../pages/contact.php">Fale Conosco</a></li>
            <li><input type="button" value="DOE AGORA!" class="btn" href="../pages/donations.php"></li>
        </ul>
    </nav>
</header>

<script>
    function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}
</script>