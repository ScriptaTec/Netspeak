<?php
require_once '../controller/geminiController.php';

$respostaDaApi = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['frase'])) {
    $fraseUsuario = $_POST['frase'];
    $tipoTraducao = $_POST['tipoTraducao'];
    $respostaDaApi = processarFraseComGemini($fraseUsuario, $tipoTraducao);
}
?>


<!--Design do pop-up de mensagens do usuário-->
<div class="flex flex-col items-end mt-5 relative z-30">

    <!--Campo para a frase enviada pelo usuário-->
    <?php if (!empty($fraseUsuario)): ?>
        <div class="max-w-[60%] mr-7 py-2 px-2 rounded-2xl rounded-br-none bg-[#FEF37E] text-xl text-[#746587] font-bold"
            style="box-shadow: 5px 5px 0px #746587">
            <?= htmlspecialchars($fraseUsuario) ?>
        </div>
    <?php endif; ?>

    <!--Design do ícone de perfil do usuario-->
    <div class="-mr-5">
        <img src="../imgs/icones/perfilMensagem.png" class="bg-white p-2 rounded-2xl"
            style="box-shadow: 3px 3px 0px #746587" alt="Perfil do usuário">
        <h2 class="text-center mt-1 text-sm text-[#FEF37E] font-bold">Você</h2>
    </div>
</div>

<!--Design do pop-up de mensagens da ferramenta emojimoji-->
<div class="flex flex-col items-start mt-2 relative z-30">

<!--Campo para mostrar a tradução-->
    <?php if (!empty($respostaDaApi)): ?>
        <div class="max-w-[60%] ml-7 py-2 px-2 rounded-2xl rounded-bl-none bg-[#F8FBA6] text-xl text-[#746587] font-bold"
            style="box-shadow: -5px 5px 0px #746587">
            <?= htmlspecialchars($respostaDaApi) ?>
        </div>
    <?php endif; ?>

    <!--Design do ícone de perfil da ferramenta emojimoji-->
    <div class="-ml-5">
        <img src="../imgs/icones/perfilMensagem.png" class="bg-white p-2 rounded-2xl"
            style="box-shadow: -3px 3px 0px #746587" alt="Perfil do usuário">
        <h2 class="mt-1 text-center text-sm text-white font-bold">EmojiMoji</h2>
    </div>
</div>