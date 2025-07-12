let loginPwdStatus = false;

function changePwdView() {
  let getLoginInput = document.getElementById("loginPwdChange");
  let btnMostrar = document.getElementById("mostrar");
  let btnOcultar = document.getElementById("ocultar");

  if (loginPwdStatus === false) {
    getLoginInput.setAttribute("type", "text");
    btnMostrar.classList.remove("hidden");
    btnOcultar.classList.add("hidden");
    loginPwdStatus = true;
  } else {
    getLoginInput.setAttribute("type", "password");
    btnMostrar.classList.add("hidden");
    btnOcultar.classList.remove("hidden");
    loginPwdStatus = false;
  }
}
