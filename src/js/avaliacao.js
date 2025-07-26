const secao = document.getElementById("secaoJustificativa");
const titutlo = document.getElementById("titulo");
const formEtapa1 = document.getElementById("formEtapa1");
const formEtapa2 = document.getElementById("formEtapa2");
const formEtapa3 = document.getElementById("formEtapa3");
const checkbox = formEtapa2.querySelectorAll('input[type="checkbox"]');

function abrirForm() {
  secao.classList.remove("hidden");
  formEtapa1.classList.remove("hidden");
}

function abrirEtapa2() {
  formEtapa1.classList.add("hidden");
  formEtapa2.classList.remove("hidden");
  titulo.classList.remove("decoration-[#746587]");
  titulo.classList.add("decoration-[#F8FBA6]");

  checkbox.forEach((mudar) => {
    mudar.classList.remove("text-[#746587]");
    mudar.classList.add("text-[#F8FBA6]");
  });
}

function abrirEtapa3() {
  formEtapa2.classList.add("hidden");
  formEtapa3.classList.remove("hidden");
  titulo.classList.remove("decoration-[#F8FBA6]");
  titulo.classList.add("decoration-[#746587]");

  checkbox.forEach((voltar) => {
    voltar.classList.remove("text-[#F8FBA6]");
    voltar.classList.add("text-[#746587]");
  });
}

function fecharForm() {
  secao.classList.add("hidden");
  formEtapa3.classList.add("hidden");
}
