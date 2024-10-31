<footer>
    <div class="f-tudo">
        <div class="f-footer-image">
            <img src="/assets/img/logo.png" alt="Logo">
        </div>
        <!-- form -->
        <div class="f-formulario-contato" action="#">
            <h5 id="categoria">Fale Conosco</h5>
            <form method="post">
                <div id="campos-contato">
                    <!-- nome -->
                    <input class="f-form-control" type="text" id="nome" name="nome" placeholder="Nome" required>

                    <!-- email -->
                    <input type="email" id="email" name="email" placeholder="E-mail" class="f-form-control" required>

                </div>
                <!-- checkbox -->
                <label for="anonimo">
                    Mensagem Anônima:
                    <input type="checkbox" id="anonimo" name="anonimo">
                </label>
                <br>
                <!-- textarea -->
                <textarea class="f-form-control" id="mensagem" name="mensagem" rows="5" placeholder="Mensagem . . ."
                    required></textarea>

                <!-- enviar -->
                <input class="f-button" type="submit" value="Enviar">
            </form>
        </div>

        <div class="f-split"><!-- deixar bonito ❤️ --></div>

        <div class="f-detalhes-contato">
            <h5>Contatos</h5>
            <p><img src="/assets/img/telefone.png" alt="" style="width: 3vh;"><strong>Telefone:</strong> (47) 99938-3195
            </p>
            <p><img src="/assets/img/email.png" alt="" style="width: 3vh;"><strong>Email:</strong> casaamizade@gmail.com
            </p>
        </div>

        <div class="f-localizacao">
            <h5>Localização</h5>
            <p><img src="/assets/img/local.png" alt="" style="width: 3vh;">Lontras, Centro</p>
        </div>

        <div class="f-redes-sociais">
            <h5>Redes Sociais</h5>
            <a href="#"><img src="/assets/img/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="/assets/img/instagram.png" alt="Instagram"></a>
            <a href="#"><img src="/assets/img/youtube.png" alt="YouTube"></a>
        </div>
    </div>

    <div class="f-rodape-inferior">
        <p>Todos os Direitos Reservados Casa da Amizade © 2024</p>
    </div>

</footer>

<!-- Sistema mensagem anônima -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const anonimoCheckbox = document.getElementById("anonimo");
        const camposContato = document.getElementById("campos-contato");
        const campos = camposContato.querySelectorAll("input, textarea");

        function toggleCamposContato() {
            if (anonimoCheckbox.checked) {
                camposContato.classList.add("f-hidden");
                document.getElementById('nome').value = '';
                document.getElementById('email').value = '';
                campos.forEach(campo => {
                    campo.removeAttribute("required");
                });
            } else {
                camposContato.classList.remove("f-hidden");
                campos.forEach(campo => {
                    campo.setAttribute("required", "required");
                });
            }
        }

        anonimoCheckbox.addEventListener("change", toggleCamposContato);
    });
</script>

<!-- Deixar letras brancas -->
<style>
    h5,
    p,
    label {
        color: white;
    }
</style>