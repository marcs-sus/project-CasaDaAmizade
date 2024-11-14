function toggleMenu() {
  const navLinks = document.querySelector(".nav-links");
  navLinks.classList.toggle("active");
}

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