// Sidebar toogle button
function toggleMenu() {
  const navLinks = document.querySelector(".nav-links");
  navLinks.classList.toggle("active");
}

// Anonymous message box
document.addEventListener("DOMContentLoaded", function () {
  const anonimoCheckbox = document.getElementById("anonimo");
  const camposContato = document.getElementById("campos-contato");
  const campos = camposContato.querySelectorAll("input, textarea");

  function toggleCamposContato() {
    if (anonimoCheckbox.checked) {
      camposContato.classList.add("f-hidden");
      document.getElementById("nome").value = "";
      document.getElementById("email").value = "";
      campos.forEach((campo) => {
        campo.removeAttribute("required");
      });
    } else {
      camposContato.classList.remove("f-hidden");
      campos.forEach((campo) => {
        campo.setAttribute("required", "required");
      });
    }
  }

  anonimoCheckbox.addEventListener("change", toggleCamposContato);
});

// Copy donation key
function copyPixKey() {
  const pixKey = "#pix-key"; // Replace with your actual Pix key
  navigator.clipboard.writeText(pixKey);
  alert("Chave PIX copiada!");
}
