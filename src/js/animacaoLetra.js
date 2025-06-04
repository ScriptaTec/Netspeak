var options = {
  strings: [
    'vc tá bem 🙃?',
    'AEEEEE tem bolinho hj de sobremesaaaa 😋😋',
    'CARA eu esqueci minha chave 😩🫠',
    'Tomara né 🙌...',
    'kakakakakka mano cê tá loca',
    'obg galeris! 🥰❤️🎁'
  ],
  typeSpeed: 60,   // Velocidade de digitação em milissegundos
  backSpeed: 35,   // Velocidade de "backspace" em milissegundos
  backDelay: 1000, // Atraso antes de começar o "backspace"
  startDelay: 500, // Atraso antes de iniciar a animação
  loop: true,      // Repetir a animação
  showCursor: true, // Mostrar o cursor piscando
  cursorChar: '|',  // Caractere do cursor
};

var typed = new Typed('#typed-output', options);