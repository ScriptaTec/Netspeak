
//Animação do botão de login, cadastro e redefinir senha
document.addEventListener("DOMContentLoaded", () => {
    animacaoBtn("form");
  });

//Necessário para funcionar no redefinir senha
function animacaoBtn(formId) {
    const form = document.getElementById(formId);
    if (!form) return;

    const inputs = form.querySelectorAll('input[type="text"], input[type="email"], input[type="password"], input[type="date"]');
    const progresso = form.querySelector('#progressoInterno');

    if (!progresso) return;

    function atualizarProgresso() {
        let preenchidos = 0;

        inputs.forEach(input => {
            if (input.value.trim() !== '') {
                preenchidos++;
            }
        });

        const total = inputs.length;
        const percentual = (preenchidos / total) * 100;
        progresso.style.width = `${percentual}%`;
    }

    inputs.forEach(input => {
        input.addEventListener('input', atualizarProgresso);
    });
}


//Necessário para funcionar a animação da letra no index
function animacaoLetra() {
    
var options = {
  strings: [
    "vc tá bem 🙃?",
    "AEEEEE tem bolinho hj de sobremesaaaa 😋😋",
    "CARA eu esqueci minha chave 😩🫠",
    "Tomara né 🙌...",
    "kakakakakka mano cê tá loca",
    "obg galeris! 🥰❤️🎁",
  ],
  typeSpeed: 60, // Velocidade de digitação em milissegundos
  backSpeed: 35, // Velocidade de "backspace" em milissegundos
  backDelay: 1000, // Atraso antes de começar o "backspace"
  startDelay: 500, // Atraso antes de iniciar a animação
  loop: true, // Repetir a animação
  showCursor: true, // Mostrar o cursor piscando
  cursorChar: "|", // Caractere do cursor
};

var typed = new Typed("#typed-output", options);
  
}
