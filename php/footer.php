

<footer>
    <div class="container">
        <div class="footer-image">
            <img src="img/logo.png" alt="Descrição da imagem">
        </div>

        <div class="formulario-contato" action="#">
            <h5 id="categoria">Fale Conosco</h5>
            <form method="post">
                <div id="campos-contato">
                    <!-- nome -->
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required>
                
                        <!-- email -->
                        <input type="email" id="email" name="email" placeholder="E-mail" class="form-control" required>

                </div>
                <!-- checkbox -->
                <label for="anonimo">
                    Mensagem Anônima:
                    <input type="checkbox" id="anonimo" name="anonimo">
                </label>
                <br>
                <!-- textarea -->
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Mensagem . . ." required></textarea>
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div class="brr"></div>

        <div class="detalhes-contato">
            <h5>Contatos</h5>
            <p><strong>Telefone:</strong> (47) 99938-3195</p>
            <p><strong>Email:</strong> casaamizade@gmail.com</p>
        </div>

        <div class="localizacao">
            <h5>Localização</h5>
            <p>Lontras, Centro</p>
        </div>

        <div class="redes-sociais">
            <h5>Redes Sociais</h5>
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
        const campos = camposContato.querySelectorAll("input, textarea");

        function toggleCamposContato() {
            if (anonimoCheckbox.checked) {
                camposContato.classList.add("hidden");
                campos.forEach(campo => {
                    campo.removeAttribute("required");
                });
            } else {
                camposContato.classList.remove("hidden");
                campos.forEach(campo => {
                    campo.setAttribute("required", "required");
                });
            }
        }

        anonimoCheckbox.addEventListener("change", toggleCamposContato);
    });
</script>

<style>
    h5, p, label {
        color: white;
    }
</style>