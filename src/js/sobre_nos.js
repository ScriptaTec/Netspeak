document.querySelectorAll(".openModalBtn").forEach(btn => {
  btn.addEventListener("click", () => {
    const targetId = btn.getAttribute("data-target");
    const modal = document.getElementById(targetId);
    if (modal) {
      modal.classList.remove("hidden");
    }
  });
});

document.querySelectorAll(".closeModalBtn").forEach(btn => {
  btn.addEventListener("click", () => {
    // fecha o modal pai (assumindo que o botão está dentro do modal)
    btn.closest("div.fixed").classList.add("hidden");
  });
});


