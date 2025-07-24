//Necessario para o modal de tipo de tradução

const modalFiltro = document.getElementById("modal-filtro");
const body = document.getElementById("body");
const input = document.getElementById("input");

function mostrarModalFiltro() {
  modalFiltro.classList.remove("hidden");
}

window.addEventListener("click", function (event) {
  // Verifica se o usuario clicou em qualquer lugar da tela para sair
  if (event.target === body || event.target === input) {
    modalFiltro.classList.add("hidden");
  }
});
