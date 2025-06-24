<?php
require_once '../controller/geminiController.php';

$respostaDaApi = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['frase'])) {
    $fraseUsuario = $_POST['frase'];
    $respostaDaApi = processarFraseComGemini($fraseUsuario);
}
?>



<!--Design do pop-up de mensagens do usuário-->
<div class="flex justify-end my-10 relative">

    <!--Campo para a frase enviada pelo usuário-->
    <?php if (!empty($respostaDaApi)): ?>
        <div class="max-w-[60%] py-2 px-4 rounded-2xl rounded-br-none bg-[#F8FBA6] text-xl text-[#746587] font-bold"
            style="box-shadow: -5px 5px 0px #746587">
            <?= htmlspecialchars($respostaDaApi) ?>
        </div>
    <?php endif; ?>

    <!--Design do ícone de perfil do usuario-->
    <div class="text-center absolute -bottom-4 -right-12">
        <img src="../imgs/icones/perfilMensagem.png" class="bg-white p-2 rounded-2xl"  style="box-shadow: 3px 3px 0px #746587" alt="Perfil do usuário">
        <h2
            class="text-sm text-[#746587] font-bold"><!--Nome do usuário que está mandando a mensagem fica aqui--></h2>
    </div>
</div>

<!--Design do pop-up de mensagens da ferramenta emojimoji-->
<div class="flex justify-start my-10 relative">

    <!--Campo para mostrar a tradução-->
    <?php if (!empty($respostaDaApi)): ?>
        <div class="max-w-[60%] py-2 px-4 rounded-2xl rounded-bl-none bg-[#F8FBA6] text-xl text-[#746587] font-bold"
            style="box-shadow: -5px 5px 0px #746587">
            <?= htmlspecialchars($respostaDaApi) ?>
        </div>
    <?php endif; ?>

    <!--Design do ícone de perfil da ferramenta emojimoji-->
    <div class="text-center absolute -bottom-4 -left-12">
        <img src="../imgs/icones/perfilMensagem.png" class="bg-white p-2 rounded-2xl"  style="box-shadow: -3px 3px 0px #746587" alt="Perfil do usuário">
        <h2
            class="text-sm text-[#746587] font-bold"><!--Nome do usuário que está mandando a mensagem fica aqui--></h2>
    </div>
</div>