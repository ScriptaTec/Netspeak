//*Animação do botão de login e cadastro

const form = document.getElementById('cadastroForm');
const inputs = form.querySelectorAll('input[type="text"], input[type="email"], input[type="password"], input[type="date"]');
const progresso = document.getElementById('progressoInterno');

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
