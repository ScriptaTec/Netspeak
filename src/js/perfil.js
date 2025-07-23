//Variaveis da navegação
const editar = document.getElementById("btn-editar");
const adicionar = document.getElementById("btn-adicionar");

//Variaveis do adicionar dados
const modalAdiconar = document.getElementById("modal-adicionar");
const confirmar = modalAdiconar.querySelector(".btn-confirmar");
const cancelar = modalAdiconar.querySelector(".btn-cancelar");
const formAdicionar = document.getElementById("form-adicionar");

//Variaveis do editar dados
const modalEditar = document.getElementById("modal-editar");
const confirmarEditar = modalEditar.querySelector(".btn-confirmar");
const cancelarEditar = modalEditar.querySelector(".btn-cancelar");
const formEditar = document.getElementById("form-editar");

//Variaveis do excluir conta
const modalExcluir = document.getElementById("modal-excluir");
const confirmarExcluir = modalExcluir.querySelector(".btn-confirmar");
const cancelarExcluir = modalExcluir.querySelector(".btn-cancelar");
const formExcluir = document.getElementById("form-excluir");

//Variaveis do sair da conta
const modalSair = document.getElementById("modal-sair");
const confirmarSair = modalSair.querySelector(".btn-confirmar");
const cancelarSair = modalSair.querySelector(".btn-cancelar");
const formSair = document.getElementById("form-sair");

// Função para alternar a visibilidade dos formulários
function mostrarEditar() {
    editar.classList.add("text-black");
    formEditar.classList.remove("hidden");
  
    adicionar.classList.remove("text-black");
    formAdicionar.classList.add("hidden");
  }
  
  function mostrarAdicionar() {
    adicionar.classList.add("text-black");
    formAdicionar.classList.remove("hidden");
  
    editar.classList.remove("text-black");
    formEditar.classList.add("hidden");
  }

//Modal de adicionar dados
function abrirModalAdicionar() {
  //Mostrar o modal quando a pessoa clicar no botão de adicionar dados
  event.preventDefault();
  modalAdiconar.classList.remove("hidden");

  //Botões dentro do modal
  confirmar.addEventListener("click", () => {
    formAdicionar.submit(); // Envia o formulário de exclusão
  });

  cancelar.addEventListener("click", (event) => {
    modalAdiconar.classList.add("hidden"); // Esconde o modal
  });
}

//Modal de editar dados
function abrirModalEditar() {
  //Mostrar o modal quando a pessoa clicar no botão de editar dados
  event.preventDefault();
  modalEditar.classList.remove("hidden");

  //Botões dentro do modal
  confirmarEditar.addEventListener("click", () => {
    formEditar.submit(); // Envia o formulário de edição
  });

  cancelarEditar.addEventListener("click", (event) => {
    modalEditar.classList.add("hidden"); // Esconde o modal e não envia as alterações
  });
}

//Modal de excluir conta
function abrirModalExcluir() {
  //Mostrar o modal quando a pessoa clicar no botão de excluir conta
  event.preventDefault();
  modalExcluir.classList.remove("hidden");

  //Botões dentro do modal
  confirmarExcluir.addEventListener("click", () => {
    formExcluir.submit(); // Envia o formulário de excluir conta
  });

  cancelarExcluir.addEventListener("click", (event) => {
    modalExcluir.classList.add("hidden"); // Esconde o modal e não exclui a conta
  });
}

//Modal de sair da conta
function abrirModalSair() {
  //Mostrar o modal quando a pessoa clicar no botão de sair da conta
  event.preventDefault();
  modalSair.classList.remove("hidden");

  //Botões dentro do modal
  confirmarSair.addEventListener("click", () => {
    formSair.submit(); // Envia o formulário de sair da conta
  });

  cancelarSair.addEventListener("click", (event) => {
    modalSair.classList.add("hidden"); // Esconde o modal e não sai da conta
  });
}

