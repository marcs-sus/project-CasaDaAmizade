<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doações</title>

    <!-- Additional Stylesheets -->
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">

    <link rel="stylesheet" href="../assets/css/donations.css">
</head>

<body>
    <!-- Header section -->
    <?php include "../includes/navbar.php" ?>

    <!-- Main section -->
    <main class="donation-container">
        <div class="donation-banner">
            <h2>DOAÇÕES</h2>
        </div>

        <p class="donation-description">Na Casa da Amizade, todo tipo de doação é muito bem-vinda… Mas com certeza o seu
            carinho é a melhor doação…
        </p>

        <div class="qr-code-container">
            <div class="qr-code-and-button">
                <img class="qr-code" src="../assets/img/qr_code.png" alt="QR code para doações">
                <button class="copy-button" onclick="copyPixKey()">
                    📋 COPIAR CHAVE PIX
                </button>
            </div>

            <p class="donation-message">As doações podem ser feitas todos os dias da semana a qualquer hora!</p>
        </div>
    </main>

    <!-- Footer section -->
    <?php include '../includes/footer.php'; ?>

    <!-- Additional Scripts -->
    <script src="/assets/js/script.js"></script>
</body>

</html>