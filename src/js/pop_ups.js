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

    // Botão de editar foto de perfil
  const editarBtn = document.getElementById("editar");
  if (editarBtn) {
    editarBtn.addEventListener("click", () => {});
  }

    // Botão de editar dados do perfil
  const editarDados = document.getElementById("editarDados");
  if (editarBtn) {
    editarBtn.addEventListener("click", () => {});
  }

    // Botão de adicionar dados do perfil
  const adicionarDados = document.getElementById("adicionarDados");
  if (editarBtn) {
    editarBtn.addEventListener("click", () => {});
  }
}
