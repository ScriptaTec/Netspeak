const bolsa = document.getElementById("card-bolsa");
const bolsistas = document.getElementById("card-bolsistas");
const objetivo = document.getElementById("card-objetivo");
const resultados = document.getElementById("card-resultados");

function todosHidden() {
  bolsa.classList.add("hidden");
  bolsistas.classList.add("hidden");
  objetivo.classList.add("hidden");
  resultados.classList.add("hidden");
}

function mostrarCardBolsa() {
  todosHidden();
  bolsa.classList.remove("hidden");
}

function mostrarCardBolsistas() {
  todosHidden();
  bolsistas.classList.remove("hidden");
}

function mostrarCardObjetivo() {
  todosHidden();
  objetivo.classList.remove("hidden");
}

function mostrarCardResultados() {
  todosHidden();
  resultados.classList.remove("hidden");
}
