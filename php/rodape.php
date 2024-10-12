<footer>
    <div class="container">
        <div class="footer-image">
            <img src="img/logo.png" alt="Descrição da imagem">
        </div>

        <div class="formulario-contato">
            <h2>Fale Conosco</h2>
            <form method="post">
                <label for="anonimo">
                    <input type="checkbox" id="anonimo" name="anonimo"> Anônimo
                </label>
                <br>
                <div id="campos-contato">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                    <br>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <br>
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div class="detalhes-contato">
            <h2>Contatos</h2>
            <p><strong>Telefone:</strong> (47) 99938-3195</p>
            <p><strong>Email:</strong> casaamizade@gmail.com</p>
        </div>

        <div class="localizacao">
            <h2>Localização</h2>
            <p>Lontras, Centro</p>
        </div>

        <div class="redes-sociais">
            <h2>Redes Sociais</h2>
            <a href="#"><img src="facebook.png" alt="Facebook"></a>
            <a href="#"><img src="instagram.png" alt="Instagram"></a>
            <a href="#"><img src="youtube.png" alt="YouTube"></a>
        </div>
    </div>

    <div class="rodape-inferior">
        <p>Todos os Direitos Reservados Casa da Amizade © 2024</p>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const anonimoCheckbox = document.getElementById("anonimo");
        const camposContato = document.getElementById("campos-contato");

        function toggleCamposContato() {
            if (anonimoCheckbox.checked) {
                camposContato.classList.add("hidden");
            } else {
                camposContato.classList.remove("hidden");
            }
        }

        anonimoCheckbox.addEventListener("change", toggleCamposContato);
    });
</script>