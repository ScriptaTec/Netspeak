
//Animação de navegação no perfil
//if (tabFavoritos && tabPersonalizar && conteudoFavoritos && conteudoPersonalizar) {
    // Funções de clique
    tabFavoritos.addEventListener("click", () => {
        tabFavoritos.classList.add("border-b-2", "border-black", "font-bold");
        tabFavoritos.classList.remove("text-gray-400");
        tabPersonalizar.classList.remove("border-b-2", "border-black", "font-bold");
        tabPersonalizar.classList.add("text-gray-400");

        conteudoFavoritos.classList.remove("hidden");
        conteudoPersonalizar.classList.add("hidden");
    });

    tabPersonalizar.addEventListener("click", () => {
        tabPersonalizar.classList.add("border-b-2", "border-black", "font-bold");
        tabPersonalizar.classList.remove("text-gray-400");
        tabFavoritos.classList.remove("border-b-2", "border-black", "font-bold");
        tabFavoritos.classList.add("text-gray-400");

        conteudoPersonalizar.classList.remove("hidden");
        conteudoFavoritos.classList.add("hidden");
    });

    // Estado inicial: exibir "Favoritos"
    tabFavoritos.click(); // Simula o clique no botão "Favoritos" ao carregar
//}


