
//Necessário para a página sobre nós
function navegacaoSobreNos() {
  const botoes = {
    bolsa: "card_bolsa",
    bolsistas: "card_bolsistas",
    objetivo: "card_objetivo",
    resultados: "card_resultados",
  };

  // Mostra inicialmente o card "bolsa"
  Object.values(botoes).forEach((idCard) => {
    const el = document.getElementById(idCard);
    if (idCard === "card_bolsa") {
      el.classList.remove("hidden");
    } else {
      el.classList.add("hidden");
    }
  });

  // Adiciona os eventos aos botões
  Object.keys(botoes).forEach((idBotao) => {
    document.getElementById(idBotao).addEventListener("click", () => {
      // Esconde todos os cards
      Object.values(botoes).forEach((idCard) => {
        document.getElementById(idCard).classList.add("hidden");
      });

      // Mostra o card correspondente ao botão clicado
      const idCardParaMostrar = botoes[idBotao];
      document.getElementById(idCardParaMostrar).classList.remove("hidden");
    });
  });
}
