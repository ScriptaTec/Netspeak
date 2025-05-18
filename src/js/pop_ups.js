function inicializarPopUps() {
  const openModalBtns = document.querySelectorAll(".openModalBtn");
  const closeModalBtns = document.querySelectorAll(".closeModalBtn");

  //Mostrar o pop-up
  openModalBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const targetId = btn.getAttribute("data-target");
      const modal = document.getElementById(targetId);
      if (modal) {
        modal.classList.remove("hidden");
      }
    });
  });

  //Esconder o pop-up
  closeModalBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const modal = btn.closest(".fixed");
      if (modal) {
        modal.classList.add("hidden");
      }
    });
  });

  // Botão do logout
  const confirmLogout = document.getElementById("logout");
  const logoutForm = document.getElementById("logoutForm");
  if (confirmLogout && logoutForm) {
    confirmLogout.addEventListener("click", () => {
      logoutForm.submit();
    });
  }

  // Botão de excluir conta
  const confirmExcluirContaBtn = document.getElementById("confirmExcluirConta");
  const excluirContaForm = document.getElementById("excluirContaForm");
  if (confirmExcluirContaBtn && excluirContaForm) {
    confirmExcluirContaBtn.addEventListener("click", () => {
      excluirContaForm.submit();
    });
  }

// Botão de editar dados da conta (email e nome de usuário)
 const editarDadosForm = document.getElementById("editarDadosForm");
const editarDados = document.getElementById("editarDados");
const confirmEditarDadosBtn = document.getElementById("confirmeditarDados");

if (confirmEditarDadosBtn && editarDadosForm && editarDados) {
  confirmEditarDadosBtn.addEventListener("click", () => {
    editarDados.classList.add("hidden");  
    editarDadosForm.submit();          
  });
}

  // Botão de adicionar dados na conta
  const adicionarDadosForm = document.getElementById("adicionarDadosForm");
const adicionarDados = document.getElementById("adicionarDados");
const confirmAdicionarDadosBtn = document.getElementById("confirmAdicionarDados");

if (confirmAdicionarDadosBtn && adicionarDadosForm && adicionarDados) {
  confirmAdicionarDadosBtn.addEventListener("click", () => {
    adicionarDados.classList.add("hidden");  
    adicionarDadosForm.submit();          
  });
}


  // Botão de editar foto de perfil
  const editarBtn = document.getElementById("editar");
  if (editarBtn) {
    editarBtn.addEventListener("click", () => {});
  }
}
