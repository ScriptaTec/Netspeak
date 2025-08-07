<?php
session_start();
include '../controller/config.php';

if (!isset($_SESSION['user'])) {
    echo "usuario não logado";
}

$username = $_SESSION['user']['email'];
$current_profile_picture = "perfil1.png";
$stmt = $pdo->prepare("SELECT foto_perfil FROM usuarios WHERE email = ?");
$stmt->execute([$username]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
$foto_perfil = $usuario['foto_perfil'];
?>


<?php
require("header.php");
?>

<!--Modal de mudar foto de perfil-->
<div class="relative">
<div id="modal-foto" class="z-50 fixed inset-0 flex justify-center items-center bg-gray-200/50">

<!--Fechar pop-up-->
<button style="cursor: pointer;" type="button" class="btn-cancelar group">
    <img src="../imgs/icones/close.png" alt="ícone de sair do mudar foto de perfil"
        class="absolute top-10 right-90 opacity-100 group-hover:opacity-0 transition duration-900">
    <img src="../imgs/icones/closeHover.png" alt="ícone de sair do mudar foto de perfil"
        class="absolute top-10 right-90 opacity-0 group-hover:opacity-100 transition duration-900">
</button>

<div
    class="w-xl flex flex-col justify-center items-center bg-white py-5 px-10 rounded-4xl border-2 border-gray-400 shadow-xl hover:border-black hover:border-3 transition duration-900">

    <div class="flex flex-col gap-2 justify-center items-center">
        <h1 class="text-4xl">Edite sua foto de perfil</h1>

        <img id="currentProfileDisplay" src="../imgs/imgs_perfil/<?php echo htmlspecialchars($foto_perfil); ?>"
            alt="Foto de Perfil Atual" class="w-40 rounded-full border-3 border-[#746587] shadow-lg">

        <h1 class="text-lg">Foto atual</h1>
    </div>

    <!--Opções de foto de perfil-->
    <form id="profileForm" action="../controller/controller_imgs.php" method="POST">
        <div class="flex flex-wrap justify-center items-center gap-5 mt-5">
            <?php for ($i = 1; $i <= 8; $i++): ?>
                <?php
                $imageName = "perfil{$i}.png";
                ?>

                <div class="profile-option cursor-pointer<?php echo $isSelected; ?>"
                    data-image="<?php echo $imageName; ?>">

                    <img src="../imgs/imgs_perfil/<?php echo $imageName; ?>" alt="Perfil <?php echo $i; ?>"
                        class="w-24 border-gray-300 border-2 rounded-full shadow-lg transition duration-800 ease-in-out hover:border-[#746587]">
                </div>
            <?php endfor; ?>
        </div>

        <input type="hidden" name="selected_picture" id="selectedPictureInput"
            value="<?php echo htmlspecialchars($current_profile_picture); ?>">

        <div class="flex justify-center">
            <button type="submit"
                class="btn-confirmar mt-5 py-1 px-5 rounded-3xl bg-gray-300 text-gray-600 hover:bg-black hover:text-white transition duration-700">
                Editar
            </button>
        </div>
    </form>
</div>
</div>
</div>

<script src="../js/img_perfil.js"></script>