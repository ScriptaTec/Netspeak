//Necessario para o modal da avaliacao do suporte funcionar
const secao = document.getElementById("secaoJustificativa");
const titutlo = document.getElementById("titulo");
const formEtapa1 = document.getElementById("formEtapa1");
const formEtapa2 = document.getElementById("formEtapa2");
const formEtapa3 = document.getElementById("formEtapa3");
const checkbox = formEtapa2.querySelectorAll('input[type="checkbox"]');

//Etapa 1 do formulario
function abrirForm() {
  secao.classList.remove("hidden");
  formEtapa1.classList.remove("hidden");
}

//Etapa 2 do formulario
function abrirEtapa2() {
  formEtapa1.classList.add("hidden");
  formEtapa2.classList.remove("hidden");

  //Mudar cor do titutlo
  titulo.classList.remove("decoration-[#746587]");
  titulo.classList.add("decoration-[#F8FBA6]");

  //Mudar cor do checkbox
  checkbox.forEach((mudar) => {
    mudar.classList.remove("text-[#746587]");
    mudar.classList.add("text-[#F8FBA6]");
  });
}

//Etapa 3 do formulario
function abrirEtapa3() {
  formEtapa2.classList.add("hidden");
  formEtapa3.classList.remove("hidden");

  //Mudar cor do titutlo
  titulo.classList.remove("decoration-[#F8FBA6]");
  titulo.classList.add("decoration-[#746587]");

  //Mudar cor do checkbox
  checkbox.forEach((voltar) => {
    voltar.classList.remove("text-[#F8FBA6]");
    voltar.classList.add("text-[#746587]");
  });
}

//Enviar formulario de avaliacao
function fecharForm() {
  secao.classList.add("hidden");
  formEtapa3.classList.add("hidden");
}

//Lógica do botão de evoltar
function voltarEtapa() {
  if (!formEtapa1.classList.contains("hidden")) {
    fecharForm(); // se estiver na etapa 1, fecha
  } else if (!formEtapa2.classList.contains("hidden")) {
    formEtapa2.classList.add("hidden"); // esconde a etapa atual
    abrirForm(); // se estiver na etapa 2, volta para 1
  } else if (!formEtapa3.classList.contains("hidden")) {
    formEtapa3.classList.add("hidden"); // esconde a etapa atual
    abrirEtapa2(); // se estiver na etapa 3, volta para 2
  }
}
