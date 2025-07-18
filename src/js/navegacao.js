//Necessário para a página de perfil e suporte em avaliacao.php
function navegacaoPerfil() {
  const editar = getElementById("editarDados");
  const adicionar = getElementById("adicionarDados");
  const sair = getElementById("sairConta");

  
}

function navegacaoPerfil() {
  const botoes = [
    document.getElementById("btn-favoritos"),
    document.getElementById("btn-alterarDados"),
    document.getElementById("btn-personalizar"),
    document.getElementById("btn-excluirConta"),
    document.getElementById("btn-justificativa"),
  ];

  botoes.forEach((botao) => {
    botao.addEventListener("click", () => {
      const idBotao = botao.id; // ex: "btn-personalizar"
      const idConteudo = idBotao.replace("btn-", ""); // ex: "personalizar"

      // Esconde todos os conteúdos e reseta os botões
      botoes.forEach((btn) => {
        const conteudoId = btn.id.replace("btn-", "");
        document.getElementById(conteudoId).classList.add("hidden");

        btn.classList.remove("border-b-2", "border-amber-300", "font-bold");
        btn.classList.add("text-gray-400");
      });

      // Mostra o conteúdo da aba clicada e destaca o botão
      document.getElementById(idConteudo).classList.remove("hidden");
      botao.classList.remove("text-gray-400");
      botao.classList.add("border-b-2", "border-amber-300", "font-bold");
    });
  });
}



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
