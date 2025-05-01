//Animação do botão de login, cadastro e redefinir senha

//Necessário para funcionar no login e cadastro
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

