
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

   const output = document.getElementById("typed-output");
    
var options = {
  strings: [
    "caraca, quase caí da cadeira 😅",
    "Você poderia me ajudar com isso, por favor?",
    "credo, q calor insuportável 🥵",
    "Podemos conversar sobre isso amanhã com mais calma.",
    "n acredito q isso deu certo pqp 🤯",
    "Acho que seria prudente pensarmos melhor sobre essa decisão.",
    "kkkkkkkk esse meme é mt bom 🤣",
    "Preciso terminar algumas tarefas antes do fim do dia.",
    "nossa, que fome véi 😵‍💫",
    "Gostei muito da forma como você apresentou a ideia.",
    "amg, me ajuda aqui pls 🙏",
    "Fico agradecido por você ter compartilhado essa informação comigo.",
    "mano, cê viu aquilo? kkkkk 😂",
    "Seria interessante analisarmos todas as possibilidades antes.",
    "vamo combinar dps, fechou? 😉",
    "Aguardo seu retorno para darmos continuidade.",
    "aiai, sextou né? 🕺🎉",
    "Foi ótimo poder trocar ideias com você hoje.",
    "mds, que sono véi 😴",
    "Não imaginei que isso pudesse acontecer tão rápido.",
    "AEEEE partiu praia! 🏖️🔥",
    "Estarei disponível durante a semana para resolvermos isso.",
    "mano, tô zerado de grana 😩",
    "Esse parece um bom momento para colocarmos o plano em prática.",
    "kkkkkk cê é doido dms 🤪",
    "Temos urgência em definir os próximos passos.",
    "obg por tudo, galeraaa ❤️",
    "Confesso que fiquei surpreso com esse resultado.",
    "bora assistir um filminho hj? 🎬",
    "Vamos manter contato com a família da responsável.",
    "slc, esqueci meu fone em casa 😭",
    "Quero agradecer de coração pela sua colaboração.",
    "hmmm, fiquei curiosa agr 🤔",
    "Estou muito animado com as possibilidades que se abriram.",
    "afff, perdi meu busão de novo 😒",
    "Você teria como me enviar essas informações ainda hoje?",
    "chega +, vamo trocar uma ideia 🍻",
    "Estou confiante de que chegaremos a um bom resultado.",
    "vc tá on hj? 😏",
    "Podemos discutir alternativas em outra oportunidade.",
    "tô mt feliz cê nem imagina 😍",
    "Precisamos revisar alguns pontos antes de concluir.",
    "sério msm? fala + sobre isso 👀",
    "Acredito que conseguiremos resolver isso juntos.",
    "q preguiça de levantar 😩",
    "Este dia será o mais valioso de nossas vidas!.",
    "bora comer um lanchin agr? 🍔",
    "Espero que esteja tudo bem com você.",
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
  
  setInterval(() => {
    // Verifica se o conteúdo está maior que a área visível
    if (output.scrollWidth > output.clientWidth) {
      // *** MUDANÇA PRINCIPAL AQUI: ***
      // Usamos .scrollTo() com o objeto de opções { behavior: 'smooth' }
      // para animar a rolagem até o final do conteúdo (output.scrollWidth).
      output.scrollTo({
        left: output.scrollWidth,
        behavior: "auto", // ISTO FAZ A ROLAGEM SER SUAVE
      });
    }

    // Se a frase estiver sendo "apagada" (backspacing), também garante que o scroll volte
    if (output.scrollLeft > 0 && output.scrollWidth <= output.clientWidth) {
      output.scrollTo({
        left: 0,
        behavior: "auto",
      });
    }
  }, 50);
}
