document.addEventListener("DOMContentLoaded", () => {
  // --- Seleciona os elementos do modal genérico UMA VEZ ---
  const modal = document.getElementById("modal-confirmacao-generico");
  if (!modal) return; // Se não houver modal na página, não faz nada

  const modalText = document.getElementById("modal-text");
  const btnConfirmar = modal.querySelector(".btn-confirmar");
  const btnCancelar = modal.querySelector(".btn-cancelar");
  const botoesAbrirModal = document.querySelectorAll(".btn-abrir-modal");

  // Variável para guardar qual formulário deve ser enviado
  let formParaEnviar = null;

  // --- Funções ---

  const abrirModal = (botao) => {
    // Pega as informações dos atributos data-* do botão que foi clicado
    const formSelector = botao.dataset.formTarget;
    const text = botao.dataset.modalText;

    formParaEnviar = document.querySelector(formSelector);

    // Atualiza o conteúdo do modal
    modalText.textContent = text;

    // Exibe o modal
    modal.classList.remove("hidden");
  };

  const fecharModal = () => {
    modal.classList.add("hidden");
    // Limpa a referência ao formulário para evitar envios acidentais
    formParaEnviar = null;

    window.location.reload(); 
  };

  const confirmarAcao = () => {
    if (formParaEnviar) {
      formParaEnviar.submit();
    }
    fecharModal();
  };

  // --- Adiciona os Eventos (Listeners) ---

  // Para cada botão que deve abrir o modal
  botoesAbrirModal.forEach((botao) => {
    botao.addEventListener("click", () => abrirModal(botao));
  });

  // Para o botão de confirmar dentro do modal
  btnConfirmar.addEventListener("click", confirmarAcao);

  // Para o botão de cancelar dentro do modal
  btnCancelar.addEventListener("click", fecharModal);

  // (Bônus) Para fechar clicando fora do modal
  modal.addEventListener("click", (event) => {
    if (event.target === modal) {
      fecharModal();
    }
  });
});
