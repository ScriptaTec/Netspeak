<?php
require_once '../controller/geminiController.php';

$respostaDaApi = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['frase'])) {
    $fraseUsuario = $_POST['frase'];
    $respostaDaApi = processarFraseComGemini($fraseUsuario);
}
?>


<div class="relative mt-5">
    <!--Design do pop-up de mensagens-->
    <div class=" absolute right-4 top-4">
    
            <!--Campo para mostrar a tradução-->
            <?php if (!empty($respostaDaApi)): ?>
               <span class="py-2 px-7 rounded-2xl rounded-br-none bg-[#F8FBA6] text-xl text-[#746587] font-bold"
            style="box-shadow: -5px 5px 0px #746587">
            <?= htmlspecialchars($respostaDaApi) ?> </span>
            <?php endif; ?>
    </div>

    <!--Design do perfil do usuario-->
    <div class="text-center absolute -right-10 top-12">
        <img src="../imgs/icones/perfilMensagem.png" class="bg-white p-2 rounded-2xl" alt="Perfil do usuário">
        <span
            class="text-sm text-[#746587] font-bold"><!--Nome do usuário que está mandando a mensagem fica aqui--></span>
    </div>
</div>