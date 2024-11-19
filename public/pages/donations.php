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
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="28px" fill="#434343"><path d="M320-213.33q-27 0-46.83-19.84Q253.33-253 253.33-280v-533.33q0-27 19.84-46.84Q293-880 320-880h413.33q27 0 46.84 19.83Q800-840.33 800-813.33V-280q0 27-19.83 46.83-19.84 19.84-46.84 19.84H320Zm0-66.67h413.33v-533.33H320V-280ZM186.67-80q-27 0-46.84-19.83Q120-119.67 120-146.67v-600h66.67v600h480V-80h-480ZM320-280v-533.33V-280Z"/></svg> COPIAR CHAVE PIX
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