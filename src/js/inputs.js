function acaoBotao(inputId, buttonElement) {
    //Pega id do input que esta sendo passado como parâmetro
    const input = document.getElementById(inputId);

    // Pegaros icones do botão
    const iconOcultar = buttonElement.querySelector('.ocultar');
    const iconMostrar = buttonElement.querySelector('.mostrar');

    // Verifica o tipo atual do input
    if (input.type === 'password') {
      //Torna a senha visivel
      input.type = "text";

      iconOcultar.classList.add("hidden"); //sai icone de senha ocultada
      iconMostrar.classList.remove("hidden"); //entra icone de senha visivel
    } else {
      //Torna a senha oculta
      input.type = "password";

      iconOcultar.classList.remove("hidden"); //entra icone de senha ocultada
      iconMostrar.classList.add("hidden"); //sai icone de senha visivel
    }
}

