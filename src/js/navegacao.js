//Navegação entre as abas no perfil
function carregarConteudo(pagina) {
  fetch(pagina)
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("conteudo").innerHTML = data;

      //Necessário para os pop-ups
      inicializarPopUps();
      animacaoBtn("form");
    });
}

//Abas das páginas
tabFavoritos.addEventListener("click", () => {
  carregarConteudo("../view/favoritos.php");

  tabFavoritos.classList.add("border-b-2", "border-amber-300", "font-bold");
  tabFavoritos.classList.remove("text-gray-400");
  tabPersonalizar.classList.remove(
    "border-b-2",
    "border-amber-300",
    "font-bold"
  );
  tabPersonalizar.classList.add("text-gray-400");
  tabAlterarDados.classList.remove(
    "border-b-2",
    "border-amber-300",
    "font-bold"
  );
  tabAlterarDados.classList.add("text-gray-400");
  tabExcluirConta.classList.remove(
    "border-b-2",
    "border-amber-300",
    "font-bold"
  );
  tabExcluirConta.classList.add("text-gray-400");
});

tabAlterarDados.addEventListener("click", () => {
  carregarConteudo("../view/alterar_dados.php");

  tabAlterarDados.classList.add("border-b-2", "border-amber-300", "font-bold");
  tabAlterarDados.classList.remove("text-gray-400");
  tabFavoritos.classList.remove("border-b-2", "border-amber-300", "font-bold");
  tabFavoritos.classList.add("text-gray-400");
  tabPersonalizar.classList.remove(
    "border-b-2",
    "border-amber-300",
    "font-bold"
  );
  tabPersonalizar.classList.add("text-gray-400");
  tabExcluirConta.classList.remove(
    "border-b-2",
    "border-amber-300",
    "font-bold"
  );
  tabExcluirConta.classList.add("text-gray-400");
});

tabPersonalizar.addEventListener("click", () => {
  carregarConteudo("../view/personalizar.php");

  tabPersonalizar.classList.add("border-b-2", "border-amber-300", "font-bold");
  tabPersonalizar.classList.remove("text-gray-400");
  tabFavoritos.classList.remove("border-b-2", "border-amber-300", "font-bold");
  tabFavoritos.classList.add("text-gray-400");
  tabAlterarDados.classList.remove(
    "border-b-2",
    "border-amber-300",
    "font-bold"
  );
  tabAlterarDados.classList.add("text-gray-400");
  tabExcluirConta.classList.remove(
    "border-b-2",
    "border-amber-300",
    "font-bold"
  );
  tabExcluirConta.classList.add("text-gray-400");
});

tabExcluirConta.addEventListener("click", () => {
  carregarConteudo("../view/excluir_conta.php");

  tabExcluirConta.classList.add("border-b-2", "border-amber-300", "font-bold");
  tabExcluirConta.classList.remove("text-gray-400");
  tabFavoritos.classList.remove("border-b-2", "border-amber-300", "font-bold");
  tabFavoritos.classList.add("text-gray-400");
  tabAlterarDados.classList.remove(
    "border-b-2",
    "border-amber-300",
    "font-bold"
  );
  tabAlterarDados.classList.add("text-gray-400");
  tabPersonalizar.classList.remove(
    "border-b-2",
    "border-amber-300",
    "font-bold"
  );
  tabPersonalizar.classList.add("text-gray-400");
});

// Estado inicial
carregarConteudo("../view/alterar_dados.php");
tabAlterarDados.classList.add("border-b-2", "border-amber-300", "font-bold");


