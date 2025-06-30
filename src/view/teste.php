<input type="text" id="mensagem" name="mensagem">
<button id="emoji-button">😀</button>

<script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@4.6.2/dist/index.min.js"></script>
<script>
  const button = document.querySelector('#emoji-button');
  const input = document.querySelector('#mensagem');

  const picker = new EmojiButton();
  picker.on('emoji', emoji => {
    input.value += emoji;
  });

  button.addEventListener('click', () => {
    picker.togglePicker(button);
  });
</script>
